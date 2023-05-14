<?php

$user="root";
$mdp="";
$db="enregistrement";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$db);

if($link)
{
	//echo "connexion établie";
	
} else
{
	die(mysqli_connect_error());
}
	
?>