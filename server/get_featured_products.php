<?php
include 'connection.php';
$stmt =$conn->prepare("SELECT * FROM products");/*stmt=variable statement*/
$stmt->execute();
$featured_products =$stmt->get_result();//arrary for looping
?>