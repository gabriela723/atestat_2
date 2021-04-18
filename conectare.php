<?php
$id_con = @mysqli_connect("localhost","root","","zestrea");
if (!$id_con)
{
    die("conexiune imposibila ".mysqli_connect_error());
}
?> 
