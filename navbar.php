
<img id="navbarLogo" src='images/logo2.png' width=100px>
<a id="shoppingCartLogoA" href="shoppingcart.php"><img id="shoppingCartLogoImg" src='images/shoppingcartlogo.png' width=40px ></a>
<a id="hamburgerMenuA" href="#"><img id="hamburgerMenuImg" src='images/hamburger menu.png' width=40px ></a>

<ul id="navbar" class="navbarShow"> 
    <li id="homeLi" class="NavbarLi"><a id="homeA" class="NavbarA" href="index.php">HOME</a></li>
    <li id="aboutLi" class="NavbarLi"><a id="aboutA" class="NavbarA" href="about.php">ABOUT</a></li>
    <li id="shopLi" class="NavbarLi"><a id="shopA" class="NavbarA" href="shop.php">SHOP</a></li>
    <li id="contactLi" class="NavbarLi"><a id="contactA" class="NavbarA" href="contact.php">CONTACT</a></li>

    <li id="loginLi" class="NavbarRightLogin NavbarLi"> <?php if(isset($_SESSION['name'])) : ?> <a id="loginA" class="NavbarA" href="account.php">ACCOUNT</a> <?php else: ?> <a id="loginA" class="NavbarA" href="loginOrRegister.php">LOGIN</a> <?php endif ?> </li>
</ul>
