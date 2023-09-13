<?php

require_once 'connect.php';
require_once 'function.php';
$productId = $_GET['id'];

$sql = $pdo->query("SELECT * FROM `product` WHERE id = $productId");
$product = $sql->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Product Table</title>
</head>

<body>
    <div class="container">
        <h1 class="title title__update">Update Product <?= $product['title']?></h1>
            <form action="updateProduct.php" method="post">
                <input type="hidden" name="id" value="<?= $product['id']?>">
                <div class="form__wrap">
                    <label class="form__label">Title</label>
                    <input class="form__input" type="text" name="title" value="<?= $product['title']?>" id="title" placeholder="Product..">
                </div>
                <div class="form__wrap">
                    <label class="form__label">Description</label>
                    <textarea class="form__textarea" name="description" id="description" placeholder="Some text.."><?= $product['description']?></textarea>
                </div>
                <div class="form__wrap">
                    <label class="form__label">Price</label>
                    <input class="form__input" type="number" value="<?= $product['price']?>" name="price" id="price">
                </div>
                <div class="form__wrap">
                    <label class="form__label">Count</label>
                    <input class="form__input" type="number" value="<?= $product['count']?>" name="count" id="count">
                </div>
                
                <button type="submit" class="button button-edit">Save</button>
        </form>
    </div>

</body>

</html>