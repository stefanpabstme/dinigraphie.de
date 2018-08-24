function toggleNav () {
  var navbar = document.getElementById("nav_overlay");

  if(navbar.classList.contains('hide')) {
    navbar.classList.remove('hide');
    navbar.classList.add('show');
  } else {
    navbar.classList.remove('show');
    navbar.classList.add('hide');
  }
}
