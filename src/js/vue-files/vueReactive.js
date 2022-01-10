import { tabsItems } from "./tabs";
import { vCardForm, vCardQrCode, vCard, vCardGenerator,qrCodeStyle } from "./vCard";
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
            vCardGenerator();
            vCardQrCode.append(this.$refs["vCardqrCode"]);
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
        }
    },

    updated () {
        vCardQrCode.append(this.$refs["vCardqrCode"]);
    },

    mounted() {
        this.updatevCardQrCode();
    }
})

app.mount("#vueReactive")