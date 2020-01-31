<?php

function getAllBeers()
{
    require('../inc/connexion.php');
    $sql = "SELECT * FROM beer";
    $query = $connexion->query($sql);
    $beers = $query->fetchAll(PDO::FETCH_ASSOC);
    return $beers;
}

function getOneBeer($id)
{
    require('../inc/connexion.php');
    $sql = "SELECT * FROM beer WHERE BEER_ID = :id";
    $query = $connexion->prepare($sql);
    $query->bindValue(":id", $id);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function insertBeer($url, $title, $descript, $tagline, $price)
{
    require('../inc/connexion.php');
    $sql = "INSERT INTO beer (BEER_PICTURE, BEER_NAME, BEER_DESCRIPTION, BEER_TAGLINE, BEER_PRICE, BEER_CREATED_AT) VALUES(:picture, :title, :descript, :tagline, :price, NOW())";
    $query = $connexion->prepare($sql);
    $query->bindValue(":picture", $url);
    $query->bindValue(":title", $title);
    $query->bindValue(":descript", $descript);
    $query->bindValue(":tagline", $tagline);
    $query->bindValue(":price", $price);
    if ($query->execute()) {
        header('Location: ../templates/beers_list.php');
        die;
    } else {
        return "La requête n'a pu aboutir";
    }
}

function deleteBeer($id)
{
    require('../inc/connexion.php');
    $sql = "DELETE FROM beer WHERE BEER_ID = :id";
    $query = $connexion->prepare($sql);
    $query->bindValue(":id", $id);
    if ($query->execute()) {
        header('Location: ../templates/beers_list.php');
        die;
    } else {
        return "La suppression n'a pas pu aboutir";
    }
}
