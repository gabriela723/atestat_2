<html>
    <head>
        <title>Cămara Apusenilor</title>
        <link href="cssuri.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="tot">
             <?php
            session_start();
            
       
           
        ?>
                
            
            <div id="antet">
                <div id="sigla">
                </div>
                
            <div id="login">
                    <a href="sign.php">Sign in</a>
    
                  <p><a href="inregistrarea.php">Inregistreaza-te</a></p>  
                </div>  
        
               
                <p id="titlu"> Cămara Apusenilor aka Zestrea Joajii</p>
             
            </div>
            <div id="navbar">
                <?php
            
            if(isset($_SESSION['admin']))
               {
            include ("meniuladmin.php");
            }
        else
            {
            include ("meniul.php");
            }
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
                </div>
            </div>
            <div id="subsol">
            </div>
        </div>
    </body>
</html>
