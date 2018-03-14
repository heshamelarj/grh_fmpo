/*
( function( $ ) {
$( document ).ready(function() {
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});
});
} )( jQuery );
*/

/*
( function( $ ) {
  $( document ).ready(function() {
    $('#cssmenu > ul > li > a').click(function() {
      $('#cssmenu li').removeClass('active');
      $(this).closest('li').addClass('active');
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        $(this).closest('li').removeClass('active');
        checkElement.slideUp('normal');
      }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#cssmenu ul ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
      }
      if($(this).closest('li').find('ul').children().length == 0) {
        return true;
      } else {
        return false;
      }
    });
  });
} )( jQuery );*/

$(document).ready(function(){

    if($('#chartContainer1').hasClass('col-lg-6').css({"width":"600","height":"400"}));
  if($('#chartContainer1').hasClass('col-md-6').css({"width":"400","height":"200"}));
  if($('#chartContainer1').hasClass('col-sm-6').css({"width":"300","height":"200"}));
  if($('#chartContainer1').hasClass('col-xs-6').css({"width":"200","height":"100"}));

  if($('#chartContainer2').hasClass('col-lg-6').css({"width":"600","height":"400"}));
  if($('#chartContainer2').hasClass('col-md-6').css({"width":"400","height":"200"}));
  if($('#chartContainer2').hasClass('col-sm-6').css({"width":"300","height":"200"}));
  if($('#chartContainer2').hasClass('col-xs-6').css({"width":"200","height":"100"}));



});
