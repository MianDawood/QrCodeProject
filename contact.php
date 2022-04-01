<?php 
include('./includes/conn.php');
?>
<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>

<body>

    <?php include("./includes/navbar/header.php") ?>

    <!-- Register Model here -->


    <!-- contact us -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading  contact-heading">
                    <h2 class="text-center">Contact Us</h2>
                    <p>
                        If there is anything you would like to know or if you have any<br>
                        questions, please feel free to contact us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="contact-svg">
                    <img src="assets/images/contact.png" class="img-fluid" alt="">
                    <rect y="0.769043" width="400" height="400" rx="40" fill="#F9FAFB" />
                    </svg>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form action="/action_page.php">
                    <div class="contact-form">
                        <div class="input-container contact-input">
                            <i class="fa fa-user icons"></i>
                            <input class="input-field" type="text" placeholder="Username" name="usrnm" />
                        </div>

                        <div class="input-container contact-input">
                            <i class="fa fa-envelope icons"></i>
                            <input class="input-field" type="email" placeholder="Email" name="email" />
                        </div>
                    </div>

                    <div class="input-container contact-input">
                        <textarea name="" id="" placeholder="Enter Your enquiry/message"></textarea>
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="email-add pt-5">
                    <p>For account management assistance, please email
                        <a href="">info@qrcodesservices.com</a>
                    </p>
                    <p>We look forward to hearing from you.</p>
                </div>
            </div>
        </div>
        </section>

        <?php include("./includes/Head&Foot/footer.php") ?>
</body>

</html>