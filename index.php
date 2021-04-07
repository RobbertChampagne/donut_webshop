<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="indexStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>Home</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div>
            <div id="imgTitleDivContainer">

                <div id="titleDivContainer">
                    <h2 class="indexTitleH2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <h2 class="indexTitleH2">Nullam fringilla placerat arcu vel eleifend.</h2>
                </div>

                <div id="emptySpace">&nbsp;</div>

                <img id="indexImg" src="images/heart.jpg" width=200px alt="">
                
            </div>
            
            <br>
            <br>
            
            <div>
                <div class="pictoContainerDiv">
                    <img class="pictograms" src="images/tevreden.png" alt="">
                    <h4>TEVREDEN KLANTEN</h4>
                    <p>Aliquam fringilla nibh quis urna accumsan aliquet.<br>Sed consequat eu est in placerat.</p>
                </div>

                <div class="pictoContainerDiv">
                    <img class="pictograms" src="images/fast.png" alt="">
                    <h4>SNELLE LEVERING</h4>
                    <p>Aliquam fringilla nibh quis urna accumsan aliquet.<br>Sed consequat eu est in placerat.</p>
                </div>

                <div class="pictoContainerDiv">
                    <img class="pictograms" src="images/fresh.png" alt="">
                    <h4>VERS</h4>
                    <p>Aliquam fringilla nibh quis urna accumsan aliquet.<br>Sed consequat eu est in placerat.</p>
                </div>

                <div class="pictoContainerDiv">
                    <img class="pictograms" src="images/secure.png" alt="">
                    <h4>SECURE</h4>
                    <p>Aliquam fringilla nibh quis urna accumsan aliquet.<br>Sed consequat eu est in placerat.</p>
                </div>
            </div>

            <div>
                <img src="images/pink.png" alt="" width=100%>
            </div>
        </div>

        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>