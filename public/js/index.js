document.addEventListener('DOMContentLoaded', function() {
  document.getElementById("searchBox").addEventListener("click", function(event) {
    arr = this.className.split(" ");
    if (arr.indexOf("active") == -1) {
      this.className += " active";
    }
    this.getElementsByTagName("INPUT")[0].focus();
  });

  document.getElementById("searchBox").getElementsByClassName("search")[0].addEventListener("click", function(event) {
    var parent = this.parentElement; //searchBox element;
    var arr = parent.className.split(" ");
    if (arr.indexOf("active") != -1) {
      var input = parent.getElementsByTagName("INPUT")[0];
      input.value = "";
      var classList = parent.className;
      classList = classList.replace(/\bactive\b/g, "").trim();
      parent.className = classList;
      event.preventDefault();
      event.stopPropagation();
      event.stopImmediatePropagation();
    }
  });
}, false);
var rellax = new Rellax('.rellax', {
    round: true
});

function toogle(){
  var blur = document.getElementById('blur');
  blur.classList.toogle('active')
}