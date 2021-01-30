console.log("hihere");

var signupbtn = document.getElementById("signupatwa");


var themodal = document.getElementById("atwa-modal");

signupbtn.addEventListener('click', myfunction);

 themodal.style.display = "none";



function myfunction() {
  console.log("HOI MENSEN!!!");
  themodal.style.position = "absolute";
  themodal.style.display = "block";

}