const list_product=document.querySelectorAll(".body-2.body-2-product .list-product.main-list-product .product-items ")
console.log(list_product)
list_product.forEach(items=>{
    const img=items.querySelector(".top-product img:nth-child(2)")
    img.addEventListener("click",e=>{
        const a=document.createElement("a")
        a.href="./product-details.php";
        a.click();
    })
})