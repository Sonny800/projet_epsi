<?php
require("../inc/connexion.php");
header('Content-Type: application/json');
 $sql = "SELECT * FROM beer;";
        $query = $connexion->query($sql);
        $res = $query->fetchAll();

$result = array();
foreach ($res as $rs) {
$result[] = $res;
}  
 $json = json_encode($result);
var_dump($json);
