import { tabsItems } from "./tabs";
import { QrCode,qrGen } from "./objectInitialization";
import {  vCardGenerator } from "./Generators/vCardFunctions";
import { urlGenerator } from "./Generators/urlFunctions";
import { swapColor, swapEyeColor } from "./styelingFunctions/swapColors";
import { vCardForm, urlForm ,qrCodeStyle} from "./objects";


import Swal from "sweetalert2"
import axios from "axios";


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

        saveQrCode () {
            Object.keys(this.tabs).forEach(key => {
                if(this.tabs[key].value == true && key == 'vCard') {
                    vCardGenerator();
                } else if (this.tabs[key].value == true && key == 'url') {
                    this.urlPost("url")
                } else if (this.tabs[key].value == true && key == 'website') {
                    this.urlPost("website")
                } else if (this.tabs[key].value == true && key == 'pdf') {
                    urlGenerator();
                } else if (this.tabs[key].value == true && key == 'googlereview') {
                    urlGenerator();
                } else if (this.tabs[key].value == true && key == 'rating') {
                    urlGenerator();
                }
            })
        },

        async urlPost(cat) {
            await axios.post(`./process/qrUpload.php`,{
                data: this.urlState,
                style: this.qrCodeState,
                category: cat
            }).then(res => {
                if(res.data == "success") {
                    Swal.fire({
                        icon:"success",
                        title: "Done",
                        text:"Succesfully Inserted"
                    })
                }
            })
            
        },


        async fileUpload () {
            let file = this.$refs.logoFile.files[0]
            let formData = new FormData();
            formData.append('file', file);

            await axios.post('./process/fileUpload.php', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(res => {
                if(res.data == "done") {
                    Swal.fire({
                        icon:"success",
                        title: "Done",
                        text:"File Uploaded"
                    })
                }
            })
        },


        async editQr() {
            let uri = window.location.href.split('=');
            let id = uri[1];
            if(id) {
                await axios.post("./process/qrSelection.php", {
                    id
                }).then(res => {
                    let {data} = res;
                    console.log(data)
                    this.show(`${data.qr_category}`)

                    urlForm.url = data.qr_content

                    qrCodeStyle.backgroundColor = data.qr_bgcolor

                    qrCodeStyle.singleColor = data.qr_singleColor
                    qrCodeStyle.singleEyeColor = data.qr_singleEyeColor

                    qrCodeStyle.gradiantColorOne = data.qr_gradiantColorOne
                    qrCodeStyle.gradiantColorTwo = data.qr_gradiantColorTwo

                    qrCodeStyle.gradiantEyeColorOne = data.qr_gradiantEyeColorOne
                    qrCodeStyle.gradiantEyeColorTwo = data.qr_gradiantEyeColorTwo

                    qrCodeStyle.dotColorGradiantType = data.qr_dotColorGradiantType
                    qrCodeStyle.dotEyeColorGradiantType = data.qr_dotEyeColorGradiantType

                    qrCodeStyle.qrImage = data.qr_qrImage

                    this.updateQrCode();
                })
            }
        }




    },

    updated () {
        QrCode.append(this.$refs["vCardqrCode"]);
        
    },

    mounted() {
        this.updateQrCode();
    },

    created() {
        this.editQr();
    }
})



app.mount("#vueReactive")
