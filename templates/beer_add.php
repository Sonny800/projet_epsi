<?php
require('../inc/connexion.php');
require('../src/Model/beers.php');

// AU CLICK SUR LE BOUTON VALIDER : 
if (isset($_POST['valider'])) {
    // TABLEAU D'ERREUR
    $randomNumber = rand(1, 15);
    $errors = [];
    $beerTitle = $_POST['beer_name'];
    $beerTag = $_POST['beer_tagline'];
    $beerPrice = $_POST['beer_price'];
    $beerDesc = $_POST['beer_description'];
    $url = "https://images.punkapi.com/v2/" . $randomNumber . ".png";

    if (empty($beerTitle) || empty($beerTag) || empty($beerPrice) || empty($beerDesc)) {
        $errors[] = "Tous les champs doivent être renseignés";
    }

    if (strlen($beerTitle) < 4 || strlen($beerTag) < 4) {
        $errors[] = "Les champs tag et titre doivent comporter au minimum 4 caractères";
    }

    if (!is_numeric($beerPrice)) {
        $errors[] = "Le prix doit être un nombre";
    }

    // SI PAS D'ERREUR, LANCEMENT DE LA FUNCTION (beers.php) POUR INSERER LES DONNEES: 
    if (empty($errors)) {
        insertBeer($url, $beerTitle, $beerDesc, $beerTag, $beerPrice);
    }
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

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
                <li class="nav-item">
                    <a class="nav-link" href="beers_list.php">Toutes les bières</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="beer_add.php">Ajouter une bière</a>
                </li>

            </ul>
            <form class="form-inline" method="POST" action="beer_search.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une bière" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Valider</button>
            </form>
        </div>
    </nav>
    <!-- FIN NAVBAR -->


    <div class="container-fluid">
        <div class="row mb-4">
            <div class="offset-4 col-4 offset-4 beer__add__title">
                <h3 class="h1">Ajouter une bière</h3>
            </div>
        </div>

        <div class="row">
            <div class="offset-4 col-4">

                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom de la bière</label>
                        <input value="<?php echo isset($_POST['beer_name']) ? $_POST['beer_name'] : "" ?>" name="beer_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nom de la bière">
                    </div>


                    <div class="form-group">
                        <label for="formGroupExampleInput">Tagline</label>
                        <input value="<?php echo isset($_POST['beer_tagline']) ? $_POST['beer_tagline'] : "" ?>" name="beer_tagline" type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrez la tagline">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Prix</label>
                        <input value="<?php echo isset($_POST['beer_price']) ? $_POST['beer_price'] : "" ?>" name="beer_price" type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrez le prix">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="beer_description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo isset($_POST['beer_description']) ? $_POST['beer_description'] : "" ?></textarea>
                    </div>

                    <button name="valider" type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <?php if (!empty($errors)) : ?>
                <?php foreach ($errors as $error) : ?>
                    <div class="offset-4 col-4">
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>