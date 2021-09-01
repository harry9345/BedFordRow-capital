<?php
include "connect.php";
$productId = $_GET["id"];
var_dump($productId);
$deleteQuery = "DELETE FROM `products` WHERE `products`.`id` = ?";
$executeDeleteQuery = $connnect->prepare($deleteQuery);
$executeDeleteQuery->bindValue(1, $productId);
$deleteResult = $executeDeleteQuery->execute();
if ($deleteQuery) {
    header("location: index.php");
} else {
    echo "There is an error ";
}
