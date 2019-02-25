//redirect script
var count = 10;
var redirect = "index.php?page=survey";

function countDown(){
  var timer = document.getElementById("timer");
  if(count > 0){
    count--;
    timer.innerHTML = "You will be redirected back to the form in "+count+" seconds.";
    setTimeout("countDown()", 1000);
  }else{
    window.location.href = redirect;
  }
}