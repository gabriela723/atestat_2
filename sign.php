<html>
    <head>
        <title>Cămara Apusenilor</title>
        <link href="cssuri.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="tot">
            <div id="antet">        
            <div id="sigla">
        
            </div>
                <p id="titlu"> Cămara Apusenilor aka Zestrea Joajii</p>
            </div>
    
            <div id="navbar">
                <?php
            include ("meniul.php");
                ?>
            </div>
    <div id="main">
        <div id="stanga">
            <center>
                    <h1>
                        <p>Bunătăți cu fructe</p>  
                        <p>din Apuseni</p>
                          <img src="logo-final.jpg" width="100px" height="100px" >
                       
                    </h1>
                       </center>
        </div>
        <div id="dreapta">
            <center>
              <h2>User Login </h2>
              <form name="login" method="post" action="login.php">
               Username: <input type="text" name="username" required><br>
               Password: <input type="password" name="password" required><br>

               <input type="submit" name="submit" value="Login!">
              </form>
            </center>
        </div>
    
    </div>
    <div id="subsol">
    
    </div>
</div>

</body>
</html>