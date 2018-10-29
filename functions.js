//Navigation
function toggleNav () {
  var navbar = document.getElementById("menu-main");
  var navButton = document.getElementById('toggleNav');

  if(navbar.classList.contains('hide')) {
    navbar.classList.remove('hide');
    navbar.classList.add('show');
    navButton.classList.add('rotated')
  } else {
    navbar.classList.remove('show');
    navbar.classList.add('hide');
    navButton.classList.remove('rotated')
  }
}

$(document).ready(function() {
  //Document ready halt :D
  toggleNav();
});

$(window).on("load", function() {
    //Startet erst nachdem alle Bilder etc geladen sind
});
