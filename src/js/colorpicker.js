import Pickr from '@simonwep/pickr';
import '@simonwep/pickr/dist/themes/classic.min.css'; 

// Simple example, see optional options for more configuration.

let colorInput = ["color-picker","color-picker1"]

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

const elemenet = Pickr.create({
    el: `.color-picker`,
    theme: 'classic', // or 'monolith', or 'nano'
    components: { ...component }
});
const elemenet1 = Pickr.create({
    el: `.color-picker1`,
    theme: 'classic', // or 'monolith', or 'nano'
    components: { ...component}
});
const elemenet2 = Pickr.create({
    el: `.color-picker2`,
    theme: 'classic', // or 'monolith', or 'nano'
    components: { ...component }
});
const elemenet3 = Pickr.create({
    el: `.color-picker3`,
    theme: 'classic', // or 'monolith', or 'nano'
    components: { ...component}
});
const elemenet4 = Pickr.create({
    el: `.color-picker4`,
    theme: 'classic', // or 'monolith', or 'nano'
    components: { ...component}
});

elemenet.on('init', (color) => {
    console.log('Event: "init"', instance);
}).on('change', elementCallback(color,"color-picker"))

elemenet1.on('init', (color) => {
    console.log('Event: "init"', instance);
}).on('change', elementCallback(color,"color-picker1"))

elemenet2.on('init', (color) => {
    console.log('Event: "init"', instance);
}).on('change', elementCallback(color,"color-picker2"))

elemenet3.on('init', (color) => {
    console.log('Event: "init"', instance);
}).on('change', elementCallback(color,"color-picker3"))

elemenet4.on('init', (color) => {
    console.log('Event: "init"', instance);
}).on('change', elementCallback(color,"color-picker4"))


function elementCallback(color, element) {
    let pickedColor = color.toHEXA().toString();
    document.querySelector(`.${element}-label`).innerHTML = pickedColor
}


