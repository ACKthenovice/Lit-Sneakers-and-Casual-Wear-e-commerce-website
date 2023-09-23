<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sneaker Store</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/07c9fa584f.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Navigation -->
    <?php include 'navigation.php'; ?>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <section id="contact-form">
        <div class="container">
            <h2 class="text-center">Contact Form</h2>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class="custom-form">
                        <div class="form-group">
                            <label for="name" class="custom-label">Name</label>
                            <input type="text" class="custom-input" id="name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="email" class="custom-label">Email address</label>
                            <input type="email" class="custom-input" id="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="phone" class="custom-label">Phone Number</label>
                            <input type="tel" class="custom-input" id="phone" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label for="message" class="custom-label">Message</label>
                            <textarea class="custom-textarea" id="message" rows="3"></textarea>
                        </div>

                        <button type="submit" class="custom-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.0149810809867!2d-122.40096138504418!3d37.78770568189265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580e7216df043%3A0x7c17d44aa02511c4!2sTwitter%2C+Inc.!5e0!3m2!1sen!2sus!4v1508393058581" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>