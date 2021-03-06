<?php
require('../inc/connexion.php');
require('../src/Model/beers.php');
// RECUPERATION DE L'ID DE LA BIERE POUR AFFICHER LA BONNE
$idBeer = $_GET['id'];
// RECUPERATION DE LA BIERE SELON L'ID
$beer = getOneBeer($idBeer);

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Bières</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="listBeers">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bières</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="beers_list.php">Toutes les bières</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="beer_add.php">Ajouter une bière</a>
                </li>

            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une bière" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Valider</button>
            </form>
        </div>
    </nav>
    <!-- FIN NAVBAR -->


    <div class="container">


        <div class="card one__beer">
            <img class="card-img-top" src="<?php echo $beer['BEER_PICTURE']; ?>" alt="Card image cap">
            <hr>
            <div class="card-body">
                <h5 class="card-title"><?php echo $beer['BEER_NAME']; ?></h5>
                <p class="card-text"><?php echo $beer['BEER_DESCRIPTION']; ?></p>
                <p class="card-text"><small class="text-muted">#id <?php echo $beer['BEER_ID']; ?></small></p>
            </div>
        </div>
    </div>
    <?php
    // RECUPERER JSON 
    // get the contents of the JSON file 
    //$jsonCont = file_get_contents('https://api.punkapi.com/v2/beers');

    //decode JSON data to PHP array
    //$content = json_decode($jsonCont, true);
    //var_dump($content);
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>