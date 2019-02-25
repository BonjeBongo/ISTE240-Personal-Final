/* JavaScript for Pizza Ordering Form */
function validateComment() {
    var valid = true;
    var formName = 'Comment Form';
    var name = document.forms[formName]['name'];
    var comment = document.forms[formName]['comment'];
    var safeName = /^[A-Z ]+$/i;
    var safeComment = /^[A-Z\d '",.!?()#]+$/i;

    if (!name.value.match(safeName)){
        valid = false;
        name.className += " is-invalid";
        document.getElementById('nameValid').style.display = "block";
    }
    else{
        name.className = "form-control";
        document.getElementById('nameValid').style.display = "none";
    }
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
