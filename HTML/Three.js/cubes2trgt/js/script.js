
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
// 
// function createElem(el, Elid, txt, txtid){
//   var elem = document.createElement(el);
//   elem.id = Elid;
//
//   var textEL = document.createElement(h1);
//   textEL.id = txtid;
//   var txtnode = document.createTextNode(txt);
//   elem.appendChild(textEL);
//
//   var body = document.querySelector('body');
//   body.appendChild(elem)
// }
