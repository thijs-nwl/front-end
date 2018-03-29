window.onload = function(){
  var bg = document.getElementsByClassName('Phead')[0];
  var prod = document.getElementsByClassName('bProduct')[0];
  prod.style.zIndex = '2';
  bg.style.zIndex = '1';
}


function next() {
  var vw = window.innerWidth;
  if(vw >= 425){
      var wrapper = document.getElementById('x');
      var flipper = document.getElementById('flipper');
      var front = document.getElementById('front');
      var back = document.getElementById('back');

      wrapper.className = "wrapper";
      flipper.className = "flipper";
      front.className = "front";
      back.className = "back";
      flip();
    } else {
    var trgt2 = document.getElementById('trgt2');
    trgt2.setAttribute('for', 'toggle');

    var tog = document.getElementById('toggle');
    var bg = document.getElementsByClassName('Phead')[0];
    var prod = document.getElementsByClassName('bProduct')[0];
    tog.onclick = function (){
      if(tog.checked == true){
        bg.style.zIndex = '2';
        prod.style.zIndex = "1";
      } else {
        setTimeout(function () {
          bg.style.zIndex = '1';
          prod.style.zIndex = '2';
        }, 500)
      }
    }
  }
}



























function flip() {
  var container = document.getElementById('Prcontainer');
  if(flipper.style.WebkitTransform == "rotateY(180deg)"||flipper.style.msTransform == "rotateY(180deg)"||flipper.style.transform == "rotateY(180deg)"){
    flipper.style.WebkitTransform = "rotateY(0deg)";
    flipper.style.msTransform = "rotateY(0deg)";
    flipper.style.transform = "rotateY(0deg)";
    container.style.display = 'flex';
    Navmenu.style.display = 'flex'
  } else{
    flipper.style.WebkitTransform = "rotateY(180deg)";
    flipper.style.msTransform = "rotateY(180deg)";
    flipper.style.transform = "rotateY(180deg)";
    setTimeout(function(){
      container.style.display = "none";
    }, 500);
  }
}
