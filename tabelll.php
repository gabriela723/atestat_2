<html>
<head><title>CC Industry</title>
<link href="stru.css" rel="stylesheet" type="text/css">    
    
</head>
<body>
<div id="tot">
    <div id="antet">
        <center><img src="sigl.png" height="150" width="500"></center>
        <?php
        session_start();
            if(isset($_SESSION['looser']))
               {
       
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
        <div id="dreapta" >
        <center>
        <?php
        include ("conectare.php");
        $sql = "Select * from produse";
        if ($r=mysqli_query($id_con,$sql)) 
                {
                    if (mysqli_num_rows($r)>0)///daca exista cel putin un produs in setul de date
                    {
                        echo "<table border=1>";
                        echo"<tr> <th>Imagine</th><th>Nume</th> <th>Cantitate</th> <th>Pret</th> <th>Marca</th> </tr>";
                        while ($linie=mysqli_fetch_array($r))
                            {
                               echo "<tr>";
                              echo "<td><img src='$linie[5]' width='200px' height='150px' ><td><h3>$linie[1]<h3></td> <td>$linie[2]</td> <td> $linie[3] </td> <td>$linie[4]</td></td>";
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
        </center>
        </div>
    
    </div>
    <div id="subsol">
    </div>
</div>

</body>
</html>