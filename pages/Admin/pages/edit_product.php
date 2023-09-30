<?php

include '../../../server/connection.php';
include 'product_admin.php';
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");/*stmt=variable statement*/
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    $products  = $stmt->get_result();
}
else if(isset($_POST['edit-btn'])){
    $product_id=$_POST['id'];
    $name=$_POST['name'];
    $brandname=$_POST['brandname'];
    $price=$_POST['price'];
    $grade=$_POST['grade'];

    $stmt=$conn->prepare("UPDATE products SET brandname='?' price=?, grade=? WHERE id=?");
    $stmt->bind_param('siii',$brandname,$price,$grade,$product_id);

    if($stmt->execute()){
        header('location: product_admin.php?success_message=Product has been updated successfully');
    }
    else{
        header('location: product_admin.php?failure_message=Product has been updated successfully');
    }
}
 else {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                
                <?php foreach($products  as $product) { ?>
                    <form method="POST" action="">
                        <input type="hidden" value="<?php echo $product['id'];?>"  name="id"><br>
                        <label>Name</label>
                        <input type="text" value="<?php echo $product['name'];?>" name="name" required><br>
                        <label>Brandname:</label>
                        <input type="text" value="<?php echo $product['brandname'];?>" name="brandname" required><br>
                        <label>Price:</label>
                        <input type="text" value="<?php echo $product['price'];?>"  name="price" required><br>
                        <!--<label>Price:</label>
                        <input type="text" value="<?php //echo $product['name'];?>" name="price" required><br>-->
                        <label>Grade:</label>
                        <input type="text" value="<?php echo $product['grade'];?>" name="grade" required><br>
                        <input type="submit" class="btn btn-primary" name="edit-btn" value="Save Changes">        
                    </form>
                <?php } ?>
</body>
</html>