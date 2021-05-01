var button = document.getElementById('btn1');
button.addEventListener('click', doSomthing);

var image = document.getElementById('img1');

const heading = document.getElementById("heading");



var state = false;

// let block scoop
{


}


// ES6
// var
// let
// const
// arrow function
// for of

var fun1 = function(x, y){
  return x + y;
} 

var arr = ["sam", "7am", "etc"];


for(user of arr){
  console.log(user);
}

for (let index = 0; index < arr.length; index++) {
  console.log(arr[index]);
}


const fun2 = (x, y) => x + y;
const fun3 = (z) => z;

console.log(fun1(88,96));

fun2(5,6);

function doSomthing(){
  // heading = 5;
  // heading.innerHTML = "hacked!!!";
  
if (state == true) {
  img1.src  = ("/Untitled.png");
   state = false;
  console.log("1");
}else{
  img1.src  = ("/lamp2.png");
  state = true;
  console.log("2");
}

}




