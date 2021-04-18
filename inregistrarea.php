<html>
    <head>
        <title>Cămara Apusenilor</title>
        <link href="cssuri.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<?php
include_once("conectare.php");
if (isset($_POST['inreg'])) {
  $username = $_POST['username'];
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $confirma_parola = $_POST['confirma_parola'];

  if ($password === $confirma_parola) {

    $sql = "SELECT mail FROM users WHERE mail = '$mail'";
    $result = mysqli_query($id_con, $sql);
    if (!mysqli_num_rows($result) > 0) {
      $sql = "INSERT INTO users (username, mail, password)
              VALUES ('$username', $mail', '$password')";
      $result = mysqli_query($id_con, $sql);
      if ($result) {
        $_SESSION['utilizator_logat'] = true;
        $sql = "SELECT id FROM users WHERE mail = '$mail'";
        $result = mysqli_query($id_con, $sql);
        $_SESSION['id_user'] = mysqli_fetch_assoc($result)['id'];
        echo "<script>alert('Conexiune realizata cu succes!');</script>";
      } else
        echo "<script>alert('Eroare! Incearca din nou.');</script>";
    } else {
      // Emailul exista deja in baza de date
      echo "<script>alert('Emailul este deja inregistrat!');</script>";
    }
  }
}

?>
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
<form method="post">
  <input type="text" name="username" placeholder="Username" /><br>
  <input type="email" name="email" placeholder="Email" />
    <br>
  <input type="password" name="password" placeholder="Parola" />
    <br>
  <input type="password" name="confirma_parola" placeholder="Confirma Parola" />
    <br>
  <button name="inreg" type="submit">Inregistrare</button>
</form>
<a href="sign.php">Logheaza-te</a>
                </center>
        </div>
    
    </div>
    <div id="subsol">
    
    </div>
</div>

</body>

</html>