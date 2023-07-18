


jQuery(function($){

        $(window).scroll(function() {
            var windowScroll = $(this).scrollTop();
            if(windowScroll >= 120){
                $('.o-header').addClass('sticky');
            }else{
                $('.o-header').removeClass('sticky');
            }
            clearTimeout($.data(this, 'scrollTimer'));
                $.data(this, 'scrollTimer', setTimeout(function() {                        
                    $('.o-header').removeClass('sticky')
           }, 5000));
        });

        $('.c-toggle-menu').on('click', function(e){
            e.preventDefault();
            $('.c-main-menu').addClass('active');
            $('.c-overlay').addClass('active');
        });
        $('.c-main-menu__close').on('click', function(e){
            e.preventDefault();
            $('.c-main-menu').removeClass('active');
            $('.c-overlay').removeClass('active');
        });

        $('.c-overlay').on('click', function(e){
            e.preventDefault();
            $('.c-main-menu').removeClass('active');
            $(this).removeClass('active');
        });

        $('.c-nav-sup ul > li > ul').parent().prepend('<i class="arw-nav"></i>');
        function subMenu(){
            $(this).parent('li').find('> ul').stop(true, true).slideToggle();
            $(this).parents('li').siblings().find('ul').stop(true, true).slideUp();
            $(this).toggleClass('actv');
            $(this).parent().siblings().find('.arw-nav').removeClass('actv');
        }
        $('.c-nav-sup ul > li > .arw-nav').on('click',subMenu);



// function subMenu(){
//   $('.nav-area ul > li > ul').parent().prepend('<i class="arw-nav"></i>');
//   $('.nav-area ul > li > .arw-nav').on('click', function(){
//     $(this).parent('li').find('> ul').stop(true, true).slideToggle();
//     $(this).parents('li').siblings().find('ul').stop(true, true).slideUp();
//     $(this).toggleClass('actv'),
//     $(this).parent().siblings().find('.arw-nav').removeClass('actv');
//   });

// }subMenu();


// $.fn.submenu = function(){
//   var $self = $(this);
//   $self.each(function(index, elem){
//     var hasChild = $(elem).children('ul');
//     var childrenLength = $(elem).children('ul').length;
//     if(childrenLength){
//       $(this).append('<i class="arw-nav"></i>');
//     }
//     $(elem).on('click', '.arw-nav', function(e){
//      $(this).parent('li').find('> ul').stop(true, true).slideToggle();
//      $(this).parent('li').siblings().find('ul').stop(true, true).slideUp();
//       event.stopPropagation();
//     });
//   });
// }

// $('.nav-sup ul > li').submenu();


// $.fn.myTab = function(options) {
//     var $self = $(this);
//     var tabButton = $self.find(options.clickElm);
//     tabButton.each(function(index, elm) {
//         $(elm).on('click', function(e) {
//             var getIndex = $(this).index();
//             $(this).addClass('active').siblings().removeClass('active');
//             $self.find(options.effetedElm).each(function(i, element) {
//                 if (getIndex == i) {
//                     $(element).show();
//                 } else {
//                     $(element).hide();
//                 }
//             });
//             e.preventDefault();
//         });
//     });
// };

// $('.tab-wrapper').myTab({
//     clickElm: '.tab_btn_group ul > li',
//     effetedElm: '.each-body'
// });

// $('.tab_btn_group ul > li').first().trigger('click');


// $.fn.accord = function(options){
//   var $self = $(this);
//   $(this).each(function(ind, elem){
//     $(elem).on('click', options.clickedElement, function(){
//       var $parent = $(this).parent();
//       var $next = $(this).next().stop(true, true).slideToggle();
//       $self.find(options.effectedElement).not($next).stop(true,true).slideUp();
//       var click_elm = $(this).toggleClass('active');
//       $self.find(options.clickedElement).not(click_elm).removeClass('active');
//     });
//   })
// };


// $(".c-accord-sec").accord({
//   clickedElement:"h4",
//   effectedElement:".text-sec"
// });

// $('.c-accord-panel').first().find('h4').trigger('click');


$('a[href*=#]:not([href=#])').click(function() {
 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
   var target = $(this.hash); console.log(target);
   target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
   if (target.length) {
     $('html,body').animate({
       scrollTop: target.offset().top - $('.o-header').outerHeight()
     }, 1000);
     return false;
   }
 }
});






});
	


	
	
	
	
	
	
	
	