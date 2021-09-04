 <!-- to remove a product from table -->

 <?php
    include "connect.php";
    $productId = $_GET["id"];

    $deleteQuery = "DELETE FROM `products` WHERE `products`.`id` = ?";
    $executeDeleteQuery = $connect->prepare($deleteQuery);
    $executeDeleteQuery->bindValue(1, $productId);
    $deleteResult = $executeDeleteQuery->execute();

    if ($deleteQuery) {
        header("location: index.php");
    } else {
        echo "There is an error ";
    }
