
import { dataList } from "./qr-module"

const tabs = document.querySelectorAll(".tab")
const tabItem = document.querySelectorAll(".tab-item")
const forms = document.querySelectorAll(".qrForm")

tabs.forEach((items,index) => {
    items.addEventListener("click", () => {
        tabItem[index].classList.remove("d-none");
        items.classList.add("show")
        forms.forEach(form => {
            form.reset()
        })
        updateAll(dataList);
        
        for (let i = 0; i < tabItem.length; i++) {
            if(i == index) {
                continue;
            } else {
                tabs[i].classList.remove("show")
                tabItem[i].classList.add("d-none")
            }    
        }
    })
})


function updateAll(datalist) {
    datalist.forEach(data => {
        dataUpdate(data);
    })
}
function dataUpdate(object) {
    object.update({
        data : "hello world",
    })
}

