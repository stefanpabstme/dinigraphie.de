//set height of entry image in proportion to screen height
var w_height = jQuery(window).height();
var w_width = jQuery(window).width();
var bg_height = w_height * 0.7;
var bg_height_mobile = w_height * 0.80;

if (w_height <= w_width) {
  jQuery( '#entry-image' ).css('height', bg_height);
}

if (w_height > w_width) {
  jQuery( '#entry-image' ).css('height', bg_height_mobile);
}


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
  if (w_height > w_width) {
    toggleNav();
  }
});


$(window).on("load", function() {
    //Startet erst nachdem alle Bilder etc geladen sind
});
