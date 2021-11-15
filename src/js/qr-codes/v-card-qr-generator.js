import Swal from "sweetalert2"
import vCardJS from "vcards-js"
import { vCardQrCode } from "./qr-module"
import { canvas, download, quality } from "./variables"

const firstName = document.getElementById("first-name")
const lastName = document.getElementById("last-name")
const phoneNumber = document.getElementById("phone-number")
const landLine = document.getElementById("land-line")
const email = document.getElementById("email")
const address = document.getElementById("address")
const company = document.getElementById("company")
const role = document.getElementById("role")

const saveBtn = document.querySelector(".vcard button")






setStoredData();
vCardQrCode.append(canvas);

//Updation of Values taken with the help of eventlistners From User
//Updating the Data


const vCard = vCardJS();

saveBtn.addEventListener("click", () => {
    vCard.firstName = firstName.value;
    vCard.lastName = lastName.value;
    vCard.workPhone = phoneNumber.value;
    vCard.homePhone = landLine.value;
    vCard.email = email.value;
    vCard.homeAddress = address.value
    vCard.organization = company.value;
    vCard.role = role.value;

    vCardQrCode.update({
        data: vCard.getFormattedString(),
    })
})





quality.addEventListener("change", e => {
    localStorage.clear();
    if (quality.value == 1) {
        vCardQrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'L'
            }
        })
    } else if (quality.value == 2) {
        vCardQrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'M'
            }
        })
    } else {
        vCardQrCode.update({
            qrOptions: {
                errorCorrectionLevel: 'H'
            }
        })
    }
    vCardQrCode.append(canvas);
})



// Saving Data in Local Storage

function savingDataLocalStorege() {
    let dataObject = {
        extension: download.value,
        quality: quality.value
    }
    localStorage.setItem("storedData",JSON.stringify(dataObject))
}

function setStoredData() {
    const storedData = JSON.parse(localStorage.getItem("storedData"));
    if(storedData == null) {
        return;
    }
    download.value = storedData.extension;
    quality.value = 2;
    
}