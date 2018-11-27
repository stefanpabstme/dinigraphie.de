//set height of entry image in proportion to screen height
var w_height = jQuery(window).height();
var w_width = jQuery(window).width();
var bg_height = w_height * 0.8;
var bg_height_mobile = w_height * 0.60;

if (w_height <= w_width) {
  jQuery( '#entry-image' ).css('height', bg_height);
}

if (w_height > w_width) {
  jQuery( '#entry-image' ).css('height', bg_height_mobile);
}


//Navigation
//toggle navigation function
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

if (w_width < "768") {
  toggleNav();
}
if (w_width >= "768") {
  //center up desktop navigation
  var menu_width = $(".menu-main-container").width();
  var leftMar = menu_width * 0.5 * (-1);
  document.querySelector(".menu-main-container").id = 'menu-main-container';
  $("#menu-main-container").css({ marginLeft : leftMar });
}


$(document).ready(function() {

});


$(window).on("load", function() {
    //Startet erst nachdem alle Bilder etc geladen sind
});
