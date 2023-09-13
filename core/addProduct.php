<?php
require_once 'connect.php';

$productId = $_GET['id'];
$productTitle = $_POST['title'];
$productDesc = $_POST['description'];
$productPrice = $_POST['price'];
$productCount = $_POST['count'];


$sql = $pdo->query ("INSERT INTO product (`id`, `title`, `description`, `price`, `count`) VALUES (null, '$productTitle', '$productDesc', $productPrice, $productCount)");


header("Location: /");




