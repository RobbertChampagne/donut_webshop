window.addEventListener("load", loaded);

function loaded(){

    //ALL ARTICLES
    let chocolate = {image:"images/blackdonut.jpg", title:"Chocolate", price:4.99, text:"Nam Chocolate cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."}
    let pink = {image:"images/pinkdonut1.jpg", title:"Pink", price:3.99, text:"Nam Pink cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."}
    let pinkAndBlue = {image:"images/pinkblue.jpg", title:"Pink&Blue", price:4.99, text:"Nam Pink&Blue cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."}
    let heart = {image:"images/heart1.jpg", title:"Heart", price:3.99, text:"Nam Heart cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in."}

    window.articles = [chocolate, pink, pinkAndBlue, heart];



    //SELECTED ARTICLE
    window.selectedArticle = document.getElementById("articleLinkTitleH3").textContent.split('')[0]; //leaves "donut" out

    for(let article of articles){
        if(selectedArticle === articles)
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
    
}