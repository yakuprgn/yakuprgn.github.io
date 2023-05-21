$('.text-fadeIn').find('*').hide();
$('.text-fadeIn').find('*').fadeIn(2000);

$('[data-fancybox]').fancybox({
    
    buttons : [
      'close'
    ],
    wheel : false,
    transitionEffect: "slide",
     thumbs          : false,
    hash            : false,
    loop            : true,
    keyboard        : true,
    toolbar         : false,
    animationEffect : false,
    arrows          : true,
    clickContent    : false
  });

  
