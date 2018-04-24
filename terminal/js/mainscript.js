var toggleable = true;
var termisopen = false;

$('.hidden').hide();

$(".draggable").hide();
$("#Btn1").click(function(){


  $('.G').slideUp();
  $('#win1').slideDown(300);

})

$("#term1").click(function(){
  $('#win2').slideDown(300);
  $('#win22').slideDown(300);
})

$("#term2").click(function(){
  $('#win3').slideDown(300);
  $('#win32').slideDown(300);
})

$("#term3").click(function(){
  $('#win4').slideDown(300);

})

$("#exit1").click(function(){
  $(".exit").parent().slideUp(300);
  $(".G").fadeIn(300);
})

$("#exit2").click(function(){
  $("#win2").slideUp(300);
});

$("#exit3").click(function(){
  $("#win3").slideUp(300);
});

$("#exit4").click(function(){
  $("#win4").slideUp(300);
});


$("#exit32").click(function(){
  $("#win32").slideUp(300);
});

$("#exit22").click(function(){
  $("#win22").slideUp(300);
});

$(function() {
    $( ".draggable" ).draggable();
});
