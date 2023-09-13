<?php

require_once 'connect.php';

$productId = $_GET['id'];

$pdo->query("DELETE FROM `product` WHERE id = $productId");

header("Location: /");

