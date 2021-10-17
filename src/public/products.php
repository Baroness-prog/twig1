<?php

require_once __DIR__ . '/../../config/twig.php';


$name = 'Wilder';
$products = ['guitare', 'bass', 'bonjo', 'drum', 'lyre'];

echo $twig->render('products.html.twig', ['products' =>$products ]);




