window.addEventListener("load", loaded);

function loaded() {

    window.articles = []; //ARTICLE OBJECTS INSIDE SHOPPING CART
    

    //ADJUSTMENT SHOPPING CART
    ajaxCallStartOnLoad();
    
    function updateArticlesListInPhp(){
        //UPDATE OBJECT INSIDE PHP AFTER MINUS, ADD, REMOVE

        let articlesToSendToPhp = JSON.stringify(articles);

        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                //RELOAD SCREEN
                let table = document.getElementById("productTable");

                while(table.firstChild){
                    table.removeChild(table.firstChild);
                }

                articles = [];
                defineSubtotal(articles);
                ajaxCallStartOnLoad();

            }
        };
       
        xmlhttp.open("GET", "shoppingcartServer.php?articlesAdjustment=" + articlesToSendToPhp, true);
        xmlhttp.send();
    }

    function minus(event){
        let clickedArticleName = event.target.name;

        for (let article of articles){
            if(article.name === clickedArticleName){
                article.amount--;
            }
        }

        
        //UPDATE OBJECT INSIDE PHP AFTER MINUS, ADD, REMOVE
        updateArticlesListInPhp();

    }
    
    function add(event){
        let clickedArticleName = event.target.name;

        for (let article of articles){
            if(article.name === clickedArticleName){
                article.amount++;
            }
        }
        
        

        //UPDATE OBJECT INSIDE PHP AFTER MINUS, ADD, REMOVE
        updateArticlesListInPhp();

    }
    
    function remove(event){
        let clickedArticleName = event.target.name;

        for (let article of articles){
            if(article.name === clickedArticleName){
                article.amount = 0;
            }
        }
        
       

        //UPDATE OBJECT INSIDE PHP AFTER MINUS, ADD, REMOVE
        updateArticlesListInPhp();
    }
    
    function createTable(articles){

        let table = document.getElementById("productTable");

        //TABLE HEADERS
        let tr = document.createElement("tr");

        for (i = 0; i < 3; i++) {
            let th = document.createElement("th");

            if (i === 0) {
                th.textContent = "PRODUCT";
                th.setAttribute("class", "columnTitel");
            } else if (i === 1) {
                th.textContent ="QTY";
                th.setAttribute("class", "columnTitel");
            } else {
                th.textContent = "PRICE";
                th.setAttribute("class", "columnTitel");
            }

            tr.appendChild(th);

        }

        table.appendChild(tr);

        //TABLE ARTICLES
        for (let article of articles){

            let tr = document.createElement("tr");

            for (i = 0; i < 6; i++) {
                let td = document.createElement("td");

                if (i === 0) {
                    td.textContent = article.name;
                    td.setAttribute("class", "productTd");
                } else if (i === 1) {
                    td.textContent = article.amount;
                    td.setAttribute("class", "amountTd");
                } else if (i === 2) {
                    td.textContent = article.price;
                    td.setAttribute("class", "priceTd");
                } else if (i === 3) {
                    let button = document.createElement("button");
                    button.textContent = "-";
                    button.setAttribute("class", "minusButtons");
                    button.setAttribute("name", article.name); //so we know what button is from what article
                    button.addEventListener("click", minus);
                    td.appendChild(button);
                } else if (i === 4) {
                    let button = document.createElement("button");
                    button.textContent = "+";
                    button.setAttribute("class", "addButtons");
                    button.setAttribute("name", article.name);
                    button.addEventListener("click", add);
                    td.appendChild(button);
                } else {
                    let button = document.createElement("button");
                    button.textContent = "X";
                    button.setAttribute("class", "deleteButtons");
                    button.setAttribute("name", article.name);
                    button.addEventListener("click", remove);
                    td.appendChild(button);
                }

                tr.appendChild(td);
            }

            table.appendChild(tr);
        }

    }

    function defineSubtotal(articles){
        
        let total = 0;

        for (let article of articles){
            total += article.amount * article.price;
        }

        total = Math.round(total * 100) / 100;

        document.getElementById("subtotalH4").textContent = "Subtotal " + total + '€';
    }

    //objectsJson == [{"name":"Chocolate","amount":2,"price":4.99},{"name":"Pink","amount":9,"price":3.99},..]
    function defineArticleObjects(objectsJson){
        
        //CREATE OBJECTS IN JS OF OBJECTS FROM PHP THRU JSON
        for (let article of objectsJson){
            let articleObject = {"name":article.name,"amount":article.amount,"price":article.price};
            articles.push(articleObject);
        }

        createTable(articles);
        defineSubtotal(articles);
    }

    function ajaxCallStartOnLoad(){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let objectsJson = JSON.parse(this.responseText);
                defineArticleObjects(objectsJson);
            }
        };
    
        xmlhttp.open("GET", "shoppingcartServer.php", true);
        xmlhttp.send();
    }

}
