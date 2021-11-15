import Swal from "sweetalert2";
import { urlQrCode, vCardQrCode } from "./qr-module";
import { canvas, download, downloadFormat, quality } from "./variables";


const forms = document.querySelectorAll(".qrForm") // Querying Forms in qr-gen.html to prevent them from default submit behaviour
const urlData = document.querySelector(".url .inputDataURL");




forms.forEach(form => {
    form.addEventListener("submit", e => {
        e.preventDefault();
    })
})




setStoredData();

//Updation of Values taken with the help of eventlistners From User


//Updating the Data
urlData.addEventListener("keyup", e => {
    e.preventDefault();
    localStorage.clear();
    urlQrCode.update({
        data: urlData.value
    })
    urlQrCode.append(canvas);
    //if (e.code == "Enter") {
    //}
})


// Updating the Quality of QR Code
quality.addEventListener("change", e => {
    localStorage.clear();
    if (quality.value == 1) {
        urlQrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'L'
            }
        })
    } else if (quality.value == 2) {
        urlQrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'M'
            }
        })
    } else {
        urlQrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'H'
            }
        })
    }
    urlQrCode.append(canvas);
})

// Download The Qr Code
download.addEventListener("click", () => {
    const list = document.querySelector(".tab-item-2").classList

    if(!list.value.includes("d-none")) {
        console.log("Hello url");
        localStorage.clear();
        const extension = downloadFormat.value
        if (extension == "0") {
            //Using SweetAlert 2
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Format To Download',
            })
        } else {
            urlQrCode.download({name: "qr",extension})
            savingDataLocalStorege();
            location.reload();
        
        }

    }
})


// Saving Data in Local Storage

function savingDataLocalStorege() {
    let dataObject = {
        inputdata: urlData.value,
        extension: downloadFormat.value,
        quality: quality.value
    }
    localStorage.setItem("storedData",JSON.stringify(dataObject))
}

function setStoredData() {
    const storedData = JSON.parse(localStorage.getItem("storedData"));
    if(storedData == null) {
        return;
    }
    urlData.value = storedData.inputdata
    downloadFormat.value = storedData.extension;
    quality.value = 2;
    urlQrCode.update({
        data: urlData.value,
        
    })
}