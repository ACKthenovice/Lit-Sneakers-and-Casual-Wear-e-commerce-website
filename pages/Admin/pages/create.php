<?php
include '../../../server/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $brandname = $_POST['brandname'];
    $price = $_POST['price'];
    $grade=$_POST['grade'];
    $product_image=$_POST['product_image'];
    // Insert the new book into the database
    $sql = "INSERT INTO products (name, brandname, price, grade,img_url) 
            VALUES ('$name', '$brandname', '$price', '$grade','$product_image')";

    if ($conn->query($sql) === TRUE) {
        echo 'Product created successfully.';
        header('Location: '.$_SERVER['PHP_SELF']);
        exit; // Terminate the script after redirection
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>