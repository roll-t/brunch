
const list_product=document.querySelectorAll(".list-product .product-items ")

list_product.forEach(items=>{
    const img=items.querySelector(".top-product img:nth-child(2)")
    img.addEventListener("click",e=>{
        console.log(e.target)
    })
})
