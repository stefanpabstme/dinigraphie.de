//Navigation
function toggleNav () {
  var navbar = document.getElementById("nav_overlay");
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
  //Comment
});

//ninjaforms ready function
jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
  //Start typed.js by www.mattboldt.com
  var options = {
    strings: ["<i>First</i> sentence.", "&amp; a second sentence."],
    typeSpeed: 30,
    backSpeed: 0,
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: false
  }

  var typed = new Typed("textarea.ninja-forms-field", options);
});
