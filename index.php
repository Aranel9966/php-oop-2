<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti,
come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
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
</head>

<body>
    <span>
        <?= $dogSmall->breed ?>
        <?= $dogSmall->size ?>
        <br>
        <?= $catSmall->breed ?>
        <?= $catSmall->size ?>
        <?= $catSmall->type ?>
        <?= $catSmall->price ?>
        <?= $catSmall->color ?>
        <br>
        <?= $catFood->breed ?>
        <?= $catFood->size ?>
        <?= $catFood->type ?>
        <?= $catFood->price ?>
        <?= $catFood->taste ?>
    </span>

</body>

</html>