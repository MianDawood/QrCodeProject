import { tabsItems } from "./tabs";
import { QrCode,qrGen } from "./objectInitialization";
import {  vCardGenerator } from "./Generators/vCardFunctions";
import { urlGenerator } from "./Generators/urlFunctions";
import { swapColor, swapEyeColor } from "./styelingFunctions/swapColors";
import { vCardForm, urlForm ,qrCodeStyle} from "./objects";


import Swal from "sweetalert2"


const app = Vue.createApp({
    el : 'vueReactive',
    data () {
        return {
            tabs : tabsItems,

            vCardState: vCardForm,
            urlState: urlForm,
            qrCodeState: qrCodeStyle,
        }
    },

    methods: {
        show(data) {
            Object.keys(this.tabs).forEach(key => {
                this.tabs[key].value = false
                this.tabs[key].class = "";
                
                if(key == data) {
                    this.tabs[key].value = true;
                    this.tabs[key].class = "show";
                }

                if(this.tabs[key].value == true && key == 'pdf') {
                    Swal.fire({
                        title: '<strong>How to send a PDF Just in Few Steps</strong>',
                        icon: 'info',
                        html: `
                            <ul>
                                <li>First Upload Your File to Google Drive</li>
                                <li>Second Right Click on The Desired File</li>
                                <li>Third Click On Get Link</li>
                                <li>Fourth Change Restriction to 'Anyone With the Link'</li>
                                <li>Fifth Click On Copy Link</li>
                                <li>Sixth Paste The Link Here</li>
                            </ul>
                        `,
                        showCloseButton: true,
                        focusConfirm: false,
                        confirmButtonText:
                          '<i class="fa fa-thumbs-up"></i>  Ok Great I Can do This!',
                      })
                }
            }); 
            this.updateQrCode();
        },
        updateQrCode () {
            // Executes vCard object and assign values to vCard
            //Generates QR Code 
            Object.keys(this.tabs).forEach(key => {
                if(this.tabs[key].value == true && key == 'vCard') {
                    vCardGenerator();
                } else if (this.tabs[key].value == true && key == 'url') {
                    urlGenerator();
                } else if (this.tabs[key].value == true && key == 'website') {
                    urlGenerator();
                } else if (this.tabs[key].value == true && key == 'pdf') {
                    urlGenerator();
                } else if (this.tabs[key].value == true && key == 'googlereview') {
                    urlGenerator();
                } else if (this.tabs[key].value == true && key == 'rating') {
                    urlGenerator();
                }
            })
            
            
            qrGen();
            QrCode.append(this.$refs["vCardqrCode"]);
        },

        swapColors (input) {
            if(input == 'color') {
                swapColor();
                this.updateQrCode();
            }
            else if(input == 'eyeColor') {
                swapEyeColor();
                this.updateQrCode();
            }
        },

        qrImg(data) {
            this.qrCodeState.qrImage = data;
            this.updateQrCode();
            console.log(this.qrCodeState);
        },


        qrDownload () {
            if(this.qrCodeState.format != '0') {
                QrCode.download({name: "qr",extension: this.qrCodeState.format})
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Select Format To Download',
                })
            }
        },
    },

    updated () {
        QrCode.append(this.$refs["vCardqrCode"]);
        
    },

    mounted() {
        this.updateQrCode();
    },

    created() {
    }
})



app.mount("#vueReactive")
