<?php
    session_start();
    if(isset($_SESSION['looser']))
       {
?>
<html>
<head><title>Meniu in html si css</title>
<link href="stru.css" rel="stylesheet" type="text/css">    
    
</head>
<body>
<div id="tot">
  
    <div id="antet">
        <div id="sigla">
        
        </div>
        <div id="login">
        Buna ziua, <?php echo $_SESSION['looser'] ?>
            <a href="deconectare.php">Deconectare</a>
        
        </div>
         
    </div>
    <div id="navbar">
        <?php
            include ("meniulog.php");
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
<?php
  }
else{
    echo "nice try :)";
}
?>
