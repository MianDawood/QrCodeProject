<?php
include 'AdminPanel/process/connection.php';
?>
<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>

<body>

    <?php include("./includes/navbar/header.php") ?>

    <!-- Register Model here -->
    <div class="modal fade right p-3" id="creataccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger register_modal" role="document">
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
                                    <div class="input-container"> <i class="fa fa-user Register_icon"></i> <input class="input-field" type="text" placeholder="Username" name="usrnm"> </div>
                                    <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input class="input-field" type="text" placeholder="Email" name="email"> </div>
                                    <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input class="input-field third" type="password" placeholder="Password" name="psw">
                                        <i class="fas fa-eye-slash Register_icon show"></i>
                                    </div> <button type="submit" class="btn  btn-dark ">Create your account</button>
                                </form>
                                <div class="contuine-with"> <span>Or contuine with</span> </div>
                                <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img src="assets/images/google.png" alt="">
                                    <img src="assets/images/window (1).png" alt="">
                                </div>
                                <div class="alrdy-acc">
                                    <p> Already have an account? <a href="">login</a> </p>
                                </div>
                                <div class="agree">
                                    <p> By creating an account, I agree to QRcodeservice <a href="">Website terms</a> <a href="">Privacy
                                            policy</a>and <a href="">Licensing terms.</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--  ===============================================e================================================-->
    <div class="modal fade p-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body m-4">
                    <h4 class="font-weight-bold">Login</h4>
                    <form class="login-form" action="/action_page.php">
                        <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input class="input-field" type="text" placeholder="Email" name="email"> </div>
                        <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input class="input-field third" type="password" placeholder="Password" name="psw"> <i class="fas fa-eye-slash Register_icon show"></i>
                        </div>
                        <div class="forget-password"> <a href="">Forget Your Password</a> </div> <button type="submit" class="btn  btn-dark ">Login</button>
                    </form>
                    <div class="contuine-with"> <span>Or contuine with</span> </div>
                    <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img src="assets/images/google.png" alt=""> <img src="assets/images/window (1).png" alt="">
                    </div>
                    <div class="dont-have-acc">
                        <p> <a href="">Don,t Have Account? </a> </p> <button type="submit" class="btn creat_acc  btn-dark ">Create
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
                            <input type="radio" id="switchMonthly" name="switchPlan" value="Monthly" checked />
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
                <?php
                $sql = "select * from pakages where pakageStatus = 1";
                $response = mysqli_query($connect, $sql);
                while ($result = mysqli_fetch_array($response)) {
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 prices-main">
                        <form action="process/userplan.php" method="post" name="qrcode">
                            <div class="price-heading">
                                <h3><?php echo $result['pakageName']; ?></h3>
                                <span class="showMonthly"><b><?php echo $result['pakageAmount']; ?></b> <small>/Month</small> </span>
                                <span class="showYearly" style="display: none;"><b><?php echo $result['pakageAmountYearly']; ?></b> <small>/Year</small> </span>
                            </div>
                            <div class="chart">
                                <p><?php
                                    if ($result['pakageStatic'] == 1) {
                                        echo "<i class='fas fa-check-circle fa-lg' style='color:#20D489;'></i>";
                                        // echo  "<img src='assets/images/click.png'  class='img-fluid' alt=''>";
                                    } else {
                                        echo "<i class='fas fa-times-circle fa-lg' style='color:#d9534f;'></i>";
                                        // echo "<img src='assets/images/times.png' width='15%' class='img-fluid bg-danger' alt=''>";
                                    }
                                    ?></p>
                                <p>
                                    <?php
                                    if ($result['pakageDynamic'] == 1) {
                                        echo "<i class='fas fa-check-circle fa-lg' style='color:#20D489;'></i>";
                                    } else {
                                        echo "<i class='fas fa-times-circle fa-lg' style='color:#d9534f;'></i>";
                                    }
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    if ($result['pakageStatistics'] == 1) {
                                        echo "<i class='fas fa-check-circle fa-lg' style='color:#20D489;'></i>";
                                    } else {
                                        echo "<i class='fas fa-times-circle fa-lg' style='color:#d9534f;'></i>";
                                    }
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    if ($result['pakageCustom'] == 1) {
                                        echo "<i class='fas fa-check-circle fa-lg' style='color:#20D489;'></i>";
                                    } else {
                                        echo "<i class='fas fa-times-circle fa-lg' style='color:#d9534f;'></i>";
                                    }
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    if ($result['pakageHighQuality'] == 1) {
                                        echo "<i class='fas fa-check-circle fa-lg' style='color:#20D489;'></i>";
                                    } else {
                                        echo "<i class='fas fa-times-circle fa-lg' style='color:#d9534f;'></i>";
                                    }
                                    ?>
                                </p>
                                <input type="hidden" name="pakageid" value='<?php echo $result['pakageId'] ?>'>
                                <input type="hidden" name="userid" value='<?php echo $_SESSION['userId'] ?>'>
                                <input type="hidden" name="pakageYearly" value="<?php echo $result['pakageAmountYearly']; ?>" class="pakageYearly">
                                <input type="hidden" name="pakageMonthly" value="<?php echo $result['pakageAmount']; ?>" class="pakageMonthly">
                                <input type="hidden" name="userpakage" value="insert">
                                <?php
                                if (isset($_SESSION['userId'])) {
                                    echo "<button class='btn btn-dark' type='submit'>Buy</button>";
                                } else {
                                    echo "<button class='btn btn-dark' type='button'  data-toggle='modal' data-target='#exampleModal'>Choose Plan</button>";
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                <?php } ?>
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

    <!-- :::::::::::: model start :::::::::::: -->
    <div class="modal fade p-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body m-4">
                    <h4 class="font-weight-bold">Login</h4>
                    <form class="login-form" action="/action_page.php">
                        <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input class="input-field" type="text" placeholder="Email" name="email"> </div>
                        <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input class="input-field third" type="password" placeholder="Password" name="psw"> <i class="fas fa-eye-slash Register_icon show"></i>
                        </div>
                        <div class="forget-password"> <a href="">Forget Your Password</a> </div> <button type="submit" class="btn  btn-dark ">Login</button>
                    </form>
                    <div class="contuine-with"> <span>Or contuine with</span> </div>
                    <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img src="assets/images/google.png" alt=""> <img src="assets/images/window (1).png" alt="">
                    </div>
                    <div class="dont-have-acc">
                        <p> <a href="">Don,t Have Account? </a> </p> <button type="submit" class="btn creat_acc  btn-dark ">Create
                            Your Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- :::::::::::: model end :::::::::::: -->

    <?php include("./includes/Head&Foot/footer.php") ?>
    <script>
        var pakyear = document.getElementsByClassName("pakageYearly");
        for (var c = 0; c < pakyear.length; c++) {
            pakyear[c].value = "";

        }
        var pakyear = document.getElementsByClassName("pakageMonthly");
        for (var z = 0; z < pakyear.length; z++) {
            pakyear[z].value = "Monthly";

        }

        function handleRadioClick() {
            const box = document.querySelectorAll('.showMonthly');
            box.forEach(show => {
                if (document.getElementById('switchMonthly').checked) {
                    show.style.display = 'block';

                    var pakyear = document.getElementsByClassName("pakageYearly");
                    for (var a = 0; a < pakyear.length; a++) {
                        pakyear[a].value = "";

                    }

                    //document.forms['qrcode']['pakageYearly'].setAttribute('value','');

                } else {
                    show.style.display = 'none';
                    var pakyearels = document.getElementsByClassName("pakageYearly");
                    for (var b = 0; b < pakyearels.length; b++) {
                        pakyearels[b].value = 'Yearly';

                    }
                }
            });
        }
        const radioButton = document.querySelectorAll('input[name="switchPlan"]');
        radioButton.forEach(radio => {
            radio.addEventListener('click', handleRadioClick);
        });

        function handleRadioClicks() {

            const box = document.querySelectorAll('.showYearly');
            box.forEach(shows => {
                if (document.getElementById('switchYearly').checked) {
                    shows.style.display = 'block';
                    // document.forms['qrcode']['pakageMonthly'].setAttribute('value','');

                    var pakmonth = document.getElementsByClassName("pakageMonthly");
                    for (var x = 0; x < pakmonth.length; x++) {
                        pakmonth[x].value = "";

                    }

                } else {
                    shows.style.display = 'none';
                    var pakmonthels = document.getElementsByClassName("pakageMonthly");
                    for (var y = 0; y < pakmonthels.length; y++) {
                        pakmonthels[y].value = 'Monthly';
                    }

                }
            });
        }
        const radioButtons = document.querySelectorAll('input[name="switchPlan"]');
        radioButtons.forEach(radios => {
            radios.addEventListener('click', handleRadioClicks);
        });
    </script>

</body>

</html>