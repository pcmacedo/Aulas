<?php
include ("conecta.php");
$user=$_REQUEST['usuario'];//usuario veio do html
$pass=$_REQUEST['senha'];//senha veio do post do html
$consulta="Select *from usuarios where nome='$user' and senha='$pass'";
$resultado=mysqli_query($link,$consulta)or die("Erro no select");
if (mysqli_num_rows($resultado)>0)
	echo "achei";
else
	echo "Usuario ou senha invalida";
?>
