import QRCodeStyling from "qr-code-styling";



export const urlQrCode = new QRCodeStyling({
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



export const dataList = [urlQrCode, vCardQrCode];
