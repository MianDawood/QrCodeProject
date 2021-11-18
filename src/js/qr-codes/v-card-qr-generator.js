import Swal from "sweetalert2"
import vCardJS from "vcards-js"
import { vCardQrCode } from "./qr-module"
import { canvas, download, downloadFormat, quality } from "./variables"

const firstName = document.getElementById("first-name")
const lastName = document.getElementById("last-name")
const phoneNumber = document.getElementById("phone-number")
const landLine = document.getElementById("land-line")
const email = document.getElementById("email")
const address = document.getElementById("address")
const company = document.getElementById("company")
const role = document.getElementById("role")

const saveBtn = document.querySelector(".vcard button")






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


download.addEventListener("click", () => {
    const list = document.querySelector(".tab-item-1").classList;

    const extension = downloadFormat.value

    
    if(!list.value.includes("d-none")) {
        console.log("hello v-card");
        if (extension == "0") {
            //Using SweetAlert 2
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Select Format To Download',
            })
        } else {
            vCardQrCode.download({name: "qr",extension: downloadFormat.value})
        }
    }
})