<?php
include '../../../server/connection.php';
include 'create.php';
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
            <div class="card-body pr-4 pl-0 pb-4">
              <?php if(isset($_GET['success_message'])){?>
                 <p style="color: green"><?php echo $_GET['success_message']?></p>
              <?php } ?>
              <?php if(isset($_GET['failure_message'])){?>
                 <p style="color: red"><?php echo $_GET['failure_message']?></p>
              <?php } ?>

              <?php if(isset($_GET['delete_message'])){?>
                 <p style="color: green"><?php echo $_GET['delete_message']?></p>
              <?php } ?>
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
                    <?php foreach($products  as $product) { ?>
                      <tr>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $product['id'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs text-secondary mb-0 font-weight-bold"><?php echo $product['name'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $product['brandname'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $product['price'];?></p>
                        </td>
                        <td class="align-middle text-center">
                          <img src="../../<?php echo $product['img_url'];?>" width="100px" height="auto"  alt="">
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs font-weight-bold mb-0"><?php echo $product['grade'];?></p>
                        </td>
                        <td class="align-middle text-center">
                        <a href="<?php echo "edit_product.php?id=".$product['id'];?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </td>
                        <td class="align-middle text-center">
                          <a href="<?php echo "delete.php?id=".$product['id'];?>" style="text-decoration:none;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete product">
                            Delete
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <button class="badge badge-sm bg-gradient-success" data-bs-toggle="modal" data-bs-target="#editModal">Create Product</button>
              <!--modal-->
              <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Add Product</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                <div class="card-body">
                                    
                                    <form method="POST" action=" ">
                                        <h6 class="heading-small text-muted mb-4">Product Information</h6>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-username">Product Name</label>
                                                        <input type="text" id="input-username" class="form-control" name="name" placeholder="Product Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-email">Brand Name</label>
                                                        <input type="text" id="input-email" class="form-control" name="brandname" placeholder="brandname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-first-name">Price</label>
                                                        <input type="text" id="input-first-name" class="form-control" name="price" placeholder="Price" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-last-name">Grade</label>
                                                        <input type="text" id="input-last-name" class="form-control" name="grade" placeholder="grade" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr class="horizontal dark my-4">
                                        <!-- Images-->
                                        <h6 class="heading-small text-muted mb-4">Upload Product Image</h6>
                                        <div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-address">Product Image</label>
                                                        <input id="input-address" class="form-control" name="product_image" placeholder="../images/web images/Product images/blabla.jpg"  type="text">
                                                    </div>
                                                </div>
                                         </div>
                                         <button type="submit" class="btn btn-primary">Create Product</button>
                                    </form>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
              </div>
              <!--#######-->
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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>