<?php 
include('./includes/conn.php');
  if(isset($_GET['success']))
  {
    $msg = '<div class="alert alert-success">Register Successfully. Login Now</div>';
  }
  else if(isset($_GET['failed']))
  {
    $msg = '<div class="alert alert-danger">Error in Register.Try again</div>';
  }
?>

<!doctype html>
<html lang="en">

<?php include("./includes/Head&Foot/head.php") ?>


<body>


    <?php 
    include("./includes/navbar/header.php")
     ?>

    

    <!-- ******banner start -->
    <div class="container">
        <div class="banner_bg">
            <div class="row banner_row">
                <div class="col-lg-6 col-md-6 col-sm-12 banner">
                    <h2><?php if(isset($msg)) echo $msg; else echo ''; ?> </h2>
                    <h3 class="text-left">Boost your Business with Easy to Create QR Codes</h3>
                    <p class="text-left"> Do-It-Yourself QR Codes to Promote Your Business </p> <button
                        class="btn btn-dark" type="button">Create your QR Code<i
                            class="fas fa-arrow-right"></i></button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 banner-img">
                    <figure> <img src="assets/images/main_banner.png" class="img-fluid " alt=""> </figure>
                </div>
            </div>
        </div>
    </div> <!-- *********banner end -->
    <!-- **********my life start -->
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 my-life-col">
                    <div class="My_life_bg">
                        <div class="My_life_img"> <img src="assets/images/My-life.png" class="img-fluid" alt=""> </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 my-life-col">
                    <div class="my_life_text">
                        <h3>My life is like a QR code. Only those who have a spiritual connect with reading can scan it
                            to find my
                            real self</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- *********my life end -->
    <!-- *******Create your own QR Code start -->
    <section class="container line">
        <div class="row ">
            <div class="col-12 head">
                <div class="heading Create text-center ">
                    <h2>Create your own QR Code in 3 simple steps</h2>
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
        <div class="QR_Code_button "> <button class="btn btn-dark" type="button">Create your QR Code<i
                    class="fas fa-arrow-right"></i></button> </div>
    </section> <!-- *******Create your own QR Code end -->
    <!-- **********Create different types of QR codes start -->
    <section class="container btns-container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="heading text-center ">
                    <h2>Create different types of QR codes</h2>
                    <p>QR codes can hold a large amount of content and at QR Code Service, we offer them all.</p>
                </div>
            </div>
        </div>
        <div class="row btn-row">
            <div class="col-lg-12 col-md-12 col-sm-12 btns">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12  menu"> <button id="menu" class="btn btn-dark"
                            type="button">
                            <div class="svg"> <svg class="first-child" id="Layer_1" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: #fff;
                                        }
                                        </style>
                                    </defs>
                                    <rect class="cls-1" x="22.5" y="16.5" width="35" height="47" rx="4"></rect>
                                    <path
                                        d="M53.5,16h-27A4.51,4.51,0,0,0,22,20.5v39A4.51,4.51,0,0,0,26.5,64h27A4.51,4.51,0,0,0,58,59.5v-39A4.51,4.51,0,0,0,53.5,16ZM23,59.5v-39A3.5,3.5,0,0,1,26.5,17h27A3.5,3.5,0,0,1,57,20.5v25a.49.49,0,0,0-.45.27l-1.77,3.55-5.56-2.78a.48.48,0,0,0-.45,0,.52.52,0,0,0-.27.37l-.92,6.49-5.5-.91a.5.5,0,0,0-.57.57l.92,5.55-3.55.89a.49.49,0,0,0-.23.83L41.29,63H26.5A3.5,3.5,0,0,1,23,59.5ZM53.5,63h-11a.47.47,0,0,0-.15-.35L40,60.27l3.14-.79a.49.49,0,0,0,.37-.56l-.88-5.31,5.31.88a.52.52,0,0,0,.38-.09.54.54,0,0,0,.2-.33l.9-6.31,5.38,2.69a.51.51,0,0,0,.67-.23L57,47.12V59.5A3.5,3.5,0,0,1,53.5,63Z">
                                    </path>
                                    <path d="M37,31.5H28a.5.5,0,0,0,0,1h9a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M50,33h2a1,1,0,0,0,0-2H50a1,1,0,0,0,0,2Z"></path>
                                    <path d="M50,37h2a1,1,0,0,0,0-2H50a1,1,0,0,0,0,2Z"></path>
                                    <path d="M35,24.5h6a1,1,0,0,0,0-2H35a1,1,0,0,0,0,2Z"></path>
                                    <path d="M28,36.5h7a.5.5,0,0,0,0-1H28a.5.5,0,0,0,0,1Z"></path>
                                    <path d="M37,39.5H28a.5.5,0,0,0,0,1h9a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M50,41h2a1,1,0,0,0,0-2H50a1,1,0,0,0,0,2Z"></path>
                                    <path d="M50,45h2a1,1,0,0,0,0-2H50a1,1,0,0,0,0,2Z"></path>
                                    <path d="M28,44.5h7a.5.5,0,0,0,0-1H28a.5.5,0,0,0,0,1Z"></path>
                                    <path d="M37,47.5H28a.5.5,0,0,0,0,1h9a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M35,51.5H28a.5.5,0,0,0,0,1h7a.5.5,0,0,0,0-1Z"></path>
                                    <circle cx="29.5" cy="23.5" r="2.5"></circle>
                                </svg>
                                <div class="svg_text">
                                    <p>Vcard</p>
                                </div>
                            </div>
                        </button> <button id="vcardplus" class="btn btn-dark" type="button">
                            <div class="svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <rect fill="#fff" x="22" y="20.14" width="35" height="41" rx="4"></rect>
                                    <path d="M47.5,49.64h-16a1,1,0,0,0,0,2h16a1,1,0,0,0,0-2Z"></path>
                                    <path d="M43.5,53.64h-8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"></path>
                                    <path
                                        d="M39.5,30.64a3,3,0,1,0,3,3A3,3,0,0,0,39.5,30.64Zm0,5a2,2,0,1,1,2-2A2,2,0,0,1,39.5,35.64Z">
                                    </path>
                                    <path
                                        d="M57.5,14.6h-20A4.51,4.51,0,0,0,33,19.1v.54H26a4.51,4.51,0,0,0-4.5,4.5v33a4.51,4.51,0,0,0,4.5,4.5H53a4.51,4.51,0,0,0,4.5-4.5V27.51A4.5,4.5,0,0,0,62,23V19.1A4.51,4.51,0,0,0,57.5,14.6ZM45.86,39.93l-.38-.3L45,39.29,44.6,39l-.53-.29-.41-.2c-.19-.09-.38-.16-.57-.23a3.61,3.61,0,0,0-.42-.16c-.2-.07-.41-.13-.61-.18l-.42-.11c-.23,0-.46-.08-.7-.12l-.36,0a9.75,9.75,0,0,0-2.16,0l-.36,0c-.23,0-.47.07-.7.12L37,38a6.32,6.32,0,0,0-.62.18l-.42.15-.57.24-.41.2L34.4,39l-.39.25-.5.34-.37.3-.45.4a3.51,3.51,0,0,0-.34.33l-.19.19a9,9,0,0,1,4-13.56,4.53,4.53,0,0,0,1.34.22h5.85a9,9,0,0,1,3.49,13.34l-.19-.19-.35-.34Zm.33,1.72a9,9,0,0,1-13.39,0l.21-.24c.11-.11.21-.22.32-.32l.4-.35.35-.28c.14-.11.28-.2.43-.3s.24-.17.37-.24l.47-.26.38-.19c.16-.08.34-.14.51-.21s.25-.11.38-.15l.56-.16.38-.1c.21-.05.42-.08.64-.11l.32-.05c.32,0,.65,0,1,0s.66,0,1,0l.33.05c.21,0,.43.06.64.11l.37.1.56.16c.13,0,.25.1.38.15s.35.13.51.21l.38.19.47.26c.13.07.24.16.36.24a4.27,4.27,0,0,1,.44.3l.34.28.41.35.3.32A2.5,2.5,0,0,1,46.19,41.65ZM56.5,57.14a3.5,3.5,0,0,1-3.5,3.5H26a3.5,3.5,0,0,1-3.5-3.5v-33a3.5,3.5,0,0,1,3.5-3.5h7V23a4.49,4.49,0,0,0,2,3.72A10,10,0,0,0,31.74,42h0a10,10,0,0,0,15.51,0h0a10,10,0,0,0-1.94-14.44H56.5Z">
                                    </path>
                                    <path fill="#fff"
                                        d="M41.14,21a1.35,1.35,0,0,1-.63.42,2.54,2.54,0,0,1-1,.16h-.92v2.21H37.51V18.18h2a2.12,2.12,0,0,1,1.49.48,1.49,1.49,0,0,1,.52,1.14A1.74,1.74,0,0,1,41.14,21Zm-2.51-.28h.92a.91.91,0,0,0,.65-.22.81.81,0,0,0,.22-.6.78.78,0,0,0-.22-.59.87.87,0,0,0-.65-.22h-.92Z">
                                    </path>
                                    <path fill="#fff" d="M43.2,18.18h1.12v4.71h1.79v.85H43.2Z"></path>
                                    <path fill="#fff"
                                        d="M47.65,21.61V18.18h1.12v3.43a1.18,1.18,0,0,0,.29.86,1.1,1.1,0,0,0,.83.3,1.14,1.14,0,0,0,.84-.3,1.18,1.18,0,0,0,.29-.86V18.18h1.12v3.43a2,2,0,0,1-.66,1.62,2.38,2.38,0,0,1-1.61.57,2.31,2.31,0,0,1-1.59-.57A2.07,2.07,0,0,1,47.65,21.61Z">
                                    </path>
                                    <path fill="#fff"
                                        d="M55.91,19a.86.86,0,0,0-.55.17.6.6,0,0,0-.21.48.68.68,0,0,0,.15.47,1,1,0,0,0,.41.26c.17.06.36.12.56.17a4.63,4.63,0,0,1,.61.17,3.1,3.1,0,0,1,.55.26,1.09,1.09,0,0,1,.41.44,1.39,1.39,0,0,1,.16.7,1.52,1.52,0,0,1-.55,1.18,2.06,2.06,0,0,1-1.45.5,2.37,2.37,0,0,1-1.46-.43,1.41,1.41,0,0,1-.55-1.2h1.19a.73.73,0,0,0,.84.73.88.88,0,0,0,.6-.19.68.68,0,0,0,.22-.53.6.6,0,0,0-.29-.53,2.29,2.29,0,0,0-.71-.28c-.28-.07-.56-.14-.84-.23a1.58,1.58,0,0,1-.72-.48,1.27,1.27,0,0,1-.29-.89,1.47,1.47,0,0,1,.55-1.21A2.08,2.08,0,0,1,56,18.1a2.21,2.21,0,0,1,1.39.4,1.51,1.51,0,0,1,.57,1.2H56.69a.82.82,0,0,0-.24-.51A.76.76,0,0,0,55.91,19Z">
                                    </path>
                                </svg>
                                <div class="svg_text">
                                    <p>Website</p>
                                </div>
                            </div>
                        </button> <button id="business" class="btn btn-dark" type="button">
                            <div class="svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <path fill="#fff"
                                        d="M61.23,32.83,57.5,24.5v-2a1,1,0,0,0-1-1h-32a1,1,0,0,0-1,1v2l-3.73,8.33a1,1,0,0,0-.27.67v4a1,1,0,0,0,1,1h2v20a2,2,0,0,0,2,2h32a2,2,0,0,0,2-2v-20h2a1,1,0,0,0,1-1v-4A1,1,0,0,0,61.23,32.83Z">
                                    </path>
                                    <path
                                        d="M45.5,52h7A2.5,2.5,0,0,0,55,49.5v-4A2.5,2.5,0,0,0,52.5,43h-7A2.5,2.5,0,0,0,43,45.5v4A2.5,2.5,0,0,0,45.5,52ZM44,45.5A1.5,1.5,0,0,1,45.5,44h7A1.5,1.5,0,0,1,54,45.5v4A1.5,1.5,0,0,1,52.5,51h-7A1.5,1.5,0,0,1,44,49.5Z">
                                    </path>
                                    <path
                                        d="M62,33.64a.47.47,0,0,0,0-.33l-4-8.92V22.5A1.5,1.5,0,0,0,56.5,21H46.58a5.89,5.89,0,0,0-11.16,0H24.5A1.5,1.5,0,0,0,23,22.5v1.89l-4,8.92a.47.47,0,0,0,0,.33,1,1,0,0,0,0,.17V37.5A1.5,1.5,0,0,0,20.5,39H22V58.5A2.5,2.5,0,0,0,24.5,61h32A2.5,2.5,0,0,0,59,58.5V39h1.5A1.5,1.5,0,0,0,62,37.5V33.81A1,1,0,0,0,62,33.64ZM33.53,33l1.94-5.84a.44.44,0,0,0,0-.16H40v6Zm-4.06-5.84a.44.44,0,0,0,0-.16h5l-1.94,5.84a.44.44,0,0,0,0,.16h-5ZM41,27h4.51a.44.44,0,0,0,0,.16L47.47,33H41Zm7.49,6a.44.44,0,0,0,0-.16L46.53,27h5a.44.44,0,0,0,0,.16L53.47,33Zm6,0a.44.44,0,0,0,0-.16L52.53,27H58v-.14L60.76,33Zm-30-11h32a.5.5,0,0,1,.5.5V24H24V22.5A.5.5,0,0,1,24.5,22ZM23,26.86V27h5.47l-1.94,5.84a.44.44,0,0,0,0,.16H20.24ZM28,60V45.5A1.5,1.5,0,0,1,29.5,44h7A1.5,1.5,0,0,1,38,45.5V60Zm30-1.5A1.5,1.5,0,0,1,56.5,60H39V45.5A2.5,2.5,0,0,0,36.5,43h-7A2.5,2.5,0,0,0,27,45.5V60H24.5A1.5,1.5,0,0,1,23,58.5V39H58Zm3-21a.5.5,0,0,1-.5.5h-40a.5.5,0,0,1-.5-.5V34H61Z">
                                    </path>
                                    <path d="M31,50.5H30a.5.5,0,0,0,0,1h1a.5.5,0,0,0,0-1Z"></path>
                                </svg>
                                <div class="svg_text">
                                    <p>Event</p>
                                </div>
                            </div>
                        </button> </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="center-btns">
                            <div class="left-btn"> <button id="website" class="btn btn-dark" type="button">
                                    <div class="svg"> <svg id="Layer_1" data-name="Layer 1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                }
                                                </style>
                                            </defs>
                                            <rect class="cls-1" x="13" y="19" width="54" height="42" rx="4"></rect>
                                            <path
                                                d="M63,18.5H17A4.51,4.51,0,0,0,12.5,23V57A4.51,4.51,0,0,0,17,61.5H63A4.51,4.51,0,0,0,67.5,57V23A4.51,4.51,0,0,0,63,18.5Zm-46,1H63A3.5,3.5,0,0,1,66.5,23v3.5h-53V23A3.5,3.5,0,0,1,17,19.5Zm46,41H17A3.5,3.5,0,0,1,13.5,57V27.5h53V57A3.5,3.5,0,0,1,63,60.5Z">
                                            </path>
                                            <circle cx="18" cy="23" r="1"></circle>
                                            <circle cx="21" cy="23" r="1"></circle>
                                            <circle cx="24" cy="23" r="1"></circle>
                                            <rect x="19" y="46" width="17" height="5" rx="1"></rect>
                                            <path d="M35,36H20a1,1,0,0,0,0,2H35a1,1,0,0,0,0-2Z"></path>
                                            <path d="M20,42h7a1,1,0,0,0,0-2H20a1,1,0,0,0,0,2Z"></path>
                                            <path
                                                d="M50,33.62a.52.52,0,0,0-.47-.16.5.5,0,0,0-.38.32l-6.65,18a.51.51,0,0,0,.09.5.52.52,0,0,0,.38.17h.1l19-3.8a.48.48,0,0,0,.37-.33.51.51,0,0,0-.09-.49ZM43.78,51.33l6-16.41,11.23,13Z">
                                            </path>
                                        </svg>
                                        <div class="svg_text">
                                            <p>Bitcoin</p>
                                        </div>
                                    </div>
                                </button> <button id="apps" class="btn btn-dark" type="button">
                                    <div class="svg"> <svg id="Layer_1" data-name="Layer 1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                }
                                                </style>
                                            </defs>
                                            <rect class="cls-1" x="26" y="16" width="28" height="48" rx="4"></rect>
                                            <path
                                                d="M50,15.5H30A4.51,4.51,0,0,0,25.5,20V60A4.51,4.51,0,0,0,30,64.5H50A4.51,4.51,0,0,0,54.5,60V20A4.51,4.51,0,0,0,50,15.5ZM53.5,60A3.5,3.5,0,0,1,50,63.5H30A3.5,3.5,0,0,1,26.5,60V20A3.5,3.5,0,0,1,30,16.5H50A3.5,3.5,0,0,1,53.5,20Z">
                                            </path>
                                            <rect x="31" y="54" width="18" height="5" rx="1"></rect>
                                            <path d="M48,41H32a1,1,0,0,0,0,2H48a1,1,0,0,0,0-2Z"></path>
                                            <path d="M44,47a1,1,0,0,0,0-2H36a1,1,0,0,0,0,2Z"></path>
                                            <path
                                                d="M40,38.5A7.5,7.5,0,1,0,32.5,31,7.5,7.5,0,0,0,40,38.5Zm0-14A6.5,6.5,0,1,1,33.5,31,6.51,6.51,0,0,1,40,24.5Z">
                                            </path>
                                        </svg>
                                        <div class="svg_text">
                                            <p>Social media</p>
                                        </div>
                                    </div>
                                </button> </div>
                            <div class="center-img"> <img src="assets/images/center.png" class="img-fluid" alt="">
                            </div>
                            <div class="right-btn"> <button id="wifi" class="btn btn-dark" type="button">
                                    <div class="svg"> <svg id="Layer_1" data-name="Layer 1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                }
                                                </style>
                                            </defs>
                                            <rect class="cls-1" x="21.5" y="19.5" width="37" height="41" rx="4"></rect>
                                            <path
                                                d="M54.5,19h-29A4.51,4.51,0,0,0,21,23.5v33A4.51,4.51,0,0,0,25.5,61h29A4.51,4.51,0,0,0,59,56.5v-33A4.51,4.51,0,0,0,54.5,19ZM58,56.5A3.5,3.5,0,0,1,54.5,60h-29A3.5,3.5,0,0,1,22,56.5v-33A3.5,3.5,0,0,1,25.5,20h29A3.5,3.5,0,0,1,58,23.5Z">
                                            </path>
                                            <path d="M39.5,37.85a2.57,2.57,0,1,0,2.57,2.57A2.57,2.57,0,0,0,39.5,37.85Z">
                                            </path>
                                            <path
                                                d="M50,30.4a.5.5,0,0,0,.38-.82,14.21,14.21,0,0,0-21.76,0,.5.5,0,1,0,.76.64,13.23,13.23,0,0,1,20.24,0A.49.49,0,0,0,50,30.4Z">
                                            </path>
                                            <path
                                                d="M39.5,28.79a9.87,9.87,0,0,0-7.85,3.85.5.5,0,1,0,.79.61,8.93,8.93,0,0,1,14.12,0,.47.47,0,0,0,.39.2.51.51,0,0,0,.31-.11.5.5,0,0,0,.09-.7A9.87,9.87,0,0,0,39.5,28.79Z">
                                            </path>
                                            <path
                                                d="M34.91,36.53a5.51,5.51,0,0,1,9.18,0,.49.49,0,0,0,.41.22.48.48,0,0,0,.28-.08.5.5,0,0,0,.14-.69,6.5,6.5,0,0,0-10.84,0,.5.5,0,0,0,.83.55Z">
                                            </path>
                                            <path
                                                d="M34.6,53h0c-.22-1.21-.87-3.75-1.22-5H32.1c-.38,1.58-1,3.87-1.27,5.07h0c-.07-.72-.35-2.06-1-5.07H28.34L30,54.56h1.47c.35-1.32.94-3.53,1.18-4.7h0c.23,1.12.81,3.24,1.15,4.7H35.3L37.07,48H35.7C35.46,49,34.82,51.56,34.6,53Z">
                                            </path>
                                            <rect x="38.82" y="48" width="1.42" height="6.56"></rect>
                                            <polygon
                                                points="42.7 54.56 44.09 54.56 44.09 51.93 47.08 51.93 47.08 50.77 44.09 50.77 44.09 49.16 47.28 49.16 47.28 48 42.7 48 42.7 54.56">
                                            </polygon>
                                            <rect x="49.24" y="48" width="1.42" height="6.56"></rect>
                                        </svg>
                                        <div class="svg_text">
                                            <p>Google reviwe</p>
                                        </div>
                                    </div>
                                </button> <button id="video" class="btn btn-dark" type="button">
                                    <div class="svg"> <svg id="Layer_1" data-name="Layer 1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                }
                                                </style>
                                            </defs>
                                            <path class="cls-1"
                                                d="M54.5,23.5H49.69l-.2-2.19a4,4,0,0,0-4.36-3.61L19.71,20.08a4,4,0,0,0-3.61,4.35L18.87,54a4,4,0,0,0,3.63,3.6V59.5a4,4,0,0,0,4,4h28a4,4,0,0,0,4-4v-32A4,4,0,0,0,54.5,23.5Z">
                                            </path>
                                            <path
                                                d="M54.5,23H50.15L50,21.26a4.44,4.44,0,0,0-1.6-3,4.49,4.49,0,0,0-3.3-1L19.66,19.58a4.46,4.46,0,0,0-3.05,1.61,4.5,4.5,0,0,0-1,3.29l2.77,29.61a4.45,4.45,0,0,0,1.61,3,4.35,4.35,0,0,0,2,.93V59.5A4.51,4.51,0,0,0,26.5,64h28A4.51,4.51,0,0,0,59,59.5v-32A4.51,4.51,0,0,0,54.5,23ZM20.62,56.36A3.44,3.44,0,0,1,19.37,54l-2.78-29.6a3.54,3.54,0,0,1,.79-2.56,3.46,3.46,0,0,1,2.37-1.25L45.18,18.2l.33,0A3.51,3.51,0,0,1,49,21.35L49.14,23H26.5A4.51,4.51,0,0,0,22,27.5V57.06A3.41,3.41,0,0,1,20.62,56.36ZM58,59.5A3.5,3.5,0,0,1,54.5,63h-28A3.5,3.5,0,0,1,23,59.5V55H58ZM58,54H23V27.5A3.5,3.5,0,0,1,26.5,24h28A3.5,3.5,0,0,1,58,27.5Z">
                                            </path>
                                            <path
                                                d="M44.48,38.69l-7-3.85a1,1,0,0,0-1,0,1,1,0,0,0-.49.86v7.72a1,1,0,0,0,.49.86,1,1,0,0,0,.51.14,1,1,0,0,0,.48-.13l7-3.86a1,1,0,0,0,.52-.87A1,1,0,0,0,44.48,38.69Z">
                                            </path>
                                            <path
                                                d="M35,59.62H49a.5.5,0,0,0,.5-.5.5.5,0,0,0-.5-.5H35a.5.5,0,0,0-.5.5A.5.5,0,0,0,35,59.62Z">
                                            </path>
                                            <path
                                                d="M53,60.13l.2,0,.18-.06.18-.09.15-.13a1,1,0,0,0,.12-.15.56.56,0,0,0,.09-.17.7.7,0,0,0,.06-.19,1.23,1.23,0,0,0,0-.19,1,1,0,0,0-.29-.71,1,1,0,0,0-1.42,0A1,1,0,0,0,53,60.13Z">
                                            </path>
                                            <path
                                                d="M28,60.13a1,1,0,0,0,.71-.3.61.61,0,0,0,.12-.15.56.56,0,0,0,.09-.17.7.7,0,0,0,.06-.19,1.23,1.23,0,0,0,0-.19,1,1,0,0,0-.29-.71,1,1,0,0,0-1.42,0A1,1,0,0,0,28,60.13Z">
                                            </path>
                                            <path
                                                d="M30.08,59.51a.56.56,0,0,0,.09.17,1,1,0,0,0,.12.15,1,1,0,0,0,1.42,0,1,1,0,0,0,.12-.15.56.56,0,0,0,.09-.17.7.7,0,0,0,.06-.19,1.23,1.23,0,0,0,0-.19,1,1,0,0,0-.29-.71,1.19,1.19,0,0,0-.33-.22,1,1,0,0,0-.76,0,1.06,1.06,0,0,0-.33.22,1,1,0,0,0-.29.71,1.23,1.23,0,0,0,0,.19A.7.7,0,0,0,30.08,59.51Z">
                                            </path>
                                        </svg>
                                        <div class="svg_text">
                                            <p>Location map</p>
                                        </div>
                                    </div>
                            </div> </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 bottom-btn"> <button id="pdf" class="btn btn-dark"
                            type="button">
                            <div class="svg"> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 80 80">
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: #fff;
                                        }
                                        </style>
                                    </defs>
                                    <path class="cls-1"
                                        d="M46.5,16.5h-20a4,4,0,0,0-4,4v39a4,4,0,0,0,4,4h27a4,4,0,0,0,4-4v-32Z"></path>
                                    <path
                                        d="M46.71,16H26.5A4.51,4.51,0,0,0,22,20.5v39A4.51,4.51,0,0,0,26.5,64h27A4.51,4.51,0,0,0,58,59.5V27.29ZM53.5,63h-27A3.5,3.5,0,0,1,23,59.5v-39A3.5,3.5,0,0,1,26.5,17H46v6.5A4.51,4.51,0,0,0,50.5,28H57V59.5A3.5,3.5,0,0,1,53.5,63Z">
                                    </path>
                                    <path d="M28,24H38a1,1,0,0,0,0-2H28a1,1,0,0,0,0,2Z"></path>
                                    <path d="M34,28a1,1,0,0,0,0-2H28a1,1,0,0,0,0,2Z"></path>
                                    <path d="M51,56H45a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"></path>
                                    <path d="M27.5,36a.5.5,0,0,0,.5.5H51a.5.5,0,0,0,0-1H28A.5.5,0,0,0,27.5,36Z"></path>
                                    <path d="M51,39.5H28a.5.5,0,0,0,0,1H51a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M51,43.5H28a.5.5,0,0,0,0,1H51a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M41,47.5H28a.5.5,0,0,0,0,1H41a.5.5,0,0,0,0-1Z"></path>
                                </svg>
                                <div class="svg_text">
                                    <p>Url</p>
                                </div>
                            </div>
                        </button> <button id="images" class="btn btn-dark" type="button">
                            <div class="svg"> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 80 80">
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: #fff;
                                        }
                                        </style>
                                    </defs>
                                    <path class="cls-1"
                                        d="M54.5,23.5H49.69l-.2-2.19a4,4,0,0,0-4.36-3.61L19.71,20.08a4,4,0,0,0-3.61,4.35L18.87,54a4,4,0,0,0,3.63,3.6V59.5a4,4,0,0,0,4,4h28a4,4,0,0,0,4-4v-32A4,4,0,0,0,54.5,23.5Z">
                                    </path>
                                    <path
                                        d="M54.5,23H50.15L50,21.26a4.44,4.44,0,0,0-1.6-3,4.49,4.49,0,0,0-3.3-1L19.66,19.58a4.46,4.46,0,0,0-3.05,1.61,4.5,4.5,0,0,0-1,3.29l2.77,29.61a4.45,4.45,0,0,0,1.61,3,4.35,4.35,0,0,0,2,.93V59.5A4.51,4.51,0,0,0,26.5,64h28A4.51,4.51,0,0,0,59,59.5v-32A4.51,4.51,0,0,0,54.5,23ZM16.59,24.39a3.54,3.54,0,0,1,.79-2.56,3.46,3.46,0,0,1,2.37-1.25L45.18,18.2l.33,0A3.51,3.51,0,0,1,49,21.35L49.14,23H26.5A4.51,4.51,0,0,0,22,27.5V51.07l-2.87.41Zm4,32A3.44,3.44,0,0,1,19.37,54l-.15-1.52L22,52.08v5A3.41,3.41,0,0,1,20.62,56.36ZM58,59.5A3.5,3.5,0,0,1,54.5,63h-28A3.5,3.5,0,0,1,23,59.5V58H58ZM58,57H23V27.5A3.5,3.5,0,0,1,26.5,24h28A3.5,3.5,0,0,1,58,27.5Z">
                                    </path>
                                    <circle cx="34.5" cy="33.5" r="4"></circle>
                                    <path
                                        d="M45.58,39.47a.51.51,0,0,0-.36-.17.42.42,0,0,0-.37.15l-7.09,7.09-3.38-3.87A.51.51,0,0,0,34,42.5a.43.43,0,0,0-.37.15l-8,8a.49.49,0,0,0,.7.7L34,43.73l6.64,7.6a.51.51,0,0,0,.71.05.51.51,0,0,0,.05-.71l-3-3.38,6.76-6.76,9.44,10.8a.51.51,0,0,0,.71.05.51.51,0,0,0,.05-.71Z">
                                    </path>
                                </svg>
                                <div class="svg_text">
                                    <p>Rating</p>
                                </div>
                            </div>
                        </button> <button id="listoflinks" class="btn btn-dark" type="button">
                            <div class="svg"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <rect x="21.5" y="19.5" width="37" height="41" rx="4" fill="#fff"></rect>
                                    <path
                                        d="M54.5,19h-29A4.51,4.51,0,0,0,21,23.5v33A4.51,4.51,0,0,0,25.5,61h29A4.51,4.51,0,0,0,59,56.5v-33A4.51,4.51,0,0,0,54.5,19ZM58,56.5A3.5,3.5,0,0,1,54.5,60h-29A3.5,3.5,0,0,1,22,56.5v-33A3.5,3.5,0,0,1,25.5,20h29A3.5,3.5,0,0,1,58,23.5Z">
                                    </path>
                                    <path d="M49.75,39H34.25a.5.5,0,0,0,0,1h15.5a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M31,39h-.75a.5.5,0,0,0,0,1H31a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M31,43h-.75a.5.5,0,0,0,0,1H31a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M31,47h-.75a.5.5,0,0,0,0,1H31a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M31,51h-.75a.5.5,0,0,0,0,1H31a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M49.75,43H34.25a.5.5,0,0,0,0,1h15.5a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M49.75,47H34.25a.5.5,0,0,0,0,1h15.5a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M49.75,51H34.25a.5.5,0,0,0,0,1h15.5a.5.5,0,0,0,0-1Z"></path>
                                    <path d="M36.5,33h7a1,1,0,0,0,0-2h-7a1,1,0,0,0,0,2Z"></path>
                                    <circle cx="40" cy="26.5" r="2.5"></circle>
                                </svg>
                                <div class="svg_text">
                                    <p>Pdf</p>
                                </div>
                            </div>
                        </button> </div>
                </div>
            </div>
        </div>
    </section> <!-- ====================Create different types of QR codes =end -==============================-->
    <!-- =================================== Subscribe to Qrty and access all the advantages offered ==start=================================== -->
    <div class="content_boxes">
        <section class="container">
            <div class="row ">
                <div class="col-12 p-0">
                    <div class="heading text-center ">
                        <h2> Your subscription to QR Code Service is your doorway to infinite business possibilities.
                        </h2>
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
                                dynamic QR code
                                design.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Simple
                                editing and management
                                tools.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Unlimited
                                scans.</span>
                        </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Variety of
                                download
                                formats.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Complete
                                QR Code analytics
                                provided.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Export
                                data into multiple
                                formats, such as CSV/XLSX.</span> </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ===================================Subscribe to Qrty and access all the advantages offered ==end=================================== -->
    <!-- //////////QR Code for Vcard Plus- A business card for the 21st Centu start//////////// -->
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-12 Century">
                    <h2>QR Code for Vcard Plus- A business card for the 21st Century </h2>
                    <p>Watch this short video to see just how easy creating your won QR code is. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card_box">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 left_card">
                        <div class="Code_for_Vcard_Plus_img"> <img src="assets/images/play.png" class="img-fluid"
                                alt=""> </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 connections">
                        <h3>Make instant connections with valuable clients by connecting your QR code to a digital
                            business card.
                        </h3>
                        <p>Connect instantly with business possibilities.</p>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Instant
                                access to your
                                contact details via your QR Code.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Include
                                your business address
                                to make it even easier for clients to find you.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>A simple
                                tap and your contact
                                details are in their phonebook.</span> </div>
                        <div class="icon"> <img src="assets/images/click.png" alt="" class="img-fluid"> <span>Connects
                                people with your
                                social media profiles allowing them to discover more about what you can offer
                                them.</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- //////////QR Code for Vcard Plus- A business card for the 21st Centu end//////////// -->
    <!-- //////////Answer all your questions strt -->
    <section class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="want_to_know_mores">
                    <h3>Want to know more?</h3>
                    <p>Check our FAQs to find an answer to any questions you may have about our QR codes.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="answer_all_your_question">
                    <h3>Answer all your questions</h3> <i class="answer-icon fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </section> <!-- /////////////////Answer all your questions end -->
    <!-- //////////footer start//////////// -->
    <div class="footer">
        <div class="container footer_container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 footer_log"> <a class=" font-weight-bold" href="index.html">
                        <img class="footer_logo" src="assets/images/main-logo.svg" alt="logo" width="119"> </a>
                    <p class="logo-text">QR Code Generator lets you create memorable marketing campaigns with trackable
                        QR
                        Codes—designed by you</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 services">
                    <div class="footer_collapse hidden visible-md d-lg-none d-md-block" type="button"
                        data-toggle="collapse" data-target="#slide6" aria-expanded="false" aria-controls="slide6">
                        <h3 class="footer_text"> Services </h3>
                        <div class="footer-iconx">
                            <div class="plus"> <span><i class="fas fa-plus"></i></span> </div>
                            <div class="mainas"> <span><i class="fas fa-minus"></i></span> </div>
                        </div>
                    </div>
                    <h3 class="d-none d-lg-block footer_heading"> Services </h3>
                    <div class="collapse footer-collap collapse-xl" id="slide6">
                        <div class="well">
                            <ul>
                                <li><a href="">CreateQRcode</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 prices">
                    <div class="footer_collapse hidden visible-md d-lg-none d-md-block" type="button"
                        data-toggle="collapse" data-target="#slide7" aria-expanded="false" aria-controls="slide7">
                        <h3 class="footer_text"> Company </h3>
                        <div class="footer-iconx">
                            <div class="plus"> <span><i class="fas fa-plus"></i></span> </div>
                            <div class="mainas"> <span><i class="fas fa-minus"></i></span> </div>
                        </div>
                    </div>
                    <h3 class="d-none d-lg-block footer_heading"> Company </h3>
                    <div class="collapse footer-collap collapse-xl" id="slide7">
                        <div class="well">
                            <ul>
                                <li><a href="price.html">Prices</a></li>
                                <li><a href="">Terms of use and contract </a></li>
                                <li><a href="">Privacy and policy </a></li>
                                <li><a href="">Cookies policy </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 help">
                    <div class="footer_collapse hidden visible-md d-lg-none d-md-block" type="button"
                        data-toggle="collapse" data-target="#slide8" aria-expanded="false" aria-controls="slide8">
                        <h3 class="footer_text"> Help </h3>
                        <div class="footer-iconx">
                            <div class="plus"> <span><i class="fas fa-plus"></i></span> </div>
                            <div class="mainas"> <span><i class="fas fa-minus"></i></span> </div>
                        </div>
                    </div>
                    <h3 class="d-none d-lg-block footer_heading"> Help </h3>
                    <div class="collapse footer-collap collapse-xl" id="slide8">
                        <div class="well">
                            <ul>
                                <li><a href="">Contact us</a></li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Cancel subscription</a></li>
                            </ul>
                            <h3>Get in Touch</h3>
                            <p>Support@qrcodesservices.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="copy-right-foter">
                        <div class="copy-right">
                            <p>2021 © QrCodeServices - ‘QR Code’ is a trademark of DENSO WAVE INCORPORATED</p>
                        </div>
                        <div class="foter-btn">
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Language </a> <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#"></a> </div> </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- //////////footer start//////////// -->
    <!-- Register Model here -->
     <!-- Optional JavaScript; choose one of the two! -->




    <?php include("./includes/Head&Foot/footer.php") ?>
    <script>
    $(".footer_collapse").click(function() {
        $(this).next(".plus").slideToggle("500");
        $(this).find("i").toggleClass("fa-plus fa-minus");
    });
    </script>
</body>

</html>