var image_validation = false;
var valid = true;
$(document).ready(function(e){
  setTimeout(function(){ // allowing 3 secs to fade out loader
  $('.page-loader').fadeOut(1000);
  },2000);
});

$(window).on('scroll',function () {
    // console.log($(window).scrollTop())
    if ($(window).scrollTop() > 63) {
      // $('.arrow-bottom').removeClass('hide');
      $('.arrow-bottom').addClass('show-arrow');
      // $('.arrow-bottom').fadeIn(1000);
    }
    if ($(window).scrollTop() < 64) {
      $('.arrow-bottom').removeClass('show-arrow');
      // $('.arrow-bottom').addClass('hide');
      // $('.arrow-bottom').fadOut(1000);
    }
  });


$('.arrow-bottom').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 50);
});

$('.navbar-toggler').on('click',()=>{
  if(!$('.navbar-toggler').hasClass('is-active'))
  {
    $('.navbar-toggler').addClass('is-active');
  } else 
  {
    $('.navbar-toggler').removeClass('is-active');
  }
  
  if(!$('.navbar-row').hasClass('mobile-nav'))
  {
    $('.navbar-row').addClass('mobile-nav');
  } else 
  {
    $('.navbar-row').removeClass('mobile-nav');
  }
})


// $(function(){
// 	$("#wizard").steps({
//         headerTag: "h4",
//         bodyTag: "section",
//         transitionEffect: "fade",
//         enableAllSteps: true,
//         transitionEffectSpeed: 500,
//         onStepChanging: function (event, currentIndex, newIndex) { 
//             if ( newIndex === 1 ) {
//                 $('.steps ul').addClass('step-2');
//             } else {
//                 $('.steps ul').removeClass('step-2');
//             }
//             if ( newIndex === 2 ) {
//                 $('.steps ul').addClass('step-3');
//             } else {
//                 $('.steps ul').removeClass('step-3');
//             }

//             if ( newIndex === 3 ) {
//                 $('.steps ul').addClass('step-4');
//                 $('.actions ul').addClass('step-last');
//             } else {
//                 $('.steps ul').removeClass('step-4');
//                 $('.actions ul').removeClass('step-last');
//             }
//             return true; 
//         },
//         labels: {
//             finish: "Order again",
//             next: "Next",
//             previous: "Previous"
//         }
//     });
//     // Custom Steps Jquery Steps
//     $('.wizard > .steps li a').click(function(){
//     	$(this).parent().addClass('checked');
// 		$(this).parent().prevAll().addClass('checked');
// 		$(this).parent().nextAll().removeClass('checked');
//     });
//     // Custom Button Jquery Steps
//     $('.forward').click(function(){
//     	$("#wizard").steps('next');
//     })
//     $('.backward').click(function(){
//         $("#wizard").steps('previous');
//     })
//     // Checkbox
//     $('.checkbox-circle label').click(function(){
//         $('.checkbox-circle label').removeClass('active');
//         $(this).addClass('active');
//     })
// })

