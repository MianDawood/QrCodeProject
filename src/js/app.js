import 'bootstrap';
import '../scss/app.scss';
import QRCodeStyling from "qr-code-styling";


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
});



//Updation of Values taken with the help of eventlistners From User
qrCode.append(document.getElementById("canvas"));


//Updating the Data
data.addEventListener("keyup", e => {
    e.preventDefault();
    if(e.code == "Enter") {
        qrCode.update({
            data: data.value
        })
        qrCode.append(document.getElementById("canvas"));
    }
})


// Updating the Quality of QR Code
quality.addEventListener("change", e => {
    if(quality.value == 1) {
        qrCode.update({
            qrOptions : {
                errorCorrectionLevel: 'L'
            }
        })
    } else if (quality.value == 2) {
        qrCode.update({
            qrOptions : {
                errorCorrectionLevel: 'M'
            }
        })
    } else {
        qrCode.update({
            qrOptions : {
                errorCorrectionLevel: 'H'
            }
        })
    }
    qrCode.append(document.getElementById("canvas"));
})

// Download The Qr Code
download.addEventListener("click" , () => {
    qrCode.download({ name: "qr", extension: downloadFormat.value });

})