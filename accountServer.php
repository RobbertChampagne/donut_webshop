<?php

session_start();

//INITIALISING VAR
$errors = array();
$session_email = $_SESSION['email'];
$creditcardnumber = "";
$address = "";
$password = "";
$customer_id = $_SESSION['customerId'];

//CONNECT TO DB
$dbPassword = "robbertadmin";
$dbUserName = "admin_robbert";
$dbServer = "localhost";
$dbName = "donutwebshop";

$connection = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno) //when there is no connection 
{
    exit("Connection DB failed. Reason: ".$connection->connect_error);
}

//SHOW ORDERS
$query = "SELECT * FROM orders WHERE customer_id = ?";
$result = $connection->prepare($query); //prepares query
$result->bind_param("s", $customer_id ); //add type to var
$result->execute(); //uses query on DB
$result->bind_result($orderId, $customer_id, $date, $product_name, $amount); //save output query in variable
$result->store_result(); //save result

$ordersToShow = array();

if($result->num_rows > 0){
    while($result->fetch()){
        $order = [$orderId, $date, $product_name, $amount];
        Array_push($ordersToShow, $order);
    }
}
$result->close();

//AJAX CALL FROM accountScript.js TO SHOW ORDERS IN TABLE
if (isset($_POST['getOrders'])) {
    $ordersToShow = json_encode($ordersToShow); //to json
    echo $ordersToShow; 
}


//SAVE ACCOUNT DETAILS
if (isset($_POST['saveChangesButton'])) {

    //FORM VALIDATION
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS); //This filter is used to escape "<>& and characters with ASCII value below 32
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS); 
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); //remove all illegal characters from the $email variable
    $creditcardnumber = filter_var($_POST['creditcardnumber'], FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_SPECIAL_CHARS);

    //IS EMPTY? 
    if(empty($name)) {array_push($errors, "Username is required!");}
    if(empty($email)) {array_push($errors, "Email is required!");}

    //CHECK DB FOR SAME USER WITH SAME email
    $email_check_query = "SELECT email FROM customer_profile WHERE email = ? LIMIT 1"; //stops after finding 1
    $result = $connection->prepare($email_check_query); //prepares query on db
    $result->bind_param("s", $email ); //add type to var
    $result->execute(); //uses query on DB
    $result->store_result(); //save result

    if($result->num_rows > 0 && $email != $session_email ){array_push($errors, "Email already in use.");} //if email exists and input_email is != to session_email
    
    $result->close();

    //CONFIG USER IF NO ERROR
    if(count($errors) == 0){ 
        $query = "UPDATE customer_profile SET name=?, email=?, creditcardnumber=?, address=? WHERE email=?";
        $result = $connection->prepare($query); //prepares query
        $result->bind_param("sssss", $name, $email, $creditcardnumber, $address, $session_email ); //add type to var
        $result->execute(); //uses query on DB  
        $result->store_result(); //save result
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $result->close();
    }

        
    //SHOW UPDATED ACCOUNT DETAILS 
    $query = "SELECT creditcardnumber, address FROM customer_profile WHERE email = ?";
    $result = $connection->prepare($query); //prepares query
    $result->bind_param("s", $email ); //add type to var
    $result->execute(); //uses query on DB
    $result->bind_result($creditcardnumber, $address); //save output query in variable
    $result->store_result(); //save result

    if($result->num_rows > 0){
        while($result->fetch()){
            $_SESSION['creditcardnumber'] = $creditcardnumber;
            $_SESSION['address'] = $address;
        }
    }
    $result->close();

}

//SAVE PASSWORD CHANGES
if (isset($_POST['savePasswordChangesButton'])) {

    //FORM VALIDATION
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password2 = filter_var($_POST['passwordrepeat'], FILTER_SANITIZE_SPECIAL_CHARS);
    
    //IS EMPTY? 
    if(empty($password)) {array_push($errors, "Password is required!");}
    if($password != $password2) {array_push($errors, "Passwords need to be the same!");}
    
    //CONFIG USER PASSWORD IF NO ERROR
    if(count($errors) == 0){ 
        $password = md5($password); //encrypt password

        $query = "UPDATE customer_profile SET password=? WHERE email=?";
        $result = $connection->prepare($query); //prepares query
        $result->bind_param("ss", $password, $session_email ); //add type to var
        $result->execute(); //uses query on DB  
        $result->store_result(); //save result
        $result->close();
    }
}

//DELETE ACCOUNT
if(!empty($_POST['deleteButton'])){
    $query = "DELETE FROM customer_profile WHERE email=?";
    $result = $connection->prepare($query); //prepares query
    $result->bind_param("s", $session_email); //add type to var
    $result->execute(); //uses query on DB  
    $result->store_result(); //save result
    $result->close();
    header("location: loginOrRegister.php");
}


?>