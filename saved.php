<?php 
include('./includes/conn.php');
?>
<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>


<body>

    <?php include("./includes/navbar/header.php") ?>

    <div class="container qr-generator">

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require "./includes/conn.php";

                    $id = $_SESSION["userId"];
                    $qrQuery = "SELECT * FROM `qrCode_table` WHERE user_id = $id";
                    $execute = mysqli_query($con, $qrQuery); 
                ?>
                <tr>
                <?php 
                    while($data = mysqli_fetch_array($execute)) {
                ?>
                <th scope="row"><?php echo $data["qr_id"] ?></th>
                <td><?php echo $data["qr_content"] ?></td>
                <td><?php echo $data["qr_category"] ?></td>
                <td><a href="./qr-gen.php?qrId=<?php echo $data["qr_id"]?>" class="btn btn-primary">Edit</a></td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>


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
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseZero" aria-expanded="" aria-controls="collapseZero">
                                    <h2> What is a QR code?</h2>
                                    <div class="arrow">
                                        <i class="fas fa-chevron-up"></i>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseZero" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body card_body faq-body-text">
                                <p>
                                    QR stands for “quick response”. It is similar to a barcode that you find on products
                                    in a shop,
                                    however, a QR code can store much more information and this information can be
                                    downloaded by
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
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="" aria-controls="collapseOne">
                                    <h2> What are the benefits of using OR Code?</h2>
                                    <div class="arrow">

                                        <i class="fas fa-chevron-up"></i>


                                    </div>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample1">
                            <div class="card-body card_body faq-body-text">
                                <p>
                                    QR stands for “quick response”. It is similar to a barcode that you find on products
                                    in a shop,
                                    however, a QR code can store much more information and this information can be
                                    downloaded by
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
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="" aria-controls="collapseOne">
                                    <h2> How do I scan QR Code?</h2>
                                    <div class="arrow">
                                        <i class="fas fa-chevron-up"></i>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample2">
                            <div class="card-body card_body faq-body-text">
                                <p>
                                    QR stands for “quick response”. It is similar to a barcode that you find on products
                                    in a shop,
                                    however, a QR code can store much more information and this information can be
                                    downloaded by
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
                        <p>Make a choice from our options list: menu, website, apps, PDF, business cards, video, images.
                        </p>
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
                        <p> Add the relevant information to our QR generator and click to produce your own unique
                            design. </p>
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
                        <p> Your QR code will be available in different formats (pdf, png, svg). Simply print it or
                            display it in a
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
                        <p>Your subscription to QR Codes Services is your doorway to infinite business possibilities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 order order-md-2 rigth_box">
                    <div class="right_inside">
                        <div class="right_side_text">
                            <h2>Try our basic plan for just</h2> <span><b> $9.99</b> <small>/per month</small> </span>
                            <p> After 14 days, your subscription will revert to our basic Plan and be renewed at $120
                                per annum –
                                unless cancelled on or before Day 14. </p> <button class="btn btn-dark"
                                type="button">More Information<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 order-md-1 left_box">
                    <div class="left_inside">
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Unique,
                                dynamic QR
                                code
                                design.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Simple
                                editing and
                                management
                                tools.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Unlimited
                                scans.</span>
                        </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Variety of
                                download
                                formats.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Complete
                                QR Code
                                analytics
                                provided.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Export
                                data into
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

    


    
    <?php include("./includes/Head&Foot/footer.php") ?>
    <script>
    $(".footer_collapse").click(function() {
        $(this).next(".plus").slideToggle("500");
        $(this).find("i").toggleClass("fa-plus fa-minus");
    });
    </script>
</body>

</html>