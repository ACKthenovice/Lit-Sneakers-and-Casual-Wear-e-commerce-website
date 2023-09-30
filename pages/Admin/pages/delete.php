
<?php
session_start();
include '../../../server/connection.php';
if(isset($_GET['id'])){
    $product_id=$_GET['id'];
    $stmt=$conn->prepare("DELETE FROM products WHERE id=?");
    $stmt->bind_param("i",$product_id);
    $stmt->execute();
    header('location: product_admin.php?delete_message=Product has been deleted');
}
else if(isset($_GET['id'])){
    $customer_id=$_GET['id'];
    $stmt=$conn->prepare("DELETE FROM customers WHERE customer_id=?");
    $stmt->bind_param("i",$customer_id);
    $stmt->execute();
    header('location: customers.php?delete_message=User Account has been deleted');
}
?>