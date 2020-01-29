<?php
require("../inc/connexion.php");
header('Content-Type: application/json');
 $sql = "SELECT * FROM beer;";
        $query = $connexion->query($sql);
        $res = $query->fetch();

$result = array();
foreach ($res as $rs) {
    $result[] = $res;
}  
        echo json_encode(array('result' => $result));
        ?>