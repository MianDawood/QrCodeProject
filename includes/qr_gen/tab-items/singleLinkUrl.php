<div class="tab-item tab-item-2 url">

  <div class="row">
    <div class="col-lg-8 p-0">
      <h4 class="font-weight-bold my-3">QR Code Generator</h4>

      <!-- Main Form  -->
      <div class="accordion mb-3" id="accordionExample">
        <div class="card">
          <div class="card-header heading_one" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThird"
                aria-expanded="" aria-controls="collapseThird">
                <h5> Basic Information</h5>
                <div class="arrow">
                  <i class="fas fa-chevron-up"></i>
                </div>
              </button>
            </h5>
          </div>
          <div id="collapseThird" class="collapse show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body card_body faq-body-text">
              <form class="qrForm">
                <div class="form-group d-flex align-items-center justify-content-center">
                  <div v-if="tabs.website.value || tabs.url.value" class="label font-weight-bold">Url or Text</div>
                  <div v-if="tabs.pdf.value" class="label font-weight-bold">PDF Link</div>
                  <div v-if="tabs.googlereview.value" class="label font-weight-bold">Google Review Link</div>
                  <div v-if="tabs.rating.value" class="label font-weight-bold">Rating Link</div>
                  <div class="input">
                    <input v-if="tabs.website.value || tabs.url.value" type="text" @keyup="updateQrCode" v-model="urlState.url" class="form-control inputDataURL" aria-describedby="emailHelp" placeholder="https://www.google.com">
                    <input v-if="tabs.pdf.value" type="text" @keyup="updateQrCode" v-model="urlState.url" class="form-control inputDataURL" aria-describedby="emailHelp" placeholder="https://docs.google.com/document/">
                    <input v-if="tabs.googlereview.value" type="text" @keyup="updateQrCode" v-model="urlState.url" class="form-control inputDataURL" aria-describedby="emailHelp" placeholder="Google Rating URL">
                    <input v-if="tabs.rating.value" type="text" @keyup="updateQrCode" v-model="urlState.url" class="form-control inputDataURL" aria-describedby="emailHelp" placeholder="Rating URL">
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
              <form class="qrForm">
                <div class="row">
                  <div class="col-lg-4">
                  <h5 class="py-3">Image</h5>
                    <div class="d-flex flex-column align-items-center">
                      <div class="logo-preview m-2 d-flex justify-content-center align-items-center ">
                        <img src="./assets/images/qr-logo/1.png" class="img-fluid" alt="">
                      </div>
                      <div>
                        <div class="upload-btn-wrapper">
                          <button class="upload-btn">
                          <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8809 2.76208C12.9318 2.76208 10.3961 4.52279 9.26361 7.04613C9.12489 7.35519 9.03635 7.55173 8.96554 7.69026C8.95242 7.71592 8.94133 7.73663 8.93223 7.75308L8.9105 7.75461C8.79994 7.76161 8.64716 7.76208 8.38086 7.76208C5.75751 7.76208 3.63086 9.88873 3.63086 12.5121C3.63086 15.1354 5.75751 17.2621 8.38086 17.2621H9.55243L11.5524 15.2621H8.38086C6.86208 15.2621 5.63086 14.0309 5.63086 12.5121C5.63086 10.9933 6.86208 9.76208 8.38086 9.76208L8.40723 9.76209C8.63777 9.7621 8.85526 9.76212 9.03695 9.75061C9.22868 9.73846 9.4652 9.71004 9.70615 9.61046C9.95367 9.50817 10.1212 9.39976 10.3158 9.21583C10.5214 9.0216 10.6551 8.77901 10.7464 8.60057C10.8432 8.4112 10.9526 8.16743 11.0779 7.88811L11.0779 7.88804L11.0883 7.86505C11.91 6.03406 13.748 4.76208 15.8809 4.76208C18.0137 4.76208 19.8517 6.03406 20.6735 7.86505L20.6838 7.88821C20.8092 8.16748 20.9186 8.41122 21.0154 8.60057C21.1066 8.77901 21.2403 9.0216 21.4459 9.21583C21.6406 9.39976 21.808 9.50817 22.0556 9.61046C22.2965 9.71004 22.533 9.73846 22.7248 9.75061C22.9065 9.76212 23.124 9.7621 23.3545 9.76209L23.3809 9.76208C24.8996 9.76208 26.1309 10.9933 26.1309 12.5121C26.1309 14.0309 24.8996 15.2621 23.3809 15.2621H20.2093L22.2093 17.2621H23.3809C26.0042 17.2621 28.1309 15.1354 28.1309 12.5121C28.1309 9.88873 26.0042 7.76208 23.3809 7.76208C23.1146 7.76208 22.9618 7.76161 22.8512 7.75461L22.8295 7.75307C22.8204 7.73663 22.8093 7.71591 22.7962 7.69026C22.7254 7.55173 22.6368 7.35519 22.4981 7.04613C21.3656 4.52279 18.8299 2.76208 15.8809 2.76208Z" fill="#CCD2E3"/>
                            <path d="M15.8809 15.0121L15.1738 14.305L15.8809 13.5979L16.588 14.305L15.8809 15.0121ZM16.8809 26.2621C16.8809 26.8144 16.4331 27.2621 15.8809 27.2621C15.3286 27.2621 14.8809 26.8144 14.8809 26.2621L16.8809 26.2621ZM10.1738 19.305L15.1738 14.305L16.588 15.7192L11.588 20.7192L10.1738 19.305ZM16.588 14.305L21.588 19.305L20.1738 20.7192L15.1738 15.7192L16.588 14.305ZM16.8809 15.0121L16.8809 26.2621L14.8809 26.2621L14.8809 15.0121L16.8809 15.0121Z" fill="#CCD2E3"/>
                            </svg>

                          </button>
                          <input type="file" name="myfile" />
                        </div>
                        <div class="upload-btn-wrapper">
                          <button class="upload-btn">
                          <i class="bi bi-x"></i>
                          </button>
                          <input type="reset" name="myfile" />
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
                        
                    </div>
                  </div>
                </div>
              </form>
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