import vCardJS from "vcards-js"
import QRCodeStyling from "qr-code-styling";

import { vCardForm , qrCodeStyle } from "./objects";
import { nodeName } from "jquery";


const vCard = vCardJS();
export const vCardGenerator = () => {
    vCard.firstName = vCardForm.firstName;
    vCard.lastName = vCardForm.lastName;
    vCard.workPhone = vCardForm.phoneNumber;
    vCard.homePhone = vCardForm.landLine;
    vCard.email = vCardForm.email;
    vCard.organization = vCardForm.orginizationName;
    vCard.role = vCardForm.jobTitle;
    vCard.homeAddress.countryRegion = vCardForm.country;
    vCard.homeAddress.stateProvince = vCardForm.state;
    vCard.homeAddress.city = vCardForm.city;
    vCard.homeAddress.postalCode = vCardForm.zipcode;
    vCard.homeAddress.street = vCardForm.street;

    vCard.note = vCardForm.summery;    
}



export const vCardQrCode = new QRCodeStyling({
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



export const qrGen = () => {

    switch (qrCodeStyle.quality) {
        case '1':
            qrCodeStyle.quality = 'L';
            break;
        case '2':
            qrCodeStyle.quality = 'M';
            break;
        case '3':
            qrCodeStyle.quality = 'H';
            break;
    
        default:
            qrCodeStyle.quality = 'M';
            break;
    }
    
    vCardQrCode.update({
        data: vCard.getFormattedString(),
        qrOptions: {
            errorCorrectionLevel: qrCodeStyle.quality
        },
    })

    if(qrCodeStyle.color == 'single') {
        qrCodeStyle.gradiantColorOne = ''
        qrCodeStyle.gradiantColorTwo = ''
        vCardQrCode.update({
            image:`./assets/images/qr-logo/${qrCodeStyle.qrImage}`,
            imageOptions: {
                margin: 5,
                hideBackgroundDots: false,
            },
            dotsOptions: {
                gradient: {
                    type: 'linear',
                    colorStops: [
                    {
                        offset: 0,
                        color: qrCodeStyle.singleColor,
                    },
                    {
                        offset: 1,
                        color: qrCodeStyle.singleColor
                    }
                ]
                }
            },
            cornersSquareOptions: {
                gradient: {
                    type: 'linear',
                    colorStops: [
                    {
                        offset: 0,
                        color: qrCodeStyle.singleEyeColor,
                    },
                    {
                        offset: 1,
                        color: qrCodeStyle.singleEyeColor
                    }
                ]
                }
            },
            backgroundOptions: {
                color: qrCodeStyle.backgroundColor,
            },
        })

        console.log(vCardQrCode);
    } else {
        vCardQrCode.update({
            image:`./assets/images/qr-logo/${qrCodeStyle.qrImage}`,
            imageOptions: {
                margin: 5,
                hideBackgroundDots: false,
            },
            dotsOptions: {      
                gradient: {
                    type: qrCodeStyle.dotColorGradiantType,
                    colorStops: [
                    {
                        offset: 0,
                        color: qrCodeStyle.gradiantColorOne,
                    },
                    {
                        offset: 1,
                        color: qrCodeStyle.gradiantColorTwo
                    }
                ]
                }
            },
            cornersSquareOptions: {      
                gradient: {
                    type: qrCodeStyle.dotEyeColorGradiantType,
                    colorStops: [
                    {
                        offset: 0,
                        color: qrCodeStyle.gradiantEyeColorOne,
                    },
                    {
                        offset: 1,
                        color: qrCodeStyle.gradiantEyeColorTwo
                    }
                ]
                }
            },
            backgroundOptions: {
                color: qrCodeStyle.backgroundColor,
            },
        })
    }
}

