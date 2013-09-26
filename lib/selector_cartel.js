$(document).ready(function() {
   var sw=0;
    /*-----------------popups-----------------*/
$( "#ver_2" ).click(function() {
  $('.pop-up').fadeIn();
  $('#img_pop_gr').replaceWith('<img src="img/grande_2.jpg" alt="" id="img_pop_gr">');
  $('.imagen_pop-up').fadeIn();
});
$( "#ver_3" ).click(function() {
  $('.pop-up').fadeIn();
  $('#img_pop_gr').replaceWith('<img src="img/grande_3.jpg" alt="" id="img_pop_gr">');
  $('.imagen_pop-up').fadeIn();
});
$( "#ver_4" ).click(function() {
  $('.pop-up').fadeIn();
  $('#img_pop_gr').replaceWith('<img src="img/grande_4.jpg" alt="" id="img_pop_gr">');
  $('.imagen_pop-up').fadeIn();
});
$( "#ver_5" ).click(function() {
  $('.pop-up').fadeIn();
  $('#img_pop_gr').replaceWith('<img src="img/grande_5.jpg" alt="" id="img_pop_gr">');
  $('.imagen_pop-up').fadeIn();
});
$( "#cerrar" ).click(function() {
  $('.pop-up').fadeOut();
  $('.imagen_pop-up').fadeOut();
});
/*-----------------fin popups-----------------*/
/*----------selectores--------------------------*/
$('#cart_2').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff'});
    $('#cart_2').css({'border':'solid 2px #000'});
    $("#img_select").val("correo2");
});
$('#cart_3').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff'});
    $('#cart_3').css({'border':'solid 2px #000'});
    $("#img_select").val("correo3");
});
$('#cart_4').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff'});
    $('#cart_4').css({'border':'solid 2px #000'});
    $("#img_select").val("correo4");
});
$('#cart_5').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff'});
    $('#cart_5').css({'border':'solid 2px #000'});
    $("#img_select").val("correo5");
});
/*----------fin selectores--------------------------*/
});