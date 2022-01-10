import vCardJS from "vcards-js"
import QRCodeStyling from "qr-code-styling";


export const vCard = vCardJS();

export const vCardForm = {
    firstName:'',
    lastName:'',
    phoneNumber:'',
    landLine:'',
    email:'',
    orginizationName:'',
    jobTitle:'',
    country:'',
    state:'',
    city:'',
    zipcode:'',
    street:'',
    summery:'',
    canvas: '<h1>Hello world</h1>',
}

export const qrCodeStyle = {
    quality:'',
    format: '0',
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
        }
    })
    console.log(vCardQrCode._options.qrOptions);
    
}

