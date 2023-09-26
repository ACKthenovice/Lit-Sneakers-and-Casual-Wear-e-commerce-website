<?php
session_start();
include 'connection.php';
if(isset($_POST['place_order'])){

    //1.get user info and store in database
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address= $_POST['address'];
    $order_cost=$_SESSION['total'];
    $order_status="on_hold";
    $customer_id=1;
    $order_date=date('Y-m-d H:i:s');

    $stmt=$conn->prepare("INSERT INTO orders (user_name,phone,email,customer_id,billing_address,order_date,order_status,total_amount) VALUES(?,?,?,?,?,?,?,?);");

    $stmt->bind_param('sisisssi',$name,$phone,$email,$customer_id,$address,$order_date,$order_status,$order_cost);

    $stmt->execute();

    $order_id=$stmt->insert_id;

    echo $order_id;

    //2.get product from cart
    foreach($_SESSION['cart'] as $key => $value){

        $product = $_SESSION['cart'][$key];
        $product_id=$product['product_id'];
        $product_name=$product['product_name'];
        $product_image=$product['product_image'];
        $product_price=$product['product_price'];
        $product_quantity=$product['product_quantity'];
       

        $stmt1=$conn->prepare("INSERT INTO order_items (order_id,product_id,product_name,product_image,customer_id,quantity,unit_price,order_date) VALUES (?,?,?,?,?,?,?,?)");
        $stmt1->bind_param('iissiiis',$order_id,$product_id,$product_name,$product_image,$customer_id,$product_quantity,$product_price,$order_date);

        $stmt1->execute();
    }


    //3.store order info in database



    //4.store each single item in order_item database


    //5.remove everything from cart



    //6.Inform whether everything is fine or there is a problem
}
else{

}

?>