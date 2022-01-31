export const swapColor = () => {
    let color1 = document.querySelector(".gradiantColorOne-label")
                let color2 = document.querySelector(".gradiantColorTwo-label")
                let temp = color1.innerHTML
                color1.innerHTML = color2.innerHTML
                color2.innerHTML = temp
                this.qrCodeState.gradiantColorOne = color1.innerHTML;
                this.qrCodeState.gradiantColorTwo = color2.innerHTML;
} 

export const swapEyeColor = () => {
    let color1 = document.querySelector(".gradiantEyeColorOne-label")
                let color2 = document.querySelector(".gradiantEyeColorTwo-label")
                let temp = color1.innerHTML
                color1.innerHTML = color2.innerHTML
                color2.innerHTML = temp
                this.qrCodeState.gradiantEyeColorOne = color1.innerHTML;
                this.qrCodeState.gradiantEyeColorTwo = color2.innerHTML;
} 