<?php
    if(isset($_POST["username"])&&isset($_POST["password"]))
    {
        include("conectare.php");
        $utilizator=$_POST['username'];
        $p=$_POST['password'];
        ///$parola_criptata = password_hash($p, ///PASSWORD_DEFAULT);///criptez ///parola introdusa de ///user
	    $sql="SELECT * from users WHERE username='$utilizator' AND password='$p'";
        if ($r=mysqli_query($id_con,$sql))
        {
                if(mysqli_num_rows($r))///daca s-a gasit utilizatorul
                {
                    ///$linie=mysqli_fetch_array($r);                   
                    ///if($linie[7]==$parola_criptata
                        session_start();
                        $_SESSION['admin'] = $utilizator;
                        header("Location: pagina1log.php");
                }
                    else
                        echo("user inexistent!");
        }
                else
                        echo("user inexistent!");
	   } 
else
    header("Location: pagina1.php");
    
?>