<?php

$catSmall = new Articles('3.30€', 'https://arcaplanet.vtexassets.com/arquivos/ids/259198/collare-gatto-majesty-rosso.jpg?v=1769174206', 'cat', 'small', 'collar', 'red');
$catFood = new Food('5.30€', 'https://m.media-amazon.com/images/I/81T80+an3WL._AC_SY550_.jpg', 'cat', '1,5 kg', 'croquettes', 'fish');
$dogFood = new Food('9.30€', 'https://www.carrefour.it/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dw15bb8913/large/CROCCHETTECANEMANZOKG4CRF-3560070384549-5.png', 'dog', '4 kg', 'croquettes', 'beef');
$dogBig = new Articles('20.30€', 'https://media.adeo.com/marketplace/MKP/87431046/01dd6b8c811edae40f229ab9746fc53c.jpeg?width=650&height=650&format=jpg&quality=80&fit=bounds', 'dog', 'big', 'dog kennel', 'blue');

$articlesList[] = $catSmall;
$articlesList[] = $dogBig;
$articlesList[] = $catFood;
$articlesList[] = $dogFood;
