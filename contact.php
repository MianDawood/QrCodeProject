<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>

<body>
  
<?php include("./includes/navbar/header.php") ?>

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
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, reiciendis asperiores? Quae expedita
                deleniti error aperiam et veniam magni obcaecati?</p>
            </div>
            <div class="modal-img"> <img src="assets/images/register.png" class="img-fluid" alt=""> </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="rgr-form-inside p-3">
              <h4 class="font-weight-bold">Create Your Account</h4>
              <form action="/action_page.php">
                <div class="input-container"> <i class="fa fa-user Register_icon"></i> <input class="input-field"
                    type="text" placeholder="Username" name="usrnm"> </div>
                <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input class="input-field"
                    type="text" placeholder="Email" name="email"> </div>
                <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input
                    class="input-field third" type="password" placeholder="Password" name="psw"> <i
                    class="fas fa-eye-slash Register_icon show"></i> </div> <button type="submit"
                  class="btn  btn-dark ">Create your account</button>
              </form>
              <div class="contuine-with"> <span>Or contuine with</span> </div>
              <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img src="assets/images/google.png" alt="">
                <img src="assets/images/window (1).png" alt=""> </div>
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
<div class="modal fade p-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body m-4">
        <h4 class="font-weight-bold">Login</h4>
        <form class="login-form" action="/action_page.php">
          <div class="input-container"> <i class="fa fa-envelope Register_icon"></i> <input class="input-field"
              type="text" placeholder="Email" name="email"> </div>
          <div class="input-container "> <i class="fa fa-key Register_icon "></i> <input class="input-field third"
              type="password" placeholder="Password" name="psw"> <i class="fas fa-eye-slash Register_icon show"></i>
          </div>
          <div class="forget-password"> <a href="">Forget Your Password</a> </div> <button type="submit"
            class="btn  btn-dark ">Login</button>
        </form>
        <div class="contuine-with"> <span>Or contuine with</span> </div>
        <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img src="assets/images/google.png" alt=""> <img
            src="assets/images/window (1).png" alt=""> </div>
        <div class="dont-have-acc">
          <p> <a href="">Don,t Have Account? </a> </p> <button type="submit" class="btn creat_acc  btn-dark ">Create
            Your Account</button>
        </div>
      </div>
    </div>
  </div>
</div>

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
              <rect
                y="0.769043"
                width="400"
                height="400"
                rx="40"
                fill="#F9FAFB"
              />
            </svg>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <form action="/action_page.php">
            <div class="contact-form">
              <div class="input-container contact-input">
                <i class="fa fa-user icons"></i>
                <input
                  class="input-field"
                  type="text"
                  placeholder="Username"
                  name="usrnm"
                />
              </div>

              <div class="input-container contact-input">
                <i class="fa fa-envelope icons"></i>
                <input
                  class="input-field"
                  type="email"
                  placeholder="Email"
                  name="email"
                />
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