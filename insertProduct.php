<?php
include 'connect.php';

// Taking all 6 values from the form data(input)
$id = 999545454;
$productId =  $_REQUEST['productId'];
$productName = $_REQUEST['productName'];
$createdDate =  $_REQUEST['createdDate'];
$productSold = $_REQUEST['productSold'];
$minPriceRange = $_REQUEST['minPriceRange'];
$maxPriceRange = $_REQUEST['maxPriceRange'];


$inserQuery = "INSERT INTO `products` (`id`, `ProductId`, `ProductName`, `NumberOfProductToBeSold`, `MinimumPriceRange`, `MaximumPriceRage`, `CreatedDate`) 
VALUES ('$id','$productName','$createdDate','$productSold','$minPriceRange','$maxPriceRange');";
$executeInsertQuery = $connnect->prepare($inserQuery);
$insertResult = $executeInsertQuery->execute();

if ($insertResult) {
    header("location: index.php");
} else {
    header("location: inserProduct.php");
    echo "ERROR: Hush! Sorry $inserQuery. "
        . mysqli_error($connect);
}
