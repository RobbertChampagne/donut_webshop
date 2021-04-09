window.addEventListener("load", loaded);

function loaded(){
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