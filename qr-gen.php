<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>


<body>
  
  <?php include("./includes/navbar/header.php") ?>





  <?php include("./includes/qr_gen/tabs.php") ?>


  <section class="qr-generator">
    <div class="row pl-lg-3">
      <div class="col-lg-8 input-data p-0">

        <!-- VCard Section -->
        <?php include("./includes/qr_gen/tab-items/vcard.php") ?>
        
        <!-- URL Section -->
        <?php include("./includes/qr_gen/tab-items/url.php") ?>
        
        <!-- Website Section -->
        <?php include("./includes/qr_gen/tab-items/website.php") ?>
        
        <!-- Event Section -->
        <?php include("./includes/qr_gen/tab-items/event.php") ?>
        
        <!-- PDF Section -->
        <?php include("./includes/qr_gen/tab-items/pdf.php") ?>
        
        <!-- Bitcion Section -->
        <?php include("./includes/qr_gen/tab-items/bitcoin.php") ?>
        
        <!-- Rating Section -->
        <?php include("./includes/qr_gen/tab-items/rating.php") ?>
        

        <!-- Social Media Section -->
        <?php include("./includes/qr_gen/tab-items/social-media.php") ?>

        <!-- Google Review Section -->
        <?php include("./includes/qr_gen/tab-items/google-review.php") ?>
        
        <!-- More -->
        <?php include("./includes/qr_gen/tab-items/more.php") ?>
        
      </div>
      <div class="col-lg-4 qr-data">
        <div class="main-qr-code p-2">


          <div class="text-center canvas" width="100%" height="400"></div>
        </div>
        <div class="range px-4">
          <input type="range" min="1" max="3" value="2" class="slider myRange">
          <div class="d-flex justify-content-between my-3">
            <span>Low Quality</span>
            <span class="font-weight-bold">200 x 200px </span>
            <span>High Quality</span>
          </div>
        </div>
        <div class="colors py-4 px-4">
          <p>Customize Your QR Code </p>
          <div class="d-flex justify-content-between my-2">
            <span>Sticker</span>
            <span>Colors</span>
            <span>Shapes</span>
            <span>Logo</span>
            <span><img src="assets/images/tabs-icons/more.svg" alt=""></span>
          </div>
        </div>
        <div class="py-4 px-4">
          <div class="select">
            <select class="downloadFormat">
              <option value="0" selected>Choose format</option>
              <option value="svg">SVG</option>
              <option value="png">PNG</option>
              <option value="jpeg">JPEG</option>
            </select>
            <div class="select-download">
              <button class="btn btn-dark Register_btn m-0 download" type="button">Download</button>
            </div>
          </div>
        </div>
        <div class="px-4 text-center py-2 my-3">
          <button type="button" class="btn btn-outline-dark py-3 px-4" style="border-radius: 20px;">Save QR
            Code</button>
        </div>
      </div>
    </div>



  </section>


  <div class="container faq_main_col py-3">
    <div class="heading text-center">
      <h3>I’m new to QR Codes. What should I know?</h3>
      <p>Glad you asked! Here’s a few basics to get you started.</p>
    </div>
    <div class="row">

      <div class="col-lg-5 col-md-12 p-2">
        <div class="text-center qr-gen-svg ">
          <img src="assets/images/qr-collapse.svg" alt="">
        </div>
      </div>

      <div class="col-lg-7 col-md-12  p-2">
        <!-- First Accordian -->
        <div class="accordion mb-3" id="accordionExample">
          <div class="card">
            <div class="card-header heading_one" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseZero"
                  aria-expanded="" aria-controls="collapseZero">
                  <h2> What is a QR code?</h2>
                  <div class="arrow">
                    <i class="fas fa-chevron-up"></i>
                  </div>
                </button>
              </h5>
            </div>

            <div id="collapseZero" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body card_body faq-body-text">
                <p>
                  QR stands for “quick response”. It is similar to a barcode that you find on products in a shop,
                  however, a QR code can store much more information and this information can be downloaded by
                  whomever scans the code.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Second Accordian -->
        <div class="accordion mb-3" id="accordionExample1">
          <div class="card">
            <div class="card-header heading_one" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="" aria-controls="collapseOne">
                  <h2> What are the benefits of using OR Code?</h2>
                  <div class="arrow">

                    <i class="fas fa-chevron-up"></i>


                  </div>
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
              <div class="card-body card_body faq-body-text">
                <p>
                  QR stands for “quick response”. It is similar to a barcode that you find on products in a shop,
                  however, a QR code can store much more information and this information can be downloaded by
                  whomever scans the code.

                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Third Accordian -->
        <div class="accordion mb-3" id="accordionExample2">
          <div class="card">
            <div class="card-header heading_one" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="" aria-controls="collapseOne">
                  <h2> How do I scan QR Code?</h2>
                  <div class="arrow">
                    <i class="fas fa-chevron-up"></i>
                  </div>
                </button>
              </h5>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
              <div class="card-body card_body faq-body-text">
                <p>
                  QR stands for “quick response”. It is similar to a barcode that you find on products in a shop,
                  however, a QR code can store much more information and this information can be downloaded by
                  whomever scans the code.

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- *******Create your own QR Code start -->
  <section class="container line">
    <div class="row ">
      <div class="col-12 head">
        <div class="heading Create text-center ">
          <h2>How do I create a free QR Code?</h2>
          <p>We’ll show you how in just three simple steps</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="QR_Code_box">
          <div class="QR_Code_img"> <img src="assets/images/qr-icon.png" alt="Card image cap">
            <div class="QR_Code_number">1</div>
          </div>
          <div class="QR_Code_content">
            <h3>Select your QR Code content.</h3>
            <p>Make a choice from our options list: menu, website, apps, PDF, business cards, video, images.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="QR_Code_box box2">
          <div class="QR_Code_img qr-img-1"> <img src="assets/images/qr-icon1.png" alt="Card image cap">
            <div class="QR_Code_number Code_number-1">2</div>
          </div>
          <div class="QR_Code_content Customise">
            <h3>Customise the look and design.</h3>
            <p> Add the relevant information to our QR generator and click to produce your own unique design. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12  ">
        <div class="QR_Code_box">
          <div class="QR_Code_img qr-img-2"> <img src="assets/images/qr-icon2.png" alt="Card image cap">
            <div class="QR_Code_number Code_number-2">3</div>
          </div>
          <div class="QR_Code_content">
            <h3>Download your own QR code.</h3>
            <p> Your QR code will be available in different formats (pdf, png, svg). Simply print it or display it in a
              digital format or to share your own personlised Vcard. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =================================== Subscribe to Qrty and access all the advantages offered ==start=================================== -->
  <div class="content_boxes">
    <section class="container">
      <div class="row ">
        <div class="col-12 p-0">
          <div class="heading text-center ">
            <h2>Get More from your QR code </h2>
            <p>Your subscription to QR Codes Services is your doorway to infinite business possibilities. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 order order-md-2 rigth_box">
          <div class="right_inside">
            <div class="right_side_text">
              <h2>Try our basic plan for just</h2> <span><b> $9.99</b> <small>/per month</small> </span>
              <p> After 14 days, your subscription will revert to our basic Plan and be renewed at $120 per annum –
                unless cancelled on or before Day 14. </p> <button class="btn btn-dark" type="button">More Information<i
                  class="fas fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 order-md-1 left_box">
          <div class="left_inside">
            <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Unique, dynamic QR
                code
                design.</span> </div>
            <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Simple editing and
                management
                tools.</span> </div>
            <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Unlimited
                scans.</span>
            </div>
            <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Variety of download
                formats.</span> </div>
            <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Complete QR Code
                analytics
                provided.</span> </div>
            <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Export data into
                multiple
                formats, such as CSV/XLSX.</span> </div>
          </div>
        </div>
      </div>
    </section>
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
  <!-- //////////footer start//////////// -->
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
                <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img
                    src="assets/images/google.png" alt="">
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
          <div class="rgestr-social-icon"> <img src="assets/images/fb.png" alt=""> <img src="assets/images/google.png"
              alt=""> <img src="assets/images/window (1).png" alt=""> </div>
          <div class="dont-have-acc">
            <p> <a href="">Don,t Have Account? </a> </p> <button type="submit" class="btn creat_acc  btn-dark ">Create
              Your Account</button>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- Optional JavaScript; choose one of the two! -->




  <?php include("./includes/Head&Foot/footer.php") ?>
  <script>
    $(".footer_collapse").click(function () {
      $(this).next(".plus").slideToggle("500");
      $(this).find("i").toggleClass("fa-plus fa-minus");
    });
  </script>
</body>

</html>