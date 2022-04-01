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

    <!-- PRICES -->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center heading price-main-heading">
                <h2>
                    Prices
                </h2>
                <p>Get more out of your QR codes and Select a plan that is perfect for you and your needs.</p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="pricess">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 prices-main">
                    <div class="price-heading price-heading1">
                        <h3>Billed</h3>

                        <div class="switches-container">
                            <input type="radio" id="switchMonthly" name="switchPlan" value="Monthly"
                                checked="checked" />
                            <input type="radio" id="switchYearly" name="switchPlan" value="Yearly" />
                            <label for="switchMonthly">Monthly</label>
                            <label for="switchYearly">Annually</label>
                            <div class="switch-wrapper">
                                <div class="switch">
                                    <div>Monthly</div>
                                    <div>Annually</div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="chart chart-1">
                        <p>Static codes</p>
                        <p>Dynamic codes</p>
                        <p>Statistics</p>
                        <p>Custom design</p>
                        <p>High quality codes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 prices-main">
                    <div class="price-heading">
                        <h3>Free</h3>
                        <span><b> $0</b> <small>/Month</small> </span>

                    </div>
                    <div class="chart">
                        <p>Unlimited</p>
                        <p>X</p>
                        <p>X</p>
                        <p><img src="assets/images/click.png" class="img-fluid" alt=""></p>
                        <p><img src="assets/images/click.png" class="img-fluid" alt=""></p>

                        <button class="btn btn-dark" type="button">Choose Plan</button>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 prices-main Basic_price">
                    <div class="price-heading basic-div">
                        <p class="popular">Most popular plan</p>
                        <h3>Basic
                        </h3>
                        <span><b> $9.99</b> <small>/per month</small> </span>


                    </div>
                    <div class="chart">
                        <p>Unlimited</p>
                        <p>50</p>
                        <p>Advanced</p>
                        <p><img src="assets/images/click.png" class="img-fluid" alt=""></p>
                        <p><img src="assets/images/click.png" class="img-fluid" alt=""></p>
                        <button class="btn btn-dark" type="button">Choose Plan</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 prices-main">
                    <div class="price-heading">
                        <h3>Pro</h3>

                        <span><b> $25.99</b> <small>/per month</small> </span>

                    </div>
                    <div class="chart">
                        <p>Unlimited</p>
                        <p>Unlimited</p>
                        <p>Advanced</p>
                        <p><img src="assets/images/click.png" class="img-fluid" alt=""></p>
                        <p><img src="assets/images/click.png" class="img-fluid" alt=""></p>
                        <button class="btn btn-dark" type="button">Choose Plan</button>
                    </div>
                </div>
            </div>
            <div class="prices-p">
                <p>If you’re unhappy with our service, you can request a full-refund within 14 days.</p>

            </div>
        </div>
    </div>

    <div class="container pricefoter-container">
        <div class="row">
            <div class="col-lg-6 col-md-12 enquiries">
                <div class="price-footer">
                    <p>For account management assistance, please email info@qrcodesservices.com</p>
                    <a class="account-management account-management-contact ">
                        <img src="assets/images/Chat_alt_2.png" class="img-fluid" alt="">
                        <h3>Contact us</h3>
                        <i class="answer-icon fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 enquiries">
                <div class="price-footer">
                    <p>For all enquiries check our out our FAQs.
                    </p>
                    <a class="account-management answer-u-question">
                        <img src="assets/images/Order.png" class="img-fluid" alt="">
                        <h3>Answer all your questions</h3>
                        <i class="answer-icon fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php include("./includes/Head&Foot/footer.php") ?>

</body>

</html>