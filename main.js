

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */

function myFunction() {
  var element = document.getElementById("database")
  element.classList.add("show");
}

function myFunction1() {
        var element = document.getElementById("database")
  element.classList.remove("show");
      }

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        var element = document.getElementById("database")
  element.classList.remove("show");
    }
};

function myFunction2show() {
  document.getElementById("left_drop").style.visibility="visible"
}

function myFunction2hide() {
  document.getElementById("left_drop").style.visibility="hidden"
}


function Squareshow() {
  document.getElementById("bottom_right_drop_square").style.visibility="visible"
}

function Squarehide() {
  document.getElementById("bottom_right_drop_square").style.visibility="hidden"
}

function Usershow() {
  document.getElementById("bottom_right_drop_user").style.visibility="visible"
}

function Userhide() {
  document.getElementById("bottom_right_drop_user").style.visibility="hidden"
}

function Videoshow() {
  document.getElementById("bottom_right_drop_video").style.visibility="visible"
}

function Videohide() {
  document.getElementById("bottom_right_drop_video").style.visibility="hidden"
}