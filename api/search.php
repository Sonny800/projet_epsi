<?php
require("../inc/connexion.php");
header('Content-Type: application/json');
$sql = "SELECT * FROM beer WHERE BEER_NAME LIKE '%"  . $_GET['q'] . "%' ;";
$query = $connexion->query($sql);
$results = $query->fetchAll();
$RESULTS = array();
foreach ($results as $res) {
    $RESULTS[] = $res;
};
echo json_encode($RESULTS, JSON_UNESCAPED_SLASHES);
