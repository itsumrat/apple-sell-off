$(document).ready(function() {
	// Header Scroll
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}
	});

	// Fancybox
	$('.work-box').fancybox();

	// Page Scroll
	var sections = $('section')
		nav = $('nav[role="navigation"]');

	$(window).on('scroll', function () {
	  	var cur_pos = $(this).scrollTop();
	  	sections.each(function() {
	    	var top = $(this).offset().top - 76
	        	bottom = top + $(this).outerHeight();
	    	if (cur_pos >= top && cur_pos <= bottom) {
	      		nav.find('a').removeClass('active');
	      		nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    	}
	  	});
	});
	nav.find('a').on('click', function () {
	  	var $el = $(this)
	    	id = $el.attr('href');
		$('html, body').animate({
			scrollTop: $(id).offset().top - 75
		}, 500);
	  return false;
	});

	// Mobile Navigation
	$('.nav-toggle').on('click', function() {
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		console.log('hello')
		return false;
	});
	nav.find('a').on('click', function() {
		$('.nav-toggle').toggleClass('close-nav');
		nav.toggleClass('open');
	});

	$(".navigation").on('click', function(e){
		if (!$(e.target).hasClass("primary-nav")
			&& $(e.target).parents(".navigation").length === 0)
		{
			$(this).toggleClass('close-nav');
			nav.toggleClass('open');
			return false;
		}
	});
	$(".menuId").on('click', function(e){
		// e.stopPropagation()
			$(this).toggleClass('close-nav');
			nav.toggleClass('open');
			return false;

	});
	$(".closeIcon").on('click', function(e){
		// e.stopPropagation()
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		return false;

	});

	$('#exNavigator').on('click', function () {
		$('.storeSidebar').toggleClass("open");
		$('.exNavigator').toggleClass("close");

	});
	$(".storeSidebar").on('click', function(e){
		if (!$(e.target).hasClass("sidebar-content-wrapper")
			&& $(e.target).parents(".storeSidebar").length === 0)
		{
			$('.storeSidebar').toggleClass("open");
			$('.exNavigator').toggleClass("close");
		}
	});
	$('.sidebarClose').on('click', function () {
		$('.storeSidebar').toggleClass("open");
		$('.exNavigator').toggleClass("close");

	});


});

// FAQ
const items = document.querySelectorAll(".accordion button");
function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}
items.forEach(item => item.addEventListener('click', toggleAccordion));

// Logo
$(function() { var logo = $(".lrg-logo"); $(window).scroll(function() {
var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      if(!logo.hasClass("sml-logo")) {
        logo.hide();
        logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
      }
    } else {
      if(!logo.hasClass("lrg-logo")) {
        logo.hide();
        logo.removeClass("sml-logo").addClass('lrg-logo').fadeIn( "slow");
      }
    }

});
});

//price slider
/* isNumberKey
    Only allows NUMBERS to be keyed into a text field.
    @environment ALL
    @param evt - The specified EVENT that happens on the element.
    @return True if number, false otherwise.
*/
function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  // Added to allow decimal, period, or delete
  if (charCode == 110 || charCode == 190 || charCode == 46) return true;

  if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;

  return true;
} // isNumberKey

// Price slider
var startValue = 200;
var endValue = 5000;
var minValue = 1000;
var maxValue = 50000;
$("#slider-container").slider({
  range: true,
  min: minValue,
  max: maxValue,
  values: [startValue, endValue],
  create: function () {
    $("#amount-from").val(startValue);
    $("#amount-to").val(endValue);
  },
  slide: function (event, ui) {
    $("#amount-from").val(ui.values[0]);
    $("#amount-to").val(ui.values[1]);
    var from = $("#amount-from").val();
    var to = $("#amount-to").val();
    console.log(from + " --- " + to);
  }
});


