window.addEventListener("load", loaded);

function loaded(){

    //ALL ARTICLES
    let chocolate = {image:"images/blackdonut.jpg", title:"Chocolate", price:4.99, text:"Nam Chocolate cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."};
    let pink = {image:"images/pinkdonut1.jpg", title:"Pink", price:3.99, text:"Nam Pink cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."};
    let blueAndPink = {image:"images/pinkblue.jpg", title:"Blue And Pink", price:4.99, text:"Nam Pink&Blue cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."};
    let heart = {image:"images/heart1.jpg", title:"Heart", price:3.99, text:"Nam Heart cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."};

    window.articles = [chocolate, pink, blueAndPink, heart];

    //SHOW SELECTED ARTICLE
    window.selectedArticle = document.getElementById("articleLinkTitleH3").textContent;
  
    for(let article of articles){

        if(selectedArticle === article.title){
            document.getElementById("articleImg").setAttribute("src",article.image);
            document.getElementById("articleLinkTitleH3").textContent = selectedArticle.concat(" Donut");
            document.getElementById("articlePriceH4").textContent = article.price;
            document.getElementById("price").setAttribute("value",article.price);  
            document.getElementById("textP").textContent = article.text;
        }
    }


    //SUBSTRACT AND ADD BUTTONS FOR SHOPPINGBAG
    let value = document.getElementById("amount").value = 1;

    document.getElementById("subtract").addEventListener("click", subtract);
    
    function subtract(){
        if(value > 1){
            value--;
            document.getElementById("amount").value = value;
        }
    }
        
    document.getElementById("add").addEventListener("click", add);
    
    function add(){
        value++;
        document.getElementById("amount").value = value;
    }


    //SHOW ADDED TO CART MESSAGE AFTER CLICKING ADD TO CART
    document.getElementById("addToCart").addEventListener("click", function(){

        //to chech if logged in
        let loggedInYet = document.getElementById("loginLi").value;
        
        if( loggedInYet === "account"){

            document.getElementById("addedToCartMessage").textContent = "Article was added to cart.";

        }else{

            document.getElementById("addedToCartMessage").textContent = "You need to be logged in if you want to add to cart.";

        }
    });

    
}