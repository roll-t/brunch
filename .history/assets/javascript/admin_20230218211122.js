
const show_items=document.querySelectorAll(".menu-items p")

show_items.forEach(items=>{
    items.addEventListener("click",e=>{
        items.parentElement.querySelector(".category").classList.toggle("active")
    })
})

const list_category=document.querySelectorAll(".body-add-category")

const btn_1=document.querySelectorAll(".menu-items .category-items")[0]
const btn_2=document.querySelectorAll(".menu-items .category-items")[1]
const btn_3=document.querySelectorAll(".menu-items .category-items")[2]
const btn_4=document.querySelectorAll(".menu-items .category-items")[3]


btn_1.addEventListener("click",e=>{
    list_category.forEach(items=>{
        items.classList.remove("active")
    })
    list_category[0].classList.add("active")
})

btn_2.addEventListener("click",e=>{
    list_category.forEach(items=>{
        items.classList.remove("active")
    })
    list_category[1].classList.add("active")
})

btn_3.addEventListener("click",e=>{
    list_category.forEach(items=>{
        items.classList.remove("active")
    })
    list_category[2].classList.add("active")
})

btn_4.addEventListener("click",e=>{
    list_category.forEach(items=>{
        items.classList.remove("active")
    })
    list_category[3].classList.add("active")
})