// JavaScript Document

'use strict';

$(document).ready(function(e) {
	//Sliders
	$('#main-slider').owlCarousel({
		singleItem: true,
		navigation: true,
		navigationText: false,
		pagination: false,
		slideSpeed: 1000
	});
	$('#agents-slider').owlCarousel({
		items: 4,
		navigation: true,
		navigationText: false,
		pagination: false,
		slideSpeed: 500
	});
	$('#post-preview-slider-1').owlCarousel({
		singleItem: true,
		navigation: true,
		navigationText: false,
		pagination: true,
		slideSpeed: 400
	});
	$('#recent_prop_slider').owlCarousel({
		items: 2,
		itemsDesktop: [1199,2],
		itemsDesktopSmall: [980,2],
		itemsTablet: [768,2],
		itemsTabletSmall: false,
		itemsMobile: [479,1],
		slideSpeed: 500
	});


	//menu buttons
	var menu_btns = $('.menu-button');
	for (var i=0; i<menu_btns.length; i++) {
		menuShowing(menu_btns.eq(i));
	}
	
	function menuShowing(menu_btn) {
		var menu_cnt = menu_btn.next('.menu-container');
		var effect = "fade";
		if(menu_cnt.hasClass('menu-container-slide'))
			effect = "slide";
		menu_btn.on('click', function(e) {
			if(effect == "slide")
				menu_cnt.slideToggle();
			menu_cnt.toggleClass('active');
		});
	}
	
	//reshow hidden menus by js
	var menu_breakdown_width = 767;
	var slide_menus = $('.menu-container-slide');
	var menus_hidden = false;
	if (Modernizr.mq('(max-width: ' + menu_breakdown_width + 'px)'))
		menus_hidden = true;
	$(window).resize(function(e) {
		if (Modernizr.mq('(max-width: ' + menu_breakdown_width + 'px)')) {
			menus_hidden = true;
		} else {
			if(menus_hidden == true) {
				for (var i=0; i<slide_menus.length; i++) {
					slide_menus.eq(i).show();
				}
				menus_hidden = false;
			}
		}
	});
	
	
	//menu dropdown
	var top_menu_items = $('.menu-container > ul > li');
	for (var i=0; i<top_menu_items.length; i++) {
		var current_it = top_menu_items.eq(i);
		var current_it_dropdown = current_it.children('ul');
		if(current_it_dropdown.length == 1)
			dropDownSliding(current_it, current_it_dropdown);
	}
	
	function dropDownSliding(menu_it, dropdown_it) {
		menu_it.on('mouseenter', function(e) {
			dropdown_it.stop().slideDown(400);
		});
		menu_it.on('mouseleave', function(e) {
			dropdown_it.stop().slideUp(400);
		});
	}
	
	
	//tooltips
	$('[data-toggle="tooltip"]').tooltip();
	
	
	//in page scrolling
	$('.scroll-to').on('click', function(e) {
		e.preventDefault();
		$.scrollTo($(this).attr('href'), 800, {axis:'y'});
	});
	
	
	// on-scroll animations
	var on_scroll_anims = $('.onscroll-animate');
	for (var i=0; i<on_scroll_anims.length; i++) {
		var element = on_scroll_anims.eq(i);
		element.one('inview', function (event, visible) {
			var el = $(this);
			var anim = (el.data("animation") !== undefined) ? el.data("animation") : "fadeIn";
			var delay = (el.data("delay") !== undefined ) ? el.data("delay") : 200;

			var timer = setTimeout(function() {
				el.addClass(anim);
				clearTimeout(timer);
			}, delay);
		});
	}
	
	
	//custom selects functionality
	var custom_selects = $('.custom-select');
	for (var i=0; i<custom_selects.length; i++) {
		customSelect(custom_selects.eq(i));
	}
	
	function customSelect(select_el) {
		var select_list = select_el.children('.custom-select-list');
		var select_value = select_el.children('.custom-select-val');
		var select_input = select_el.children('input');
		var select_li_els = select_list.children('li');
			
		//get default item and set default value
		var default_item = select_list.children('.custom-select-default');
		if(default_item.length != 1)
			default_item = select_li_els.first();
		select_value.html(default_item.html());
		select_input.val(default_item.data('val'));
		select_el.addClass('cs-default');

		//open/close list on click
		select_value.on('click', function(e) {
			
			e.stopPropagation();
			//close all other opened lists
			var opened = select_el.hasClass('cs-active');
			custom_selects.removeClass('cs-active');
			if(!opened)
				select_el.addClass('cs-active');
		});
		
		//close list when clicked out of it
		$(document).on('click', function(e) {
			select_el.removeClass('cs-active');
		});
		
		//change values on click
		select_li_els.on('click', function(e) {
			select_value.html($(this).html());
			select_input.val($(this).data('val'));
			select_el.toggleClass('cs-active');
			if(this === default_item.get(0))
				select_el.addClass('cs-default');
			else
				select_el.removeClass('cs-default');
		});
	}
	//add stroll plugin effects
	stroll.bind($('.stroll-list'));
	
	
	//underscores functionality
	var underscores = $('.underscore');
	for (var i=0; i<underscores.length; i++) {
		createUnderscore(underscores.eq(i));
    }
	
	function createUnderscore(underscore) {
		var underscore_container = underscore.parents('.underscore-container');
		var li_elements = underscore.prev('ul').children('li');
        var a_elements = li_elements.children('a');
		
		//set init li and init position
		var init_el = a_elements.eq(0);
		for (var i=0; i<li_elements.length; i++) {
			if(li_elements.eq(i).hasClass('active')) {
				init_el = a_elements.eq(i);
				break;
			}
		}
		setUnderscorePos(underscore, init_el, underscore_container);
		
		//change position on hover
		a_elements.on('mouseenter', function(e) {
			underscore.addClass('moving');
			setUnderscorePos(underscore, $(this), underscore_container);
		});
		a_elements.on('mouseleave', function(e) {
			underscore.removeClass('moving');
			setUnderscorePos(underscore, init_el, underscore_container);
		});
		
		//recount position on resize
		$(window).resize(function(e) {
            setUnderscorePos(underscore, init_el, underscore_container);
        });
	}
	
	function setUnderscorePos(underscore_el, target_el, container_el) {
		underscore_el.css({'width':target_el.width(), 'left':(target_el.offset().left - container_el.offset().left)});
	}


	//forms - rss subscribe and contact form
	$('.form-submit').on('click', function(e) {
		e.preventDefault();
		$(this).parent('form').trigger('submit');
	});
	$('#rss-subscribe, #rss-subscribe-2').on('submit', function(e) {
		return form_to_ajax_request($(this), ['email'], ['email']);
	});
	$('#contact-form').on('submit', function(e) {
		return form_to_ajax_request($(this), ['name', 'subject', 'phone', 'email', 'message'], ['email', 'name', 'message']);
	});
	$('#contact-form-agent').on('submit', function(e) {
		return form_to_ajax_request($(this), ['name', 'email', 'property', 'message'], ['name', 'email', 'property', 'message']);
	});
	
});

$(window).load(function(e) {
	//force underscore to recount its position and show
	$(window).trigger('resize');
	$('.underscore').addClass('active');

	
	//fade out page loader
    $('#page-loader').fadeOut();
	
	
	//blog single slider
	var flex_carousel = $('#flex-carousel');
	var flex_slider = $('#flex-slider');
	if(flex_slider.length == 1 && flex_carousel.length == 1) {
		$(flex_carousel).flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 166,
			itemMargin: 10,
			asNavFor: '#flex-slider'
		});
		$(flex_slider).flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#flex-carousel"
		});
	}
	
	
	//parallax backgrounds
	var parallax_backgrounds = $('.parallax-background');
	for (var i=0; i<parallax_backgrounds.length; i++) {
		var el = parallax_backgrounds.eq(i);
		if(!el.attr("data-stellar-background-ratio"))
        	el.attr('data-stellar-background-ratio', 0.4);
    }
	
    $.stellar({
		horizontalScrolling: false,
		responsive: true
	});
});


//placeholder fallback for old browsers
if ( !("placeholder" in document.createElement("input")) ) {
    $("input[placeholder], textarea[placeholder]").each(function() {
	    var val = $(this).attr("placeholder");
        if ( this.value == "" ) {
    	    this.value = val;
        }
        $(this).focus(function() {
        	if ( this.value == val ) {
            	this.value = "";
            }
       	}).blur(function() {
        	if ( $.trim(this.value) == "" ) {
            	this.value = val;
            }
        })
  	});
 
    // Clear default placeholder values on form submit
    $('form').submit(function() {
    	$(this).find("input[placeholder], textarea[placeholder]").each(function() {
        	if ( this.value == $(this).attr("placeholder") ) {
            	this.value = "";
            }
        });
    });
}


/*
  create ajax request from form element and his fields
  messages: set as form "data" attribut - "[field name]-not-set-msg", "all-fields-required-msg", "ajax-fail-msg", "success-msg"
  form must have attributes "method" and "action" set
  "return message" and "ajax loader" are also managed - see functions below
  
  @param form_el - form element
  @param all_fields - array of names of all fields in the form element that will be send
  @param required_fields - array of names of all fields in the form element that must be set - cannot be empty
*/
function form_to_ajax_request(form_el, all_fields, required_fields) {
	var fields_values = [];
	var error = false;
	
	//get values from fields
	$.each(all_fields, function(index, value) {
		fields_values[value] = form_el.find('*[name=' + value + ']').val();
	});
	
	//check if required fields are set
	$.each(required_fields, function(index, value) {
		if(!isSet(fields_values[value])) {
			var message = form_el.data(value + '-not-set-msg');
			if(!isSet(message))
				message = form_el.data('all-fields-required-msg');
			setReturnMessage(form_el, message);
			showReturnMessage(form_el);
			error = true;
			return;
		}
	});
	if(error)
		return false;
	
	//form data query object for ajax request
	var data_query = {};
	$.each(all_fields, function(index, value) {
		data_query[value] = fields_values[value];
	});
	data_query['ajax'] = true;

	//show ajax loader
	showLoader(form_el);
	
	//send the request
	$.ajax({
		type: form_el.attr('method'),
		url: form_el.attr('action'),
		data: data_query,
		cache: false,
		dataType: "text"
	})
	.fail(function() {		//request failed
		setReturnMessage(form_el, form_el.data('ajax-fail-msg'));
		showReturnMessage(form_el);
	})
	.done(function(message) {		//request succeeded
		if(!isSet(message)) {
			clearForm(form_el);
			setReturnMessage(form_el, form_el.data('success-msg'));
			showReturnMessage(form_el);
		}
		else {
			setReturnMessage(form_el, message);
			showReturnMessage(form_el);
		}
	});
	
	//hide ajax loader
	hideLoader(form_el);
	
	return false;
}

function isSet(variable) {
	if(variable == "" || typeof(variable) == 'undefined')
		return false;
	return true;
}

function clearForm(form_el) {
	form_el.find('input[type=text]').val('');
	form_el.find('input[type=checkbox]').prop('checked', false);
	form_el.find('textarea').val('');
}

function showLoader(form_el) {
	form_el.find('.ajax-loader').fadeIn('fast');
}

function hideLoader(form_el) {
	form_el.find('.ajax-loader').fadeOut('fast');
}
	
function setReturnMessage(form_el, content) {
	if(!isSet(content))
		content = "Unspecified message.";
	form_el.find('.return-msg').html(content);
}

function showReturnMessage(form_el) {
	form_el.find('.return-msg').addClass('show-return-msg');
}

$('.return-msg').click(function(e) {
	$(this).removeClass('show-return-msg').html('&nbsp;');
});

