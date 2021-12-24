import { tabsItems } from "./tabs";
import { vCardForm, vCardQrCode, vCard, vCardGenerator } from "./vCard";


const app = Vue.createApp({
    el : 'vueReactive',
    data () {
        return {
            tabs : tabsItems,

            vCardState: vCardForm,
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
    },

    updated () {
        this.updatevCardQrCode();
    },

    mounted() {
        this.updatevCardQrCode();
    }
})

app.mount("#vueReactive")