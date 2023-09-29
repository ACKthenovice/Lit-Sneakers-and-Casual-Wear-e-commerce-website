<?php
include '../../../server/connection.php';
$product_id=$_POST['user_id'];
$sql="SELECT * FROM products WHERE id=".$product_id;
$result=mysqli_query($conn,$sql);

if(isset($_POST['edit-btn'])){

    $product_id=$_POST['id'];
    $product_name=$_POST['product_name'];
    $brandname=$_POST['brandname'];
    $price=$_POST['price'];
    $grade=$_POST['grade'];
    $conn->prepare("UPDATE products SET name=?,brandname=?,price=?,grade=? WHERE id=? ");
    $stmt->bind_param('ssii',$product_name,$brandname,$price,$grade);
    if($stmt->execute()){
        header('location: product_admin.php?succes_message=Product has been updated successfully');
    }
    else{
        header('location: product_admin.php?failure_message=Error Occured. Try again');
    }
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

                <?php 
                while( $row = mysqli_fetch_array($result) ) { ?>
                    <form method="POST" action="product_admin.php">
                        <input type="text" value="<?php echo $row['id'];?>"  name="id" required><br>
                        <label>Name</label>
                        <input type="text" value="<?php echo $row['name'];?>" name="product_name" required><br>
                        <label>Brandname:</label>
                        <input type="text" value="<?php echo $row['brandname'];?>" name="brandname" required><br>
                        <label>Price:</label>
                        <input type="text" value="<?php echo $row['price'];?>"  name="price" required><br>
                        <!--<label>Price:</label>
                        <input type="text" value="<?php //echo $product['name'];?>" name="price" required><br>-->
                        <label>Grade:</label>
                        <input type="text" value="<?php echo $row['grade'];?>" name="grade" required><br>
                        <input type="submit" class="btn btn-primary" name="edit-btn">Save Changes</button>             
                    </form>
                <?php } ?>
</body>
</html>