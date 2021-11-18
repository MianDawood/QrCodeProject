import QRCodeStyling from "qr-code-styling";
import Swal from 'sweetalert2';

const forms = document.querySelectorAll(".qrForm") // Querying Forms in qr-gen.html to prevent them from default submit behaviour
const quality = document.getElementById("myRange");
const data = document.getElementById("inputDataURL");
const download = document.getElementById("download");
const downloadFormat = document.getElementById("downloadFormat");


forms.forEach(form => {
    form.addEventListener("submit", e => {
        e.preventDefault();
    })
})

const qrCode = new QRCodeStyling({
    width: 300,
    type: "svg",
    data: "Helle world",
    dotsOptions: {
        color: "#000",
        type: "squares"
    },
    imageOptions: {
        crossOrigin: "anonymous",
        margin: 20
    },
    qrOptions: {
        errorCorrectionLevel: 'M'
    }
});

setStoredData();
qrCode.append(document.getElementById("canvas"));

//Updation of Values taken with the help of eventlistners From User


//Updating the Data
data.addEventListener("keyup", e => {
    e.preventDefault();
    localStorage.clear();
    qrCode.update({
        data: data.value
    })
    qrCode.append(document.getElementById("canvas"));
    //if (e.code == "Enter") {
    //}
})


// Updating the Quality of QR Code
quality.addEventListener("change", e => {
    localStorage.clear();
    if (quality.value == 1) {
        qrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'L'
            }
        })
    } else if (quality.value == 2) {
        qrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'M'
            }
        })
    } else {
        qrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'H'
            }
        })
    }
    qrCode.append(document.getElementById("canvas"));
})

// Download The Qr Code
download.addEventListener("click", () => {
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
        qrCode.download({name: "qr",extension})
        savingDataLocalStorege();
        location.reload();
    
    }
})


// Saving Data in Local Storage

function savingDataLocalStorege() {
    let dataObject = {
        inputdata: data.value,
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
    data.value = storedData.inputdata
    downloadFormat.value = storedData.extension;
    quality.value = 2;
    qrCode.update({
        data: data.value,
        
    })
}