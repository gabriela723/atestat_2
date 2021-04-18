<html>
    <head>
        <title>Cămara Apusenilor</title>
        <link href="cssuri.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div id="tot">
             <?php
            session_start();
            if(isset($_SESSION['admin']))
               {
       
           
        ?>
                
            
            <div id="antet">
                <div id="sigla">
                </div>
                <?php
                if(isset($_SESSION['admin']))
               {
                    ?>
            <div id="login">
                    <a href="sign.php">Sign in</a>
    
                  <p><a href="inregistrarea.php">Inregistreaza-te</a></p>  
                </div>  <?php
            }
        else
            {
            ?>
            <div id="login">
                Buna ziua, <?php echo $_SESSION["admin"] ?>
            <a href="deconectare.php">Deconectare</a>
                </div>
            <?php
            }
        ?>
               
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
                    <?php
        include ("conectare.php");
        $sql = "SELECT * FROM `produse` WHERE tip='zmeura' ORDER BY denumire";
        if ($r=mysqli_query($id_con,$sql)) 
                {
                    if (mysqli_num_rows($r)>0)///daca exista cel putin un produs in setul de date
                    {
                        echo "<table border=2px;>";
                        echo"<tr> <th>Imagine</th><th>Denumire</th> <th>Data fabricatiei</th> <th>Cantitate</th> <th>Pret</th></tr>";
                        while ($linie=mysqli_fetch_array($r))
                            {
                               echo "<tr>";
                              echo "<td><img src='$linie[5]' width='200px' height='150px' ><td><h3>$linie[1]<h3></td> <td> $linie[3] </td> <td>$linie[4]</td><td>$linie[6]</td></td>";
                               echo "</tr>";
                            }
                       }
                       else 
                       {
                         echo "Nu exista produse in tabela!";
                }
                }else 
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($id_con);
                }
    
            ?>
                    
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