if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
function ready(){
//adding food dishes to cart

var addtocartsButtons = document.getElementsByClassName("add-to-cart");
for(var i =0 ;i < addtocartsButtons.length ; i++){
    var button = addtocartsButtons[i]
    button.addEventListener('click', addIteminCartbtn)
    addtocartsButtons[i].addEventListener('click',()=>{
        cartNumber(addtocartsButtons[i])
        })
}

function onLoadcartNumber(){
    let cartnumber = localStorage.getItem("productNumber")
    cartnumber=parseInt(cartnumber)
    if(cartnumber!=null){
        document.querySelector('.cartnum span').textContent =cartnumber
    }
    if(isNaN(cartnumber))
        document.querySelector('.cartnum span').textContent = 0
}
function cartNumber(){
    let cartnumber = localStorage.getItem("productNumber")
    cartnumber=parseInt(cartnumber)
 

    if(cartnumber){
    localStorage.setItem("productNumber", cartnumber + 1)    
    document.querySelector('.cartnum span').textContent = cartnumber + 1 
    }

    else{
     localStorage.setItem("productNumber", 1)
     document.querySelector('.cartnum span').textContent = 1     
    }


}
function addIteminCartbtn(event){
    buttonClicked = event.target
        var shopItem = buttonClicked.parentElement
        var dishname = shopItem.getElementsByClassName('dish-name')[0].innerText
        var itemprice = shopItem.getElementsByClassName('price')[0].innerText
        var itemquantity = 0
        var imageSrc = shopItem.getElementsByClassName('item-image')[0].src
        product={dishname,itemprice,itemquantity,imageSrc}
        addIteminCart(product)
    addtobill()
    newtotalprice()
    quantitychange()

}


function addIteminCart(product) {
        let fooditem = localStorage.getItem("ProductsinCart")
        fooditem=JSON.parse(fooditem) 

        if(fooditem != null){
            if(fooditem[product.dishname] == undefined){
                fooditem={
                    ...fooditem,[product.dishname]:product
                }
            }
            fooditem[product.dishname].itemquantity+=1
        }              
        else{
            product.itemquantity=1
            fooditem={
                [product.dishname]:product
            }
        }



        
        localStorage.setItem("ProductsinCart",JSON.stringify(fooditem))
        
    
        

        

  }/*let fooditem = localStorage.getItem("productsinCart")
    fooditem = JSON.parse(fooditem)
    product ={dishname, itemprice, itemquantity,imageSrc}
    
    fooditem = {dishname, itemprice, imageSrc ,itemquantity}
    */


function displayincart(){
    let allcartitems = localStorage.getItem("ProductsinCart")
    allcartitems = JSON.parse(allcartitems)
    console.log(allcartitems)
    let productcontainer = document.querySelector(".All-cart-items")
    if(productcontainer && allcartitems){
        productcontainer.innerHTML=''
        Object.values(allcartitems).map(Item =>{
            productcontainer.innerHTML += `
            <div class="cart-item">
                    <div class="cart-it cart-column">
                        <img class="cart-item-image" src="${Item.imageSrc}" width="100" height="100">
                        <span class="cart-item-title">${Item.dishname}</span>
                        </div>
                        <span class="cart-price cart-column">${Item.itemprice}</span>
                        <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="${Item.itemquantity}">
                        <button class="btn btn-danger" type="button">✕</button>
                    </div>
            </div> 
            `
            })
        console.log("running")
    }

    }

onLoadcartNumber()
displayincart()
addtobill()
newtotalprice()
//add items in bill
function addtobill(){
    var billRow = document.createElement('div')
  //  billRow.classList.add('cart-row')
    var billItems = document.getElementsByClassName('All-bill-items')[0]
    let fooditeminstorage = localStorage.getItem("ProductsinCart")
    fooditeminstorage = JSON.parse(fooditeminstorage)
    let billcontainer = document.querySelector(".All-bill-items")
    if(billcontainer && fooditeminstorage){
        billcontainer.innerHTML=''
        Object.values(fooditeminstorage).map(Item =>{
            billcontainer.innerHTML += `
                        <div class="bill-item row main align-items-center">                            
                            <div class="item col">
                                <div class="bill-dish row">${Item.dishname}</div>
                            </div>
                            <div class="bill-price col" style="text-align:center;">${Item.itemprice}</div>
                        </div>`
})
}
}
//removing items from bill
function removefrombill(){
    var billitems = document.getElementsByClassName('All-bill-items')[0]
    while(billitems.hasChildNodes()){
        billitems.removeChild(billitems.firstChild)
    }

}

//removing food dishes from cart

var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
        button.addEventListener('click', removefrombill)

    }

var inputquantity = document.getElementsByClassName('cart-quantity-input')
    for (var i=0; i<inputquantity.length; i++){
        var input = inputquantity[i]
        input.addEventListener('change' , quantitychange)
    }
function quantitychange(event){
    var input = event.target
    if(isNaN(input.value) || input.value <= 0  ){
        input.value = 1
    }
    newtotalprice()
} 

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    newtotalprice()
}
function newtotalprice() {
    var cartItemContainer = document.getElementsByClassName('All-cart-items')[0]
    var cartitem = cartItemContainer.getElementsByClassName('cart-item')
    total = 0
    for (var i = 0; i < cartitem.length; i++) {
        var item = cartitem[i]
        var priceofitem = item.getElementsByClassName('cart-price')[0]
        var itemquantity = item.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceofitem.innerText.replace('$', ''))
        var quantity = itemquantity.value
        previoustotal = total
        total = total + (price * quantity)
        document.getElementsByClassName('bill-price')[i].innerText='$' +( total - previoustotal)
     }
     total = Math.round(total * 100) / 100
     document.getElementsByClassName('total-price')[0].innerText ='$' + total
}


// purchase
document.getElementsByClassName('purchase-btn')[0].addEventListener('click',purchase)
function purchase(){
    alert('Thank You for Your Order')
    var cartitems = document.getElementsByClassName('All-cart-items')[0]
    var billitems = document.getElementsByClassName('All-bill-items')[0]
    while(cartitems.hasChildNodes()){
        cartitems.removeChild(cartitems.firstChild)
        billitems.removeChild(billitems.firstChild)
    }
    newtotalprice() 
    window.localStorage.clear();

}
}