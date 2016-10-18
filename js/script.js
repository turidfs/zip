$(document).ready(function() {
  $('.dropdown-parent').on('click', function() {
$(this).children("ul").toggleClass("isHidden");
    console.log($(this).children("ul"));
  });

  $('#burger-button').on('click', function() {
$("#main-nav").toggleClass("isHidden");
  });


});
