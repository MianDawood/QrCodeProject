<div  class="qr-data">
                <div class="main-qr-code p-2">
                  <div class="text-center" width="100%" height="400" ref="vCardqrCode"></div>
                </div>
                <div class="range px-4">
                  <input type="range" @change="updateQrCode"  v-model="qrCodeState.quality" min="1" max="3" class="slider myRange">
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
                    <select v-model="qrCodeState.format" class="downloadFormat">
                      <option value="0" selected>Choose format</option>
                      <option value="svg">SVG</option>
                      <option value="png">PNG</option>
                      <option value="jpeg">JPEG</option>
                    </select>
                    <div class="select-download">
                      <button @click="qrDownload" class="btn btn-dark Register_btn m-0 download" type="button">Download</button>
                    </div>
                  </div>
                </div>
                <div class="px-4 text-center py-2 my-3">
                  <button @click="saveQrCode" type="button" class="btn btn-outline-dark py-3 px-4" style="border-radius: 20px;">Save QR
                    Code</button>
                </div>
              </div>