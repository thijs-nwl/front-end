
//center div
function centerTXT(){
  var Con = document.getElementsByClassName('container')[0],
      totH = window.innerHeight/2,
      totW = window.innerWidth/2,
      ConInfo = Con.getBoundingClientRect(),
      conH = ConInfo.height/2,
      conW = ConInfo.width/2,
      numH = totH - conH + "px",
      numW = totW - conW + "px";
  Con.style.top = numH;
  Con.style.left = numW
}

function centerARROW(){
  var Con = document.getElementById('arrow'),
      totW = window.innerWidth/2,
      ConInfo = Con.getBoundingClientRect(),
      conW = ConInfo.width/2,
      numW = totW - conW + "px";
  Con.style.left = numW;
}
