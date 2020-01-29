<?php
ini_get('display_errors');
$localhost = "localhost";
$dbname = "epsi_beer";
$dbuser = "root";
$dbpass = "";

try {
    $connexion = new PDO('mysql:host=' . $localhost . ';dbname=' . $dbname, $dbuser, $dbpass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException  $err) {
    $errMs = $err->getMessage();
    throw $errMs;
    die();
}
