<!-- to insert product from Html input to db -->

<?php
include 'connect.php';

// Taking all 6 values from the form data(input)

$productId =  $_POST['productId'];
$productName = $_POST['productName'];
$productSold = $_POST['productSold'];
$minPriceRange = $_POST['minPriceRange'];
$maxPriceRange = $_POST['maxPriceRange'];
$createdDate =  $_POST['createdDate'];

$inserQuery = "INSERT INTO `products` VALUES (NULL, ?, ?, ?, ?, ?, ?);";
$executeInsertQuery = $connect->prepare($inserQuery);

$executeInsertQuery->bindValue(1, $productId);
$executeInsertQuery->bindValue(2, $productName);
$executeInsertQuery->bindValue(3, $productSold);
$executeInsertQuery->bindValue(4, $minPriceRange);
$executeInsertQuery->bindValue(5, $maxPriceRange);
$executeInsertQuery->bindValue(6, $createdDate);
$insertResult = $executeInsertQuery->execute();


if ($insertResult) {
    header("location: index.php#table");
} else {
    echo "Has Error :(";
}
