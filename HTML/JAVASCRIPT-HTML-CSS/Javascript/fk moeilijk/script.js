// function myFunction() {
//   var newItem = document.createElement("DIV");    //create elem
//   var textnode = document.createTextNode("insluiter");  //create txt
//   newItem.appendChild(textnode);                   // add txt to elem
//
//   var list = document.getElementById("trgt");    //get target
//   list.insertBefore(newItem, list.childNodes[0]); //add to trgt newItem with pos
// }

// var vw = window.innerWidth;

// if(vw >= 900){
//   console.log("groter")
//
// } else {
//   console.log('kleiner');
// }


function next() {
  var vw = window.innerWidth;

  if(vw >= 900){
    console.log('groter test');
    var flipper = document.getElementById('flipper');
    toggle();
  }
  else{
    console.log('kleiner test');
  }
}

function toggle() {
  if(flipper.style.WebkitTransform == "rotateY(180deg)"||flipper.style.msTransform == "rotateY(180deg)"||flipper.style.transform == "rotateY(180deg)"){
    flipper.style.WebkitTransform = "rotateY(0deg)";
    flipper.style.msTransform = "rotateY(0deg)";
    flipper.style.transform = "rotateY(0deg)";
  } else{
    flipper.style.WebkitTransform = "rotateY(180deg)";
    flipper.style.msTransform = "rotateY(180deg)";
    flipper.style.transform = "rotateY(180deg)";
  }
}
