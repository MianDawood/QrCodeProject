<header>
    <div class="logo-img">
        <div class="py-4">
            <a href="index.php">
                <img width="150" src="assets/images/main-logo.svg" alt="" />
            </a>
        </div>
        <div class="lines" onclick="toggleNav()">
            <span style="background-color: #759DFE;"></span>
            <span style="background-color: #FDBCCB;"></span>
            <span style="background-color: #FDDF37;"></span>
        </div>
    </div>
    <div class="header-links">
        <div class="link-items">
            <ul>
                <li class="toggle-li d-lg-none">
                    <div class="logo-img">
                        <img class="img-fluid" src="assets/images/main-logo-white.svg" alt="" />
                    </div>
                    <div class="lines px-2" onclick="toggleNav()">
                        <span class="close"> &times;</span>

                    </div>
                </li>
                <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Language </a> <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#"></a> </div> </li> -->
                <li>
                    <a href="qr-gen.php">QR Code Generator</a>

                </li>

                <li>
                    <a href="price.php">Prices</a>
                </li>
                <li>
                    <a href="faq.php">FAQ</a>
                </li>
                <li>
                    <a href="contact.php">Contact us</a>
                </li>
                <?php if($_SESSION['userId']){?>
                <li>
                    <a href="saved.php">Saved QrCode</a>
                </li>
                <li>

                    <a class="nav-link Register_btn text-light" href="./process/logout.php">Logout</a>
                </li>
                <?php }
                else{  ?>
                <li>

                    <a class="nav-link login-top" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                        href="#">Login</a>
                </li>

                <li>
                    <button class="btn btn-dark Register_btn d-none d-lg-block" data-toggle="modal"
                        data-target="#creataccount" data-whatever="@mdo">
                        Register
                    </button>
                </li>
                <?php }?>



                <li class="nav-item d-lg-none">
                    <a class="nav-link login-top" data-toggle="modal" data-target="#creataccount" data-whatever="@mdo"
                        href="#">Register</a>
                </li>

            </ul>

        </div>
        <div class="closing-btn" onclick="toggleNav()"></div>
    </div>
</header>

<!-- Register Model here -->
<div class="modal fade right p-3" id="creataccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, reiciendis asperiores? Quae
                                expedita
                                deleniti error aperiam et veniam magni obcaecati?</p>
                        </div>
                        <div class="modal-img"> <img src="assets/images/register.png" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="rgr-form-inside p-3">
                            <h4 class="font-weight-bold">Create Your Account</h4>
                            <form action="process/signupProcess.php" method="post">
                                <div class="input-container"> <i class="fa fa-user Register_icon"></i> <input
                                        class="input-field" type="text" placeholder="Username" name="username"> </div>
                                <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input
                                        class="input-field" type="text" placeholder="Email" name="email"> </div>
                                <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input
                                        class="input-field third" type="password" placeholder="Password"
                                        name="password"> <i class="fas fa-eye-slash Register_icon show"></i> </div>
                                <button type="submit" class="btn  btn-dark ">Create your account</button>
                                <input type="hidden" name="reg" value="user" />
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
                <form class="login-form" action="process/loginProcess.php" method="post">
                    <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input
                            class="input-field" type="text" placeholder="Email" name="email"> </div>
                    <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input
                            class="input-field third" type="password" placeholder="Password" name="password"> <i
                            class="fas fa-eye-slash Register_icon show"></i>
                    </div>
                    <div class="forget-password"> <a href="">Forget Your Password</a> </div> <button type="submit"
                        class="btn  btn-dark ">Login</button>
                    <input type="hidden" name="log" value="in">
                </form>
                <div class="contuine-with"> <span>Or contuine with</span> </div>
                <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img
                        src="assets/images/google.png" alt=""> <img src="assets/images/window (1).png" alt=""> </div>
                <div class="dont-have-acc">
                    <p> <a href="">Don,t Have Account? </a> </p> <button type="submit"
                        class="btn creat_acc  btn-dark ">Create
                        Your Account</button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Optional JavaScript; choose one of the two! -->