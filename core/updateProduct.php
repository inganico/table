<?php
require_once 'connect.php';

$productId = $_POST['id'];
$productTitle = $_POST['title'];
$productDesc = $_POST['description'];
$productPrice = $_POST['price'];
$productCount = $_POST['count'];

$sql = $pdo->query("SELECT * FROM `product` WHERE id = $productId");


$query = $pdo->prepare("UPDATE `product` SET title = :title , description = :desc, price = :price, count = :count WHERE id = $productId");

$query-> execute([
    'title' => $productTitle,
    'desc' => $productDesc,
    'price'=> $productPrice,
    'count' => $productCount,
]);

header("Location: cartProd.php?id=$productId");