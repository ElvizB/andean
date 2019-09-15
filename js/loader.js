// loading website
window.onload = function (){
  $('#mdb-preloader').fadeOut();
  $('body').removeClass('oculto');
}

// dropdown
$("#open").click(function() {
   $(this).children("#prueba").slideToggle();
});
