<?php
if(session_status() == PHP_SESSION_NONE)
session_start();//daca exista deja o sesiune nu mai intializeaza alta
$hostname = "localhost";
$username = "root";
$password = "";
$bd = "music_world";

$conexiune = mysqli_connect($hostname,$username,$password)
or die ("Eroare! Functia apelata da eroare, este posbil ca cei 3 parametrii sa fie completati eronati!");

$baza_date = mysqli_select_db($conexiune,$bd)
or die ("Eroare! Numele acestei baze de date nu exista!");
?>
