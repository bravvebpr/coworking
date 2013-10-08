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
$( "#cerrar, .pop-up" ).click(function() {
  $('.pop-up').fadeOut();
  $('.imagen_pop-up').fadeOut();
});
/*-----------------fin popups-----------------*/
/*----------selectores--------------------------*/
$('#cart_2').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff', 'box-shadow':'none'});
    $('#cart_2').css({'box-shadow': '1px 1px 15px #17A8D3', 'border': 'solid 2px #17A8D3'});
    $("#img_select").val("correo2");
});
$('#cart_3').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff', 'box-shadow':'none'});
    $('#cart_3').css({'box-shadow': '1px 1px 15px #17A8D3', 'border': 'solid 2px #17A8D3'});
    $("#img_select").val("correo3");
});
$('#cart_4').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff', 'box-shadow':'none'});
    $('#cart_4').css({'box-shadow': '1px 1px 15px #17A8D3', 'border': 'solid 2px #17A8D3'});
    $("#img_select").val("correo4");
});
$('#cart_5').click(function() {
    $('.miniaturas img').css({'border':'solid 2px #fff', 'box-shadow':'none'});
    $('#cart_5').css({'box-shadow': '1px 1px 15px #17A8D3', 'border': 'solid 2px #17A8D3'});
    $("#img_select").val("correo5");
});
/*----------fin selectores--------------------------*/
});
