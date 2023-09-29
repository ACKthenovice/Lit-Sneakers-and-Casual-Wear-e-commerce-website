<?php
include '../../../server/connection.php';
$stmt =$conn->prepare("SELECT * FROM products");//stmt=variable statement
$stmt->execute();
$products =$stmt->get_result();//arrary for looping


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php include 'sidebar.php' ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include 'navbar.php' ?>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Orders List</h6>
              </div>
            </div>
            <?php if(isset($_GET['success_message'])){?>
              <p class="text center" style="color: green;"><?php echo $_GET['success_message'];?></p>
            <?php } ?>

            <?php if(isset($_GET['failure_message'])){?>
              <p class="text center" style="color: green;"><?php echo $_GET['failure_message'];?></p>
            <?php } ?>
            <div class="card-body pr-4 pl-0 pb-4">
              
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Product ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Product Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Brand Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Product Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Grade</th>
                      <th class="text-secondary opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = $products->fetch_assoc()) { ?>
                      <tr>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $row['id'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs text-secondary mb-0 font-weight-bold"><?php echo $row['name'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $row['brandname'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $row['description'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $row['price'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <img src="../../<?php echo $row['img_url'];?>" width="100px" height="auto"  alt="">
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $row['grade'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <button type="button" class="text-secondary font-weight-bold text-xs editBtn" data-id="<?php echo $row['id'];?>">Edit</button>
                        </td>
                        <td class="align-middle text-center">
                          <a href="" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                          </a>
                        </td>
                      </tr>
                    <?php } ?>

                    
                        
                  </tbody>
                </table>
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="myModalLabel">Edit Product</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="">
                                    <input type="text" name="id" id="update_id" required><br>
                                    <label>Name</label>
                                    <input type="text" name="name" id="fname" required><br>
                                    <label>Brandname:</label>
                                    <input type="text"  name="brandname" id="update_brandname" required><br>
                                    <label>Description:</label>
                                    <input type="text"  name="description" id="update_desc" required><br>
                                    <label>Price:</label>
                                    <input type="text"  name="price" id="update_price" required><br>
                                    <!--<label>Image:</label>
                                    <input type="text" value="<?php //echo $product['name'];?>" name="price" required><br>-->
                                    <label>Grade:</label>
                                    <input type="text"  name="grade" id="update_grade" required><br>
                                    <button type="submit" class="btn btn-primary">Create Book</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'sidebarsetting.php' ?>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    
  </script>
  <script>
    $(document).ready(function(){
      $('.editBtn').on('click',function(){
        $('#editModal').modal('show');
            var user_id=$(this).data("id");
            $.ajax({
                        url: 'edit_product.php',
                        type: 'post',
                        data: {user_id: user_id},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#editModal').modal('show'); 
                        }
                    });

      });
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>