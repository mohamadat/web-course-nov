console.log("hihere");

var signupbtn = document.getElementById("signupatwa");


var themodal = document.getElementById("atwa-modal");


//  themodal.style.display = "none";

function hideModal() {
  themodal.style.display = "none";
}

hideModal();

function myfunction() {
  console.log("HOI MENSEN!!!");
  themodal.style.position = "absolute";
  themodal.style.display = "block";
console.log(document.getElementsByTagName("body")[0]);


}
document.getElementsByTagName("body")[0].addEventListener(
  'click', hideModal
);

signupbtn.addEventListener('click', myfunction);
