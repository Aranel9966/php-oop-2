<?php
// $dogSmall = new Animals('dog', 'small');
$catSmall = new Articles('https://arcaplanet.vtexassets.com/arquivos/ids/259198/collare-gatto-majesty-rosso.jpg?v=1769174206', 'cat', 'small', 'collar', 'red', '3.30€');
$catFood = new Food('https://m.media-amazon.com/images/I/81T80+an3WL._AC_SY550_.jpg', 'cat', 'small', 'croquettes', 'beef', '5.30€');
$dogFood = new Food('https://m.media-amazon.com/images/I/81T80+an3WL._AC_SY550_.jpg', 'dog', 'big', 'croquettes', 'beef', '9.30€');
$dogBig = new Articles('https://ss-pics.s3.eu-west-1.amazonaws.com/files/1578339/large-71Ak4fGYXxL._AC_SL1500_.jpg?1595402897', 'dog', 'big', 'dog kennel', 'blue', '20.30€');

$articlesList[] = $catSmall;
$articlesList[] = $dogBig;
$articlesList[] = $catFood;
$articlesList[] = $dogFood;
