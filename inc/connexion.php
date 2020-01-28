<?php 
$localhost = "localhost";
$dbname = "epsi_projet_php";
$dbuser = "root";
$dbpass = "";

$connexion = new PDO('mysql:host='.$localhost.';dbname='.$dbname, $dbuser, $dbpass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      