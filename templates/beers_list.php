<?php
require('../inc/connexion.php');
require('../src/Model/getAllBeers.php');
$datas = getAllBeers();
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

            </ul>
            <form class="form-inline" method="POST" action="beer_search.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une bière" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Valider</button>
            </form>
        </div>
    </nav>
    <!-- FIN NAVBAR -->


    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 class="beers_list_title">Toutes les bières</h2>
        </div>
        <table class="table beersTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bières</th>
                    <th scope="col">Slogan</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Miniature</th>
                    <th scope="col">Voir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datas as $data) : ?>
                    <tr>
                        <th scope="row"> <?php echo $data['BEER_ID']; ?></th>
                        <td><?php echo $data['BEER_NAME']; ?></td>
                        <td>Description 1</td>
                        <td>4.50€</td>
                        <td> <img class="table__img" src="<?php echo $data['BEER_PICTURE']; ?>" alt=""> </td>
                        <td> <i class="fas fa-search"></i> </td>
                    </tr>
                <?php endforeach; ?>
                

            </tbody>
        </table>

    </div>
    <?php
    // RECUPERER JSON 
    // get the contents of the JSON file 
    // $jsonCont = file_get_contents('https://api.punkapi.com/v2/beers');

    // //decode JSON data to PHP array
    // $content = json_decode($jsonCont, true);


    // $sql = "INSERT INTO beer (BEER_ID, BEER_PICTURE, BEER_NAME, BEER_DESCRIPTION) VALUES(:id,:pic,:beerName,:descript)";
    // $query = $connexion->prepare($sql);
    // foreach($content as $beer){
    //     var_dump($beer);
    //     $beerId = $beer['id'];
    //     $beerPicture = $beer['image_url'];
    //     $beerName = $beer['name'];
    //     $beerDescripion = $beer['description'];
    //     $query->bindValue(":id", $beerId);
    //     $query->bindValue(":pic", $beerPicture);
    //     $query->bindValue(":beerName", $beerName);
    //     $query->bindValue(":descript", $beerDescripion);
    //     $query->execute();
    // }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>