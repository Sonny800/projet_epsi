<?php 

function getAllBeers(){
    require('../inc/connexion.php');
    $sql = "SELECT * FROM beer";
    $query = $connexion->query($sql);
    $beers = $query->fetchAll(PDO::FETCH_ASSOC);
    return $beers;
}