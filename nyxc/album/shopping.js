if (document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready)
}
 else {
  ready();
}


function ready() {



}


var addBagBtns = document.getElementsByClassName("add-bag-btn");


for (var index = 0; index < addBagBtns.length; index++) {
  addBagBtns[index].addEventListener('click', addBagBtnsClicked);
  
}



function addBagBtnsClicked(event){

  var button = event.target;

  var title = button.parentElement.parentElement.getElementsByClassName('shop-item-title')[0].innerHTML;
  var price = button.parentElement.parentElement.getElementsByClassName('shop-item-price')[0].innerHTML;
  // var qty
  console.log("atwa");

console.log(title);
  addProductToCart(title , price , "1");

}



function addProductToCart(title, price, qty){
//code
// console.log(title);
var cartRow = document.createElement('div');
cartRow.classList.add('cart-row');
cartRow.innerHTML = `<h1> ${title} , ${price} , ${qty} </h1>`;



var cartItems = document.getElementsByClassName('cart-items');

console.log(cartItems);


cartItems[0].append(cartRow);



}


addProductToCart("dupmy1", "22" , "1");











//for each code
// var fruits = ["apple", "orange", "cherry"];

// fruits.forEach(dosomthing);

// function dosomthing(item, index){
//   console.log("88888",item, index);
// }










