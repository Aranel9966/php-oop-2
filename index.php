<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti,
come immagine, titolo, prezzo, icona della categoria 
ed il tipo di articolo che si sta visualizzando 
(prodotto, cibo, gioco, cuccia). -->
<?php
require_once("./Models/animals.php");
require_once("./Models/articles.php");
require_once("./Models/food.php");
require_once("./db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-info-subtle">
    <h1 class=" d-flex justify-content-center">Pet Shop</h1>
    <div class="d-flex justify-content-center  flex-wrap">
        <?php
        foreach ($articlesList as $singleItems) {
        ?>
            <div class="card m-3 d-flex justify-content-center" style="width: 200px; ">
                <div class="img" style="height: 250px;">
                    <img src="<?= $singleItems->img ?>" class="card-img-top" style="height: 100%;" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $singleItems->type ?></h5>
                    <p class="card-text">
                        <span>Size: <?= $singleItems->size ?></span>
                        <br>
                        <span>Breed: <?= $singleItems->breed ?></span>
                        <br>
                        <span>Article: <?= $singleItems->type ?></span>
                        <span>
                            <?php
                            if (isset($singleItems->color)) {
                                echo $singleItems->color;
                            } else {
                                echo $singleItems->taste;
                            };
                            ?>
                        </span>
                        <br>
                        <span>Price: <?= $singleItems->price ?></span>
                    </p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>