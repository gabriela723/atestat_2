<html>
<head><title>Meniu in html si css</title>
<link href="stru.css" rel="stylesheet" type="text/css">    
    
</head>
<body>
<div id="tot">
    <div id="login">
                <a href="signin.php">Sign in</a>
        </div>
    <div id="antet">
        <div id="sigla">
        
        </div>
        <div id="login">
        </div>
         
    </div>
    <div id="navbar">
        <?php
            include ("meniu.php");
        ?>
    </div>
    <div id="main">
        <div id="stanga">
            stanga
        </div>
        <div id="dreapta">
            dreapta
        </div>
    
    </div>
    <div id="subsol">
    
    </div>
</div>

</body>
</html>