<?php

require_once 'core/connect.php';
require_once 'core/function.php';

$query = $pdo->query("SELECT * FROM `product`");
$productArr = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Product Table</title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1 class="title">Product Shop</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Count</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    foreach ($productArr as $product) {
                    ?>
                        <tr>
                            <td class="td-id" scope="row"><?=$product['id']?></td>
                            <td>
                                <a class="td-title" href="core/cartProd.php?id=<?=$product['id']?>"><?=$product['title']?></a>
                            </td>
                            <td class="td-center"><?=$product['price']?> &#8381;.</td>
                            <td class="td-center"><?=$product['count']?></td>
                            <td class="td-center">
                                <a href="core/editProduct.php?id=<?=$product['id']?>" class="btn btn__green">Edit</a> 
                                <a href="core/deleteProduct.php?id=<?=$product['id']?>" class="btn btn__red">Delete</a> 
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
                <form class="form" action="core/addProduct.php" method="post">
                <h2 class="title form__title">Add product in table</h2>
                    <div class="form__wrap">
                        <label class="form__label">Title</label>
                        <input type="text" name="title" class="form__input" id="title" placeholder="Product..">
                    </div>
                    <div class="form__wrap">
                        <label class="form__label">Description</label>
                        <textarea class="form__textarea" name="description" id="description" placeholder="Some text.."></textarea>
                    </div>
                    <div class="form__wrap">
                        <label class="form__label">Price</label>
                        <input type="number" class="form__input" name="price" id="price">
                    </div>
                    <div class="form__wrap">
                        <label class="form__label">Count</label>
                        <input type="number" class="form__input" name="count" id="count">
                    </div>
                    
                    <button type="submit" class="button">Add product</button>
            </form>
            
        </div>
    </div>
    
</body>

</html>