//scroll
let scrole = document.getElementById("scrole");
window.onscroll = function () {
  if (scrollY > 300) {
    scrole.style.display = "block";
  } else { 
    scrole.style.display = "none";
  }
};
scrole.onclick = function () {
  scroll({
    let: 0,
    top: 0,
    behavior: "smooth",
  });
};
//cart actin  open and close
function cartss() {
  let cart = document.getElementById("cart");
  cart.classList.remove("hidennn");
}
document.getElementById("close_cart");
close_cart.onclick = function () {
  let cart = document.getElementById("cart");
  cart.classList.add("hidennn");
};
//delete item from cart
if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}
function ready() {
  var remove_item = document.getElementsByClassName("cart_remove");
  for (var i = 0; i < remove_item.length; i++) {
    var button = remove_item[i];
    button.addEventListener("click", remove_cart_item);
  }
  //===============>
  //quantity change
  var quantityInput = document.getElementsByClassName("cart_quantity");
  for (var i = 0; i < quantityInput.length; i++) {
    var input = quantityInput[i];

    input.addEventListener("change", quantityChange);
  }
  //add  t cart
  var add_cart = document.getElementsByClassName("add-cart");
  for (var i = 0; i < add_cart.length; i++) {
    var button = add_cart[i];
    button.addEventListener("click", add_cart_click);
  }
}
function remove_cart_item(event) {
  var button_clicked = event.target;
  button_clicked.parentElement.remove();
  //================>
  update_total();
}
//quantityChange
function quantityChange(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  update_total();
  //////////>
  updateCartIcon();
}
//add_cart_click
function add_cart_click(event) {
  var button = event.target;
  var shopProduct = button.parentElement;
  var title = shopProduct.getElementsByClassName("product_title")[0].innerText;
  var price = shopProduct.getElementsByClassName("price")[0].innerText;
  var productImg = shopProduct.getElementsByClassName("product_img")[0].src;
  add_product_to_cart(title, price, productImg);
  var jcd = document.getElementById("nnnn");
  jcd.classList.remove("hideee");

  update_total();
  ///////////>
  updateCartIcon();
}
//add_product_to_cart
function add_product_to_cart(title, price, productImg) {
  var cartShopBox = document.createElement("div");
  ////////////////////////////////////////////////////////xxxxxxxx
  cartShopBox.classList.add("cart_box");
  var cartItem = document.getElementsByClassName("cart_content")[0];
  var cartItemsNames = cartItem.getElementsByClassName("cart_product_title");
  for (var i = 0; i < cartItemsNames.length; i++) {
    if (cartItemsNames[i].innerText == title) {
      alert("you already added a product to cart");
      return;
    }
  }

  var cartBoxeContent = `
          <img class="cart_img" src="${productImg}" alt="" />
          <div class="detail_box">
            <div class="cart_product_title">${title}</div>
            <div class="cart_price">${price}</div>
            <input type="number" value="1" class="cart_quantity" />
          </div>
          <i class="fa-solid fa-trash cart_remove"></i>
        ;`;
  cartShopBox.innerHTML = cartBoxeContent;

  cartItem.append(cartShopBox);
  cartShopBox
    .getElementsByClassName("cart_remove")[0]
    .addEventListener("click", remove_cart_item);
  cartShopBox
    .getElementsByClassName("cart_quantity")[0]
    .addEventListener("change", quantityChange);
  /////////>>>>>>>>>>
  updateCartIcon();
}
//update total
function update_total() {
  var cart_content = document.getElementsByClassName("cart_content")[0];
  var cartBoxes = cart_content.getElementsByClassName("cart_box");
  var total = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    console.log("dshvksd", cartBoxes.length);
    //////////////////////////////////////////////////////////////////////////////////////////////////
    var jcd = document.getElementById("nnnn");
    jcd.innerHTML = cartBoxes.length;

    var cart_box = cartBoxes[i];
    var priceElement = cart_box.getElementsByClassName("cart_price")[0];
    var quantityElement = cart_box.getElementsByClassName("cart_quantity")[0];
    var price = parseFloat(priceElement.innerText.replace("$", ""));
    var quantity = quantityElement.value;
    total = total + price * quantity;
    //if price contain some allot of money
    total = Math.round(total * 100) / 100;
  }
  document.getElementsByClassName("total_price")[0].innerText = "$" + total;
}
//code quantity in cart item
function updateCartIcon() {
  var cartBoxes = document.getElementsByClassName("cart_box");
  var quantity = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    var cart_box = cartBoxes[i];
    var quantityElement = cart_box.getElementsByClassName("cart_quantity")[0];
    quantity += parseInt(quantityElement.value);
  }
  var cartIcon = document.querySelector("#cart_icon");
  cartIcon.setAttribute("data-quantity", quantity);
}
