<html>
<head><title>Meniu in html si css</title>
<link href="stru.css" rel="stylesheet" type="text/css">    
    
</head>
<body>
<div id="tot">
    <div id="antet">        <div id="sigla">
        
        </div>
    </div>
    
    <div id="navbar">
        <?php
            include ("meniu.php");
        ?>
    </div>
    <div id="main">
        <div id="stanga">
            <center>
              <h2>User Login </h2>
              <form name="login" method="post" action="login.php">
               Username: <input type="text" name="username" required><br>
               Password: <input type="password" name="password" required><br>

               <input type="submit" name="submit" value="Login!">
              </form>
            </center>
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