<?php 
include('./includes/conn.php');
?>
<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>



<body>


    <?php include("./includes/navbar/header.php") ?>


    <!-- Register Model here -->
    <div class="modal fade right p-3" id="creataccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger register_modal"
            role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Body-->
                <div class="modal-body m-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="modal-contet">
                                <h1>Make Your Life</h1>
                                <h3>Very Easy</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, reiciendis asperiores?
                                    Quae expedita
                                    deleniti error aperiam et veniam magni obcaecati?</p>
                            </div>
                            <div class="modal-img"> <img src="assets/images/register.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="rgr-form-inside p-3">
                                <h4 class="font-weight-bold">Create Your Account</h4>
                                <form action="/action_page.php">
                                    <div class="input-container"> <i class="fa fa-user Register_icon"></i> <input
                                            class="input-field" type="text" placeholder="Username" name="usrnm"> </div>
                                    <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input
                                            class="input-field" type="text" placeholder="Email" name="email"> </div>
                                    <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input
                                            class="input-field third" type="password" placeholder="Password" name="psw">
                                        <i class="fas fa-eye-slash Register_icon show"></i> </div> <button type="submit"
                                        class="btn  btn-dark ">Create your account</button>
                                </form>
                                <div class="contuine-with"> <span>Or contuine with</span> </div>
                                <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img
                                        src="assets/images/google.png" alt="">
                                    <img src="assets/images/window (1).png" alt="">
                                </div>
                                <div class="alrdy-acc">
                                    <p> Already have an account? <a href="">login</a> </p>
                                </div>
                                <div class="agree">
                                    <p> By creating an account, I agree to QRcodeservice <a href="">Website terms</a> <a
                                            href="">Privacy
                                            policy</a>and <a href="">Licensing terms.</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--  ===============================================e================================================-->
    <div class="modal fade p-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body m-4">
                    <h4 class="font-weight-bold">Login</h4>
                    <form class="login-form" action="/action_page.php">
                        <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input
                                class="input-field" type="text" placeholder="Email" name="email"> </div>
                        <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input
                                class="input-field third" type="password" placeholder="Password" name="psw"> <i
                                class="fas fa-eye-slash Register_icon show"></i>
                        </div>
                        <div class="forget-password"> <a href="">Forget Your Password</a> </div> <button type="submit"
                            class="btn  btn-dark ">Login</button>
                    </form>
                    <div class="contuine-with"> <span>Or contuine with</span> </div>
                    <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img
                            src="assets/images/google.png" alt=""> <img src="assets/images/window (1).png" alt="">
                    </div>
                    <div class="dont-have-acc">
                        <p> <a href="">Don,t Have Account? </a> </p> <button type="submit"
                            class="btn creat_acc  btn-dark ">Create
                            Your Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading text-center">
                    <h2>How can we help?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 price_search_ P-0">
                <div class="contact-form faq-search">
                    <div class="input-container contact-input">
                        <i class="fa fa-search "></i>
                        <input class="input-field" type="search" placeholder="Type your question" name="usrnm" />
                    </div>
                    <div class="search-btn">
                        <button type="submit" class="btn btn-dark">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-12 faq_main_col">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <div class="links">
                            <ul>
                                <li><a href="">Getting Started</a></li>
                                <li><a href="">Pricing</a></li>
                                <li><a href="">Customizotion</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 ">
                        <div class="faq-heading-text">
                            <p>Get Started</p>
                        </div>
                        <div class="accordion mb-3" id="accordionExample">
                            <div class="card">
                                <div class="card-header heading_one" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="" aria-controls="collapseOne">
                                            <h2> What is a QR code?</h2>
                                            <div class="arrow">

                                                <i class="fas fa-chevron-up"></i>


                                            </div>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body card_body faq-body-text">
                                        <p>
                                            QR stands for “quick response”. It is similar to a barcode that you find on
                                            products in a shop,
                                            however, a QR code can store much more information and this information can
                                            be downloaded by
                                            whomever scans the code.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 pb-4">
                        <div class="accordion mb-3" id="accordionExamplee">
                            <div class="card">
                                <div class="card-header heading_one" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOnee" aria-expanded="" aria-controls="collapseOne">
                                            <h2> Can I use the generated QR codes for commercial purposes?</h2>
                                            <div class="arrow">

                                                <i class="fas fa-chevron-down"></i>


                                            </div>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOnee" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExamplee">
                                    <div class="card-body card_body faq-body-text">
                                        <p>
                                            QR stands for “quick response”. It is similar to a barcode that you find on
                                            products in a shop,
                                            however, a QR code can store much more information and this information can
                                            be downloaded by
                                            whomever scans the code.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>
            </div>
        </div>

    </div>


    <?php include("./includes/Head&Foot/footer.php") ?>
    <script>
    $(".accordion").click(function() {
        $(this).next(".arrow").slideToggle("500");
        $(this).find("i").toggleClass("fa-chevron-down fa-chevron-up");

    });
    </script>
</body>

</html>