var logo = document.getElementById('logoImg')
var con = document.getElementById('con');
window.addEventListener('scroll', function(){
  para(this);

})

function para (win){
  wScroll = win.scrollY;
  logo.style.transform = "translate(0px," + wScroll/7 +"%)";
}
