import { tabsItems } from "./tabs";
import { vCardQrCode, vCardGenerator, qrGen } from "./objectInitialization";

import { vCardForm ,qrCodeStyle} from "./objects";


import Swal from "sweetalert2"


const app = Vue.createApp({
    el : 'vueReactive',
    data () {
        return {
            tabs : tabsItems,

            vCardState: vCardForm,
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
            }); 
        },
        updatevCardQrCode () {
            // Executes vCard object and assign values to vCard
            //Generates QR Code 
            qrGen();
            vCardGenerator();
            vCardQrCode.append(this.$refs["vCardqrCode"]);
            console.log(this.qrCodeState);
        },

        swapColors (input) {
            if(input == 'color') {
                let color1 = document.querySelector(".gradiantColorOne-label")
                let color2 = document.querySelector(".gradiantColorTwo-label")
                let temp = color1.innerHTML
                color1.innerHTML = color2.innerHTML
                color2.innerHTML = temp
                this.qrCodeState.gradiantColorOne = color1.innerHTML;
                this.qrCodeState.gradiantColorTwo = color2.innerHTML;
                this.updatevCardQrCode();
            }
            else if(input == 'eyeColor') {
                let color1 = document.querySelector(".gradiantEyeColorOne-label")
                let color2 = document.querySelector(".gradiantEyeColorTwo-label")
                let temp = color1.innerHTML
                color1.innerHTML = color2.innerHTML
                color2.innerHTML = temp
                this.qrCodeState.gradiantEyeColorOne = color1.innerHTML;
                this.qrCodeState.gradiantEyeColorTwo = color2.innerHTML;
                this.updatevCardQrCode();
            }
        },

        qrImg(data) {
            this.qrCodeState.qrImage = data;
            this.updatevCardQrCode();
            console.log(this.qrCodeState);
        },


        qrDownload () {
            if(this.qrCodeState.format != '0') {
                vCardQrCode.download({name: "qr",extension: this.qrCodeState.format})
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
        vCardQrCode.append(this.$refs["vCardqrCode"]);
    },

    mounted() {
        this.updatevCardQrCode();
    },

    created() {
    }
})



app.mount("#vueReactive")
