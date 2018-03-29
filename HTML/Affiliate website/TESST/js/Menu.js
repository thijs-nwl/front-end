function flip() {
  var container = document.getElementById('Prcontainer');

  if(flipper.style.WebkitTransform == "rotateY(180deg)"||flipper.style.msTransform == "rotateY(180deg)"||flipper.style.transform == "rotateY(180deg)"){
    flipper.style.WebkitTransform = "rotateY(0deg)";
    flipper.style.msTransform = "rotateY(0deg)";
    flipper.style.transform = "rotateY(0deg)";
    container.style.display = 'flex';
    // mod.style.display = "block";
  } else{
    flipper.style.WebkitTransform = "rotateY(180deg)";
    flipper.style.msTransform = "rotateY(180deg)";
    flipper.style.transform = "rotateY(180deg)";
    setTimeout(function(){
      container.style.display = "none";
    }, 500);
  }
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
  }
}

function test(){
  var modal = document.getElementById('trgt3');
  var rect = modal.getBoundingClientRect();

  console.log(rect);
}
