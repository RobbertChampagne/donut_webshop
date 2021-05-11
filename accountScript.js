window.addEventListener("load", loaded);

function loaded() {

    ajaxCallStartOnLoad()

    function createTable(orders){
        
        let table = document.getElementById("orderTable");

        //TABLE HEADERS
        let tr = document.createElement("tr");

        for (i = 0; i < 4; i++) {
            let th = document.createElement("th");

            if (i === 0) {
                th.textContent = "ID";
            } else if (i === 1) {
                th.textContent ="DATE";
            } else if (i === 2) {
                th.textContent = "PRODUCT NAME";
            } else{
                th.textContent = "QTY";
            }

            tr.appendChild(th);
        }

        table.appendChild(tr);

        //TABLE ORDERS
        //$order = [$orderId, $date, $product_name, $amount];
        for (let order of orders){

            let tr = document.createElement("tr");

            for (i = 0; i < 4; i++) {
                let td = document.createElement("td");

                if (i === 0) {
                    td.textContent = order[i];
                    td.setAttribute("class", "orderTd");
                } else if (i === 1) {
                    td.textContent = order[i];
                    td.setAttribute("class", "dateTd");
                } else if (i === 2) {
                    td.textContent = order[i];
                    td.setAttribute("class", "productNameTd");  
                } else {
                    td.textContent = order[i];
                    td.setAttribute("class", "amountTd"); 
                }

                tr.appendChild(td);
            }

            table.appendChild(tr);
        }
    }


    //AJAX CALL TO accountServer.php TO GET ORDERS TO SHOW IN TABLE
    function ajaxCallStartOnLoad(){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let objectsJson = JSON.parse(this.responseText);
                createTable(objectsJson);
            }
        };
    
        xmlhttp.open("POST", "accountServer.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("getOrders=true");
    }
}