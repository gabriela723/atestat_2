<html>
    <body>
<?php
include_once("conectare.php");
if (isset($_POST['inreg'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirma_parola = $_POST['confirma_parola'];

  if ($password === $confirma_parola) {

    $sql = "SELECT email FROM utilizatori WHERE email = '$email'";
    $result = mysqli_query($id_con, $sql);
    if (!mysqli_num_rows($result) > 0) {
      $sql = "INSERT INTO utilizatori (username, email, password)
              VALUES ('$username', $email', '$password')";
      $result = mysqli_query($id_con, $sql);
      if ($result) {
        $_SESSION['utilizator_logat'] = true;
        $sql = "SELECT id FROM utilizatori WHERE email = '$email'";
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
<form method="post">
  <input type="text" name="username" placeholder="username" />
  <input type="email" name="email" placeholder="Email" />
  <input type="password" name="password" placeholder="Parola" />
  <input type="password" name="confirma_parola" placeholder="Confirma Parola" />
  <button name="inreg" type="submit">Inregistrare</button>
</form>
<a href="sign.php">Logheaza-te</a>

</body>

</html>