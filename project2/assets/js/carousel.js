var imageSources = ["m1.jpg", "m2.jpg", "m3.jpg", "m4.jpg", "m5.jpg"];

document.getElementById("headder").style.backgroundImage = "url('assets/images/main/"+imageSources[4]+"')";

var index = 0;
setInterval (function(){
  if (index === imageSources.length) {
    index = 0;
  }
  document.getElementById("headder").style.backgroundImage = "url('assets/images/main/"+imageSources[index]+"')";
  document.getElementById("headder").style.WebkitTransition = "all 2s ease-out";
  document.getElementById("headder").style.transition = "all 2s ease-out";
  index++;
} , 6000);
