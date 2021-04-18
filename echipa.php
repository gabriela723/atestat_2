<html>
<head><title>Meniu in html si css</title>
<link href="stru.css" rel="stylesheet" type="text/css">    
    
</head>
<body>
<div id="tot">
    <div id="antet">
        <div id="sigla">
        
        </div>
    
        <img src="fly.gif" >
    
        
        <?php
        session_start();
            if(isset($_SESSION['looser']))
               {
        ?>
        <div id="login">
        Buna ziua, <?php echo $_SESSION['looser'] ?>
            <a href="deconectare.php">Deconectare</a>
        
        </div>
         <?php
            }
        ?>
    </div>
    <div id="navbar">
        <?php
            
            if(isset($_SESSION['looser']))
               {
            include ("meniulog.php");
            }
        else
            {
            include ("meniu.php");
            }
        ?>
    </div>
    <div id="main">
        <div id="stanga">
            stanga
        </div>
        <div id="dreapta">
            aceasta pagina este despre echipa xiimii
        </div>
    
    </div>
    <div id="subsol">
    
    </div>
</div>

</body>
</html>