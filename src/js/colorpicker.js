import Pickr from '@simonwep/pickr';
import '@simonwep/pickr/dist/themes/classic.min.css'; 
import { qrGen } from './vue-files/objectInitialization';
import { qrCodeStyle } from './vue-files/objects';


// Simple example, see optional options for more configuration.


export const colorPicker = () => {
    const component = {
        // Main components
        preview: true,
        opacity: true,
        hue: true,
    
        // Input / output Options
        interaction: {
            hex: true,
            input: true,
            clear: true,
            save: true

            
        }
    }

    //Color
    
    const gradiantColorOne = Pickr.create({
        el: `.gradiantColorOne`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });
    const gradiantColorTwo = Pickr.create({
        el: `.gradiantColorTwo`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });
    const singleColor = Pickr.create({
        el: `.singleColor`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });
    
    
    
    
    singleColor.on('init', instance => {
        elementCallbackInit(instance._color,"singleColor")
        elementCallbackInit(instance._color,"singleEyeColor")
        
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"singleColor")
        elementCallback(instance._color,"singleEyeColor")
    })
    
    gradiantColorOne.on('init', instance => {
        elementCallbackInit(instance._color,"gradiantColorOne")
        elementCallbackInit(instance._color,"gradiantEyeColorOne")
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"gradiantColorOne")
        elementCallback(instance._color,"gradiantEyeColorOne")
    })
    
    gradiantColorTwo.on('init', instance => {
        elementCallbackInit(instance._color,"gradiantColorTwo")
        elementCallbackInit(instance._color,"gradiantEyeColorTwo")
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"gradiantColorTwo")
        elementCallback(instance._color,"gradiantEyeColorTwo")
    })
    
    
    

    

    

    //Eye Color 

    
    const gradiantEyeColorOne = Pickr.create({
        el: `.gradiantEyeColorOne`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });
    const gradiantEyeColorTwo = Pickr.create({
        el: `.gradiantEyeColorTwo`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });
    const singleEyeColor = Pickr.create({
        el: `.singleEyeColor`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });
    
    
    
    
    singleEyeColor.on('init', instance => {
        elementCallbackInit(instance._color,"singleEyeColor")
        
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"singleEyeColor")
    })
    
    gradiantEyeColorOne.on('init', instance => {
        elementCallbackInit(instance._color,"gradiantEyeColorOne")
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"gradiantEyeColorOne")
    })
    
    gradiantEyeColorTwo.on('init', instance => {
        elementCallbackInit(instance._color,"gradiantEyeColorTwo")
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"gradiantEyeColorTwo")
    })

    

    // Background Color

    const backgroundColor = Pickr.create({
        el: `.backgroundColor`,
        theme: 'classic', // or 'monolith', or 'nano'
        components: { ...component }
    });

    backgroundColor.on('init', instance => {
        elementCallbackInit(instance._color,"backgroundColor")
        
    }).on('changestop', (source,instance) => {
        elementCallback(instance._color,"backgroundColor")
    })
    
    
    
    function elementCallback(color, element) {
        let pickedColor = color.toHEXA().toString();
        document.querySelector(`.${element}-label`).value = pickedColor
        qrCodeStyle[element] = pickedColor
        document.querySelector(`.${element}-label`).innerHTML = pickedColor

        //Generate Qr Code with New Color
        qrGen();
    }
    function elementCallbackInit(color, element) {
        let pickedColor = color.toHEXA().toString();
        document.querySelector(`.${element}-label`).value = pickedColor
        document.querySelector(`.${element}-label`).innerHTML = pickedColor


        //Generate Qr Code with New Color
        qrGen();
    }

}

const tabs  = document.querySelectorAll('.tab')

tabs.forEach(tab => {
    tab.addEventListener("click", colorPicker)
})

colorPicker();

