<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us - Sneaker Store</title>
    <?php include 'component/header.php'; ?>
</head>

<body>

    <!-- Navigation -->
    <?php include 'component/navigation.php'; ?>

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

    <!-- FAQ Section -->
    <section id="faq" class="container my-5 py-5">
        <div class="container text-center">
            <h3>Frequently Asked Questions</h3>
            <hr class="mx-auto">
            <div class="accordion" id="faqAccordion">

                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                            What are your store hours?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our store is open Monday to Friday from 9:00 AM to 7:00 PM, and on Saturdays from 10:00 AM to 5:00 PM. We are closed on Sundays.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            How can I contact customer support?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contact our customer support team by calling <a href="tel:0911223344">09-11223344</a> or by emailing us at <a href="mailto:litsneakers@gmail.com">litsneakers@gmail.com</a>. We are available 24/7 to assist you.
                        </div>
                    </div>
                </div>

                <!-- Add more FAQ items as needed -->

            </div>
        </div>
    </section>
    
    <!--footer-->
    <?php
    include 'component/footer.php';
    ?>
    <!-- JS Links -->
    <?php include 'component/jslink.php' ?>

</body>

</html>