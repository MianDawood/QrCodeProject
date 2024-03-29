<div class="tab-item tab-item-1 vcard">

          <div class="row">
            <div class="col-lg-8 p-0">
                <!-- Main Input Form -->
                <div class="accordion mb-3" id="accordionExample">
                  <div class="card">
                    <div class="card-header heading_one" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseInfo"
                          aria-expanded="" aria-controls="collapseInfo">
                          <h5> Basic Information</h5>
                          <div class="arrow">
                            <i class="fas fa-chevron-up"></i>
                          </div>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseInfo" class="collapse show" aria-labelledby="headingOne"
                      data-parent="#accordionExample">
                      <div class="card-body">
                        <form class="qrForm">
                          <div class="row align-items-center">
            
                            <!-- First Row Name -->
                            <div class="col-lg-2">
                              <div class="label font-weight-bold">Name</div>
                            </div>
                            <div class="col-lg-5">          
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.firstName" class="form-control first-name"
                                    placeholder="First Name">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.lastName" class="form-control last-name"
                                    placeholder="Last Name">
                                </div>
                              </div>
                            </div>
            
            
                            <!-- Second Row Phone Number -->
                            <div class="col-lg-2">
                              <div class="label font-weight-bold">Phone</div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.phoneNumber" class="form-control phone-number" a
                                    placeholder="Phone Number">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.landLine" class="form-control land-line"
                                    placeholder="Land Line">
                                </div>
                              </div>
                            </div>
            
            
                            <!-- Third Row Email -->
                            <div class="col-lg-2">
                              <div class="label font-weight-bold">Email</div>
                            </div>
                            <div class="col-lg-10">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.email" class="form-control email" aria-describedby="emailHelp"
                                    placeholder="Email">
                                </div>
                              </div>
                            </div>
            
                            <!-- Fourth Row Orginization -->
                            <div class="col-lg-2 p-0">
                              <div class="label font-weight-bold">Orginization</div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.orginizationName" class="form-control orginization"
                                    placeholder="Your Orginization Name">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.jobTitle" class="form-control role" placeholder="Your Job Title">
                                </div>
                              </div>
                            </div>
            
                            <!-- Fifth Row Address -->
                            <div class="col-lg-2">
                              <div class="label font-weight-bold">Address</div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.country" class="form-control country" placeholder="Country">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.state" class="form-control state" placeholder="State">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block">
                              <div class="label font-weight-bold"></div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.city" class="form-control city" placeholder="City">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.zipcode" class="form-control zipcode" placeholder="Zipcode">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2 d-none d-lg-block">
                              <div class="label font-weight-bold"></div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" @keyup="updateQrCode" v-model="vCardState.street" class="form-control street" placeholder="Street">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                            </div>
            
                            <!-- Sixth Row Summery -->
            
                            <div class="col-lg-2 align-self-start">
                              <div class="label font-weight-bold py-lg-4">Summery</div>
                            </div>
                            <div class="col-lg-10">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <textarea name="summery" @keyup="updateQrCode" v-model="vCardState.summery" placeholder="A brief description about you and your skills" class="form-control" id="summery" cols="30" rows="10"></textarea>
                                </div>
                              </div>
                            </div>
                            
                            
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Web Links Form -->
                <div class="accordion mb-3" id="accordionExample">
                  <div class="card">
                    <div class="card-header heading_one" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseWeblink"
                          aria-expanded="" aria-controls="collapseWeblink">
                          <h5> Web Links</h5>
                          <div class="arrow">
                            <i class="fas fa-chevron-up"></i>
                          </div>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseWeblink" class="collapse show" aria-labelledby="headingOne"
                      data-parent="#accordionExample">
                      <div class="card-body">
                        <form class="qrForm">
                          <div class="row align-items-center">
                            <div class="col-lg-2">
                              <div class="label font-weight-bold">Website Name</div>
                            </div>
                            <div class="col-lg-5">          
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" class="form-control" id="website-name" aria-describedby="emailHelp"
                                    placeholder="Website Name">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center">
                                <div class="input">
                                  <input type="text" class="form-control" id="url-link" aria-describedby="emailHelp"
                                    placeholder="Url">
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Set Colors -->
                <div class="accordion mb-3" id="accordionExample">
                  <div class="card">
                    <div class="card-header heading_one" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseColors"
                          aria-expanded="" aria-controls="collapseColors">
                          <h5> Set Color</h5>
                          <div class="arrow">
                            <i class="fas fa-chevron-up"></i>
                          </div>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseColors" class="collapse show" aria-labelledby="headingOne"
                      data-parent="#accordionExample">
                      <div class="card-body">
                        <form class="qrForm">

                          <!-- First Row -->
                          <div class="row align-items-center">
                            <div class="col-lg-2">
                              <div class="label font-weight-bold">Foreground Color</div>
                            </div>
                            <div class="col-lg-3 px-1">          
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
                                <div class="input input-checkbox d-flex align-items-center">
                                  <div class="pretty p-icon p-round">
                                    <input checked value="single" v-model="qrCodeState.color" type="radio" name="icon_solid" />
                                    <div class="state p-primary">
                                        <i class="icon mdi mdi-check"></i>
                                        <label>Single Color</label>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 px-1">          
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
                                <div class="input input-checkbox d-flex align-items-center">
                                  <div class="pretty p-icon p-round">
                                    <input value="gradiant" v-model="qrCodeState.color" type="radio" name="icon_solid" />
                                    <div class="state p-primary">
                                        <i class="icon mdi mdi-check"></i>
                                        <label>Color Gradient</label>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 px-1">          
                              <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
                                <div class="input input-checkbox d-flex align-items-center">
                                  <div class="pretty p-default p-curve p-fill">
                                    <input v-model="qrCodeState.customEyeColor" type="checkbox" />
                                    <div class="state p-primary-o">
                                        <label>Custom Eye Color</label>
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- First Row if its a gradiant-->
                          <div v-show="qrCodeState.color == 'gradiant'">
                            <?php include("./includes/qr_gen/stylingRows/color/gradiantColor.php") ?>
                          </div>
                          <!-- First Row if its a single Color-->
                          <div v-show="qrCodeState.color == 'single'">
                            <?php include("./includes/qr_gen/stylingRows/color/singleColor.php") ?>
                          </div>
                            
                          <!-- Second Row -->
                          <!-- First Row if its a gradiant-->
                          <div v-show="qrCodeState.color == 'gradiant'">
                            <?php include("./includes/qr_gen/stylingRows/eyeColor/gradiantColor.php") ?>
                          </div>
                          <!-- First Row if its a single Color-->
                          <div v-show="qrCodeState.color == 'single'">
                            <?php include("./includes/qr_gen/stylingRows/eyeColor/singleColor.php") ?>
                          </div>
                          <!-- Third Row -->
                          <div class="row align-items-center">
                            <div class="col-lg-3">
                              <div class="label font-weight-bold">Background</div>
                            </div>
                            <div class="col-lg-3 px-1">          
                              <div class="my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
                                <div class="d-flex align-items-center">
                                  <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
                                    <div class="input input-checkbox d-flex align-items-center justify-content-center">
                                      <input class="backgroundColor" type="color" >
                                      <label class="backgroundColor-label px-4">#aaa</label>
                                    </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-1 d-flex justify-content-center">                          
                            </div>
                            <div class="col-lg-3 px-1">          
                            </div>
                            <div class="col-lg-3">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Add Logo Image -->
                <div class="accordion mb-3" id="accordionExample">
        <div class="card">
          <div class="card-header heading_one" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseLogo"
                aria-expanded="" aria-controls="collapseColors">
                <h5> Add Logo Image</h5>
                <div class="arrow">
                  <i class="fas fa-chevron-up"></i>
                </div>
              </button>
            </h5>
          </div>
          <div id="collapseLogo" class="collapse show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                  <h5 class="py-3">Image</h5>
                    <div class="d-flex flex-column align-items-center">
                      <div class="logo-preview m-2 d-flex justify-content-center align-items-center ">
                        <img src="./assets/images/281-2810310_png-file-cloud-upload-icon-removebg-preview.png" width="100" class="img-fluid" alt="">
                      </div>
                      <div>
                        <div class="upload-btn-wrapper">
                          <button class="upload-btn">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8809 2.76208C12.9318 2.76208 10.3961 4.52279 9.26361 7.04613C9.12489 7.35519 9.03635 7.55173 8.96554 7.69026C8.95242 7.71592 8.94133 7.73663 8.93223 7.75308L8.9105 7.75461C8.79994 7.76161 8.64716 7.76208 8.38086 7.76208C5.75751 7.76208 3.63086 9.88873 3.63086 12.5121C3.63086 15.1354 5.75751 17.2621 8.38086 17.2621H9.55243L11.5524 15.2621H8.38086C6.86208 15.2621 5.63086 14.0309 5.63086 12.5121C5.63086 10.9933 6.86208 9.76208 8.38086 9.76208L8.40723 9.76209C8.63777 9.7621 8.85526 9.76212 9.03695 9.75061C9.22868 9.73846 9.4652 9.71004 9.70615 9.61046C9.95367 9.50817 10.1212 9.39976 10.3158 9.21583C10.5214 9.0216 10.6551 8.77901 10.7464 8.60057C10.8432 8.4112 10.9526 8.16743 11.0779 7.88811L11.0779 7.88804L11.0883 7.86505C11.91 6.03406 13.748 4.76208 15.8809 4.76208C18.0137 4.76208 19.8517 6.03406 20.6735 7.86505L20.6838 7.88821C20.8092 8.16748 20.9186 8.41122 21.0154 8.60057C21.1066 8.77901 21.2403 9.0216 21.4459 9.21583C21.6406 9.39976 21.808 9.50817 22.0556 9.61046C22.2965 9.71004 22.533 9.73846 22.7248 9.75061C22.9065 9.76212 23.124 9.7621 23.3545 9.76209L23.3809 9.76208C24.8996 9.76208 26.1309 10.9933 26.1309 12.5121C26.1309 14.0309 24.8996 15.2621 23.3809 15.2621H20.2093L22.2093 17.2621H23.3809C26.0042 17.2621 28.1309 15.1354 28.1309 12.5121C28.1309 9.88873 26.0042 7.76208 23.3809 7.76208C23.1146 7.76208 22.9618 7.76161 22.8512 7.75461L22.8295 7.75307C22.8204 7.73663 22.8093 7.71591 22.7962 7.69026C22.7254 7.55173 22.6368 7.35519 22.4981 7.04613C21.3656 4.52279 18.8299 2.76208 15.8809 2.76208Z" fill="#CCD2E3"/>
                              <path d="M15.8809 15.0121L15.1738 14.305L15.8809 13.5979L16.588 14.305L15.8809 15.0121ZM16.8809 26.2621C16.8809 26.8144 16.4331 27.2621 15.8809 27.2621C15.3286 27.2621 14.8809 26.8144 14.8809 26.2621L16.8809 26.2621ZM10.1738 19.305L15.1738 14.305L16.588 15.7192L11.588 20.7192L10.1738 19.305ZM16.588 14.305L21.588 19.305L20.1738 20.7192L15.1738 15.7192L16.588 14.305ZM16.8809 15.0121L16.8809 26.2621L14.8809 26.2621L14.8809 15.0121L16.8809 15.0121Z" fill="#CCD2E3"/>
                            </svg>
                          </button>
                          <input 
                            type="file" 
                            name="myfile" 
                            ref="logoFile"
                            accept="image/jpeg, image/png, image/jpg"
                            multiple=""
                            @change="fileUpload"/>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="row logo-bg justify-content-center align-items-center">
                      <?php 

                      for ($i=1; $i <= 10; $i++) { ?>
                        <div class='col-lg-3 col-md-6 p-2'>
                          <div class='logo-bg-item d-flex justify-content-center align-items-center logo-bg-item-<?php echo $i ?>'>
                            <img @click="qrImg('<?php echo $i ?>.png')"  src='./assets/images/qr-logo/<?php echo $i ?>.png' alt='' class='img-fluid logo-img'>
                          </div>
                        </div>
                      <?php
                      }
                      ?>

                      <?php 
                        require "./includes/conn.php";
                        $id = $_SESSION["userId"];
                        $selectQuery = "SELECT * FROM `qr_logo` WHERE user_id = $id";
                        $execute = mysqli_query($con, $selectQuery);
                        while($data = mysqli_fetch_array($execute)) { ?>
                          <div class='col-lg-3 col-md-6 p-2'>
                            <div class='logo-bg-item d-flex justify-content-center align-items-center logo-bg-item-<?php echo $i ?>'>
                              <img @click="qrImg('<?php echo $data["logo_name"] ?>')"  src='./assets/images/qr-logo/<?php echo $data["logo_name"] ?>' alt='' class='img-fluid logo-img'>
                            </div>
                          </div>
                        <?php } ?>

                        
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
            </div>


            <div class="col-lg-4">
              <?php include("./includes/qr_gen/QrCode/qrCodeCol.php") ?>
            </div>
          </div>
          

</div>