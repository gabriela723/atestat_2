
<html>
    <head>
        <title>Cămara Apusenilor</title>
        <link href="cssuri.css" rel="stylesheet" type="text/css">
        <style>
            table{
                border: 1px solid ;
                background-color: #FFCCFF;
                border-color='grey' ;
                
            }
        </style>

    </head>
    <body>
        <div id="tot">
            
            <div id="antet">
                <div id="sigla">
                </div>
                
                <div id="login">
                    <a href="sign.php">Sign in</a>
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
                    <?php
        include ("conectare.php");
        $sql = "SELECT * FROM `produse` WHERE id_prod<=2";
        if ($r=mysqli_query($id_con,$sql)) 
                {
                    if (mysqli_num_rows($r)>0)///daca exista cel putin un produs in setul de date
                    {
                        echo "<table border=1px;>";
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
            
            
                    
        </div>
        <div id="subsol">
            </div>
    </body>
</html>
