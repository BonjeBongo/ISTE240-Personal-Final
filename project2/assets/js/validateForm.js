// Bootstrap Validation
// (function() {
//     'use strict';
//     window.addEventListener('load', function() {
//       // Set max date to the date document is accessed
//       document.getElementById("dateAttended").setAttribute("max", today);
//       // Fetch all the forms we want to apply custom Bootstrap validation styles to
//       var forms = document.getElementsByClassName('needs-validation');
//       // Loop over them and prevent submission
//       var validation = Array.prototype.filter.call(forms, function(form) {
//         form.addEventListener('submit', function(event) {
//           if (form.checkValidity() === false) {
//             event.preventDefault(); // prevent browser validation
//             event.stopPropagation(); // prevent post
//           }
//           form.classList.add('was-validated');
//         }, false);
//       });
//     }, false);
// })();

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10){
  dd='0'+dd
}
if(mm<10){
  mm='0'+mm
}
today = yyyy+'-'+mm+'-'+dd;

function validateForm() {
  var valid = true;
  var formName = 'Visitor Form';
  var fname = document.forms[formName]['fname'];
  console.log(fname);
  var lname = document.forms[formName]['lname'];
  console.log(lname);
  var numOPeople = document.forms[formName]['numOfPeople'];
  console.log(numOPeople);
  var date = document.forms[formName]['dateAttended'];
  console.log(date);
  var favLoc = document.forms[formName]['favoriteLocation'];
  console.log(favLoc);
  var visitR = document.forms[formName]['visitRating'];
  console.log(visitR);
  var websiteR = document.forms[formName]['websiteRating'];
  console.log(websiteR);
  var comment = document.forms[formName]['comment'];
  console.log(comment);

  debugger;

  var safeName = /^[A-Z]+$/i;
  var safeLoc = /^[A-Z ]+$/i;
  var safeComment = /^[A-Z\d \'",.!?()#]+$/i;
  var safeNum = /^[\d-]+$/;

  //check first name
  if (!fname.value.match(safeName)){
    valid = false;
    fname.className += " is-invalid";
    document.getElementById('fnameValid').style.display = "block";
    console.log('fname aint good');
  }
  else{
    fname.className = "form-control";
    document.getElementById('fnameValid').style.display = "none";
    console.log('fname good');
  }

  //check last name
  if (!lname.value.match(safeName)){
    valid = false;
    lname.className += " is-invalid";
    document.getElementById('lnameValid').style.display = "block";
    console.log('lname aint good');
  }
  else{
    lname.className = "form-control";
    document.getElementById('lnameValid').style.display = "none";
    console.log('lname good');
  }

  //check num of people
  if (!numOPeople.value.match(safeNum)){
    valid = false;
    numOPeople.className += " is-invalid";
    document.getElementById('peopleValid').style.display = "block";
  }
  else{
    numOPeople.className = "form-control";
    document.getElementById('peopleValid').style.display = "none";
  }

  //check num of people
  if (!date.value.match(safeNum)){
    valid = false;
    date.className += " is-invalid";
    document.getElementById('dateValid').style.display = "block";
  }
  else{
    date.className = "form-control";
    document.getElementById('dateValid').style.display = "none";
  }

  //check location
  if (!favLoc.value.match(safeLoc)){
    valid = false;
    favLoc.className += " is-invalid";
    document.getElementById('locValid').style.display = "block";
  }
  else{
    favLoc.className = "form-control";
    document.getElementById('locValid').style.display = "none";
  }

  //check visit rating
  if (!visitR.value.match(safeNum)){
    valid = false;
    visitR.className += " is-invalid";
  }
  else{
    visitR.className = "form-control slider";
  }

  //check website rating
  if (!websiteR.value.match(safeNum)){
    valid = false;
    websiteR.className += " is-invalid";
  }
  else{
    websiteR.className = "form-control slider";
  }

  //check comment
  if (!comment.value.match(safeComment)){
    valid = false;
    comment.className += " is-invalid";
    document.getElementById('commentValid').style.display = "block";
  }
  else{
    comment.className = "form-control";
    document.getElementById('commentValid').style.display = "none";
  }

  return valid;
}

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Set max date to the date document is accessed
    document.getElementById('dateAttended').setAttribute("max", today);
  }, false);
})();
