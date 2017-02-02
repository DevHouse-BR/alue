jQuery.noConflict()(function($){
$(window).load(function() {
$('#homeCarousel').carousel()
});
});

jQuery.noConflict()(function($){
$(window).load(function() {
$('#testimonialCarousel').carousel()
});
});

/* ---------- @ Flexslider -----------*/
jQuery.noConflict()(function($){
$(window).load(function() {
$('.portfolio-slider-span .flexslider').flexslider({
animation: "fade"
});
});
});

jQuery.noConflict()(function($){
$(window).load(function() {
$('.post-featured-box .flexslider').flexslider({
animation: "slide"
});
});
});

/* ---------- @ Isotope -----------*/
jQuery.noConflict()(function($){
  $(window).load(function() {
      Grid.init();
  });
});

/* ---------- @ Prettyphoto -----------*/
jQuery.noConflict()(function($){
jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({hook: 'data-rel'});
jQuery('a[data-rel]').each(function() {
jQuery(this).attr('rel', $(this).attr('data-rel')).removeAttr('data-rel');
});
});

/* ---------- @ Scroll to Top -----------*/
jQuery.noConflict()(function($){
$('div.scroll-top a').click(function(){
$('html,body').animate({scrollTop:0},500);
return false;
});
});

/* ---------- @ Scroll to Section -----------*/
jQuery.noConflict()(function($){
$(document).ready(function() {
	$('.nav').onePageNav({
	filter: ':not(.external)',
	currentClass: 'active',
	scrollThreshold: 0.25
	});
	
});
});

/* ---------- @ Sticky Nav -----------*/
jQuery.noConflict()(function($){
$(document).ready(function(){
$(".main-nav").sticky({ topSpacing: 0 });
});
});

/* ---------- @ Mobile Menu -----------*/
jQuery.noConflict()(function($){
$(window).load(function() {
$('ul.nav').mobileMenu({
defaultText: 'Navigation',
className: 'select-menu',
subMenuDash: '&ndash;'
});
});
});


/* ---------- @ Contact From -----------*/
jQuery.noConflict()(function($){
 $(document).ready(function ()
{ 
  $('#submit').formValidator({
    scope: '#form'
  });
  
  $('#post-commentsss').formValidator({
    scope: '#comments-form'
  });
  
  $('#submit,#post-commentsss').click(function() {
        $('input.error-input, textarea.error-input').delay(300).animate({marginLeft:0},100).animate({marginLeft:10},100).animate({marginLeft:0},100).animate({marginLeft:10},100);
    });

  // Form plugin

  var options = {

    beforeSubmit: function() {
      $('.sending').show();

    },
    success: function() {
      $('.sending').hide();
      $('#form').hide();
      $(".mess").show().html('<h5>Thanks !</h5><h5>Your message has been sent.</h5>'); // Change Your message post send
      $('.mess').delay(3000).fadeOut(function() {

        $('#form').clearForm();
        $('#form').delay(3500).show();

      });
    }
  };
  

  $('#form').submit(function() {
    $(this).ajaxSubmit(options);
    return false;
  });
});
});

/* ---------- @ Newsletter From -----------*/

jQuery.noConflict()(function($){
 $(document).ready(function ()
{ 
  $('#n-submit').formValidator({
    scope: '#newsletter-form'
  });
   
  $('#n-submit').click(function() {
        $('input.error-input, textarea.error-input').delay(300).animate({marginLeft:0},100).animate({marginLeft:10},100).animate({marginLeft:0},100).animate({marginLeft:10},100);
    });

  // Form plugin

  var options = {

    beforeSubmit: function() {
      $('.sending').show();

    }, 
    success: function() {
      $('.sending').hide();
      $('#newsletter-form').hide();
      $(".mess").show().html('<h5>Got it,</h5><h5>you have been added to our email list.</h5>'); // Change Your message post send
      $('.mess').delay(3000).fadeOut(function() {

        $('#newsletter-form').clearForm();
        $('#newsletter-form').delay(3500).show();

      });
    }
  };
  
$('#newsletter-form').submit(function() {
    $(this).ajaxSubmit(options);
    return false;
  });

});
});