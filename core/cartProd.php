<?php
require_once 'connect.php';

$productId = $_GET['id'];

$sql = $pdo->query("SELECT * FROM `product` WHERE id = $productId");
$product = $sql->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cart Product</title>
</head>
<body>
    <div class="container">
    <h1 class="title title__update"><?=$product['title']?></h1>
        <div class="wrap-cart">
            <p class="card-text">Description: <?=$product['description']?></p>
            <p class="card-text">Price: <?=$product['price']?> руб.</p>
            <p class="card-text">Count: <?=$product['count']?></p>
            <div>
                <a class="button button-card" href="/">home</a>
            </div>
        </div>  
    </div>
    
</div>
</body>
</html>