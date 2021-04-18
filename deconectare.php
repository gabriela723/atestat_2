<?php
session_start();
unset($_SESSION);
session_destroy();
header("Location: pagina1.php");
?>