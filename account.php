<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="accountStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>Account</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="accountContainer">

            <div id="accountActionsContainer">

                <form id="accountActionsForm" action="">
                    <button type="submit" value="logout" id="logoutButton" class="accountActionButtons" name="logoutButton">Logout</button>
                    <button type="submit" value="deleteAccount" id="deleteAccountButton" class="accountActionButtons" name="deleteButton">Delete Account</button>
                </form>

            </div>
            

            <div id="orderContainer">
    
                <h3 class="titleH3">Orders:</h3>

                <table id="orderTable">
                    <tr>
                        <th>ID</th>
                        <th>DATE</th>
                        <th>PRODUCT NAME</th>
                        <th>AMOUNT</th>
                    </tr>
                </table>

            </div>

            <div id="accountDetailsContainer">
                <h3 class="titleH3">Account Details:</h3>

                <form id="form" action="">
                
                    <h5>Username</h5>
                    <input name="name" class="accountInputs" type="text" id="usernameinput" placeholder="Enter your username" required >
                    
                    <h5>Password</h5>
                    <input name= "password" class="accountInputs" type="text" id="passwordinput" placeholder="Enter your password" required >

                    <h5>Password (repeat)</h5>
                    <input name= "passwordrepeat" class="accountInputs" type="text" id="passwordinput" placeholder="Enter your password" required >
                    
                    <h5>Email</h5>
                    <input name= "email" class="accountInputs" type="email" id="emailinput" placeholder="Enter your email" required >
                    
                    <h5>Credit Card Number</h5>
                    <input name= "creditCardNumber" class="accountInputs" type="text" id="creditCardNumberinput" placeholder="Enter your credit card nr." required >
                    
                    <h5>Address</h5>
                    <input name= "Address" class="accountInputs" type="text" id="addressinput" placeholder="Enter your address" required >

                    <br><br>
                    <button type="submit" value="save" id="accountButton" name="saveChangesButton">Save Changes</button>
                    
                </form>

            </div>
            
        </div>


        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>