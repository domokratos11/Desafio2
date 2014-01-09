<?php
include_once "login.php";
$nombre=$_GET['name'];
$Consulta="DELETE FROM datos WHERE nombre='$nombre'";
$Con->query($Consulta);
header("location:index.php");

?>