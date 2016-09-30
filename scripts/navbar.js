$(window).scroll(function(e){ 
  var $el = $('#navcontainer'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 200 && !isPositionFixed){ 
    $('#navcontainer').css({'position': 'fixed', 'top': '0px'}); 
  }
  if ($(this).scrollTop() < 200 && isPositionFixed)
  {
    $('#navcontainer').css({'position': 'static', 'top': '0px'}); 
  } 
});