import { qrData , qrCodeStyle } from "./objects";

import QRCodeStyling from "qr-code-styling";

export const QrCode = new QRCodeStyling({
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
    
    QrCode.update({
        data: qrData.data,
        qrOptions: {
            errorCorrectionLevel: qrCodeStyle.quality
        },
    })

    if(qrCodeStyle.color == 'single') {
        qrCodeStyle.gradiantColorOne = ''
        qrCodeStyle.gradiantColorTwo = ''
        QrCode.update({
            image:`./assets/images/qr-logo/${qrCodeStyle.qrImage}`,
            imageOptions: {
                margin: 5,
                hideBackgroundDots: true,
                imageSize: .4,
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

    } else {
        QrCode.update({
            image:`./assets/images/qr-logo/${qrCodeStyle.qrImage}`,
            imageOptions: {
                margin: 5,
                hideBackgroundDots: true,
                imageSize: .4,
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

