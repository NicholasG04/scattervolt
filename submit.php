<?php

$url = 'products.json';
$data = file_get_contents($url);
$products = json_decode($data, true);

#echo $products[$_POST['productId']]['sold'];

$products[$_POST['productId']]['sold'] = !$products[$_POST['productId']]['sold'];
$string_to_write = json_encode($products, true);
file_put_contents($url, $string_to_write);
echo 'done';

header('Location: product-admin.php');
?>
