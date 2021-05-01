if (document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready)
}
 else {
  ready();
}


function ready() {

  var removeCartItemBtns = document.getElementsByClassName("fa-trash");
  for (var i = 0; i<removeCartItemBtns.length; i++){
    removeCartItemBtns[i].addEventListener('click',removeCartItem);
  
  }


  var addBagBtns = document.getElementsByClassName("add-bag-btn");


for (var index = 0; index < addBagBtns.length; index++) {
  addBagBtns[index].addEventListener('click', addBagBtnsClicked);
}


}







function removeCartItem(event){

  var trashClicked = event.target;
  trashClicked.parentElement.remove();

  
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

var allTitles = document.getElementsByClassName("cart-items")[0].getElementsByClassName("cart-row-title");


// == for comparison
// === for comparison && data type

if (allTitles.length > 0) {
  for(var i =0; i<allTitles.length ; i++){
    if(allTitles[i].innerHTML == title){
  // Code
  alert("Deze item is al toegevoegd");
  
    }
    else{
      addCARTrow(title, price);
      // git
    }
}
  

}else{

  addCARTrow(title, price);


}
console.log(allTitles);



}




function addCARTrow(title, price){  
//code
// console.log(title);
var cartRow = document.createElement('div');
cartRow.classList.add('cart-row');
cartRow.innerHTML = `
<li>
<span class="cart-row-title">${title}</span>

 , ${price}
<input type="number" value="1">
<i class="fa fa-trash" aria-hidden="true"></i>


</li>`;

var cartItems = document.getElementsByClassName('cart-items');


//1- add new Element
cartItems[0].append(cartRow);


//2- The add eventListner
cartRow.getElementsByClassName("fa-trash")[0].addEventListener('click',removeCartItem);

}

// addProductToCart("dupmy1", "22" , "7761");











//for each code
// var fruits = ["apple", "orange", "cherry"];

// fruits.forEach(dosomthing);

// function dosomthing(item, index){
//   console.log("88888",item, index);
// }










