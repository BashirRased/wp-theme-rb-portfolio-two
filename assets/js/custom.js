/*
Theme Name: RB Portfolio Two
Theme URI: https://bashir-rased.com/rb-portfolio-two
Author: Bashir Rased
Author URI: https://bashir-rased.com/ 
Description: RB Portfolio Two is a portfolio website.
Requires at least: 5.3
Tested up to: 6.0
Requires PHP: 5.6
Version: 1.0.7
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: rb-portfolio-two
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, theme-options, threaded-comments, translation-ready, block-patterns, block-styles, wide-blocks

RB Portfolio Two WordPress Theme, (C) 2022 Bashir Rased
RB Portfolio Two is distributed under the terms of the GNU GPL.
*/

/*============================
Table of JS Content Start Here
==============================
	01.	Preloader
	02. Nice Scrollbar
	03. Header Menu Section
		3.1. Header Fixed Menu
		3.2. Active Menu Click Highlight
		3.3. Active Menu Scroll Highlight
		3.3. Mobile Menu Toggle
		3.5. Menu Resize Open/Close
	04. Skill Bar Animation
	05. CountTo Section
	06. Portfolio Section
		6.1. Isotope Masonry
		6.2. Isotope Filtering
		6.3. Active Filter Menu Highlight
		6.4. FancyApps 3 Plugin Active
	07. Testimonials Section
	08. Scroll to Top
		8.1. Scroll To Top Button Hide/Show
		8.2. Scroll To Top Button Click 
	09. Link Smooth Effect
============================
Table of JS Content End Here
==========================*/

(function ($) {
    'use strict';
	
	/*=============================
	01. Preloader jQuery Start Here
	=============================*/
	$(window).on("load",function (){
		$(".sk-cube-grid").delay(100).fadeOut(),
		setTimeout(function(){$(".pre-loader").addClass("loading-end"),
		setTimeout(function(){$(".pre-loader").hide()},1500)},800)
	});
	/*===========================
	01. Preloader jQuery End Here
	===========================*/

	$(document).ready(function(){
		
		/*=======================================
		03. Header Menu Section $ Start Here
		=======================================*/
		/*===== 3.1. Header Fixed Menu Start Here =====*/
		$(window).scroll(function(){
			if ($(window).scrollTop() >= 50) {
				$('.header-menu-area').addClass('header-fixed');
			}
			else {
				$('.header-menu-area').removeClass('header-fixed');
			}
		});
		/*===== 3.1. Header Fixed Menu End Here =====*/
		
		/*===== 3.2. Active Menu Click Highlight jQuery Start Here =====*/
		var sidenav = $('.header-desktop-menu a');
		$(sidenav).on('click', '.header-desktop-menu a', function() {
			$(this).addClass('header-active-menu').siblings().removeClass('header-active-menu');		
		});
		/*===== 3.2. Active Menu Click Highlight jQuery End Here =====*/
		
		/*===== 3.3. Active Menu Scroll Highlight jQuery Start Here =====*/
		$(window).on('scroll', function() {
			$('.scroll-menu').each(function() {
				if ($(window).scrollTop() >= $(this).position().top - 50) {
					var id = $(this).attr('id');
					$('.header-desktop-menu a').removeClass('header-active-menu');
					$('.header-desktop-menu a[href*=\\#' + id + ']').addClass('header-active-menu');
				}
			});
		});
		/*===== 3.3. Active Menu Scroll Highlight jQuery End Here =====*/
		
		/*===== 3.4. Mobile Menu Toggle jQuery Start Here =====*/
		$(".header-mobile-menu-btn").click(function(){
			$(".header-desktop-menu").slideToggle();
		});
		/*===== 3.4. Mobile Menu Toggle $ End Here =====*/
		
		/*===== 3.5. Menu Resize Open/Close $ Start Here =====*/
		$(window).resize(function(){
			var RBMenu = $(window).width();
			if(RBMenu > 991){
				$(".header-desktop-menu").show();				
			}
			else{
				$(".header-desktop-menu").hide();			
			}
		});
		/*===== 3.5. Menu Resize Open/Close $ End Here =====*/

		$(".sub-menu .sub-menu").addClass("multi-dropdown-menu");
        $(".multi-dropdown-menu").removeClass("sub-menu");

        $(".sub-menu").addClass("dropdown-menu");
        $(".dropdown-menu").removeClass("sub-menu");

		$(".multi-dropdown-menu").siblings("a").prepend
		('<i class="fas fa-chevron-left"></i>');

		$(".dropdown-menu").siblings("a").append('<i class="fas fa-chevron-down"></i>');

		$(".menu-item-has-children").children("a").append('<button><span class="fas fa-chevron-down"></span></button>');

        $('.menu-item-has-children button').on("click", function (event) {
            event.preventDefault();
            $(this).parent("a").siblings("ul").toggleClass('dropdown-menu-open');
        });
		/*=====================================
		03. Header Menu Section $ End Here
		=====================================*/
		
		/*=======================================
		04. Skill Bar Animation $ Start Here
		=======================================*/
		$('.skill-bar').each(function() {
			$(this).find('.skill-animation').animate({ width: $(this).attr('data-percent') }, 3000);
		});
		/*=====================================
		04. Skill Bar Animation $ End Here
		=====================================*/
		
		/*===================================
		05. CountTo Section $ Start Here
		===================================*/
		$(".countup").appear(function() {
			$(".countup-number").countTo();
		}, {
			accX: 0,
			accY: -350
		});
		/*=================================
		05. CountTo Section $ End Here
		=================================*/
		
		/*=====================================
		06. Portfolio Section $ Start Here
		=====================================*/
		$('#container').imagesLoaded( function() {
			/*===== 6.1. Isotope Masonry Start Here =====*/
			var $grid = $('.portfolio-grid').isotope({
			  itemSelector: '.portfolio-item',
			  percentPosition: true,
			  masonry: {
				columnWidth: 1
			  }
			});
			/*===== 6.1. Isotope Masonry End Here =====*/
		
			/*===== 6.2. Isotope Filtering Start Here =====*/
			$('.portfolio-menu ul').on( 'click', 'li', function() {
			  var filterValue = $(this).attr('data-filter');
			  $grid.isotope({ filter: filterValue });
			});	
			/*===== 6.2. Isotope Filtering End Here =====*/
		
			/*===== 6.3. Active Filter Menu Highlight Start Here =====*/
			$('.portfolio-menu li').on('click', function(event){
				$(this).siblings('.active-portfolio').removeClass('active-portfolio');
				$(this).addClass('active-portfolio');
				event.preventDefault();
			});		
			/*===== 6.3. Active Filter Menu Highlight End Here =====*/
		
			/*===== 6.4. FancyApps 3 Plugin Active Start Here =====*/
			Fancybox.bind("[data-fancybox]", {
				protect: true,
				loop: true,			  
				buttons: [
					'zoom',
					'close'
				],
				transitionDuration: 1500,
			});
			/*===== 6.4. FancyApps 3 Plugin Active End Here =====*/
			
		});		
		/*===================================
		06. Portfolio Section $ End Here
		===================================*/
		
		/*========================================
		07. Testimonials Section $ Start Here
		========================================*/
		$(".owl-carousel").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 3000,
		});
		/*======================================
		07. Testimonials Section $ End Here
		======================================*/
		
		/*========================================
		08. Scroll To Top Button $ Start Here
		========================================*/		
		/*===== 8.1. Scroll To Top Button Hide/Show Start Here =====*/
		$(window).scroll(function(){		  
		  var RBScroll = $(window).scrollTop();		  
		  if( RBScroll > 100 ){
			  $(".scroll-to-top").fadeIn();
		  }else {
			  $(".scroll-to-top").fadeOut();
		  }
		});
		/*===== 8.1. Scroll To Top Button Hide/Show End Here =====*/
		
		/*===== 8.2. Scroll To Top Button Click Effect Start Here =====*/
		$(".scroll-to-top").on('click', function(){
			$("html, body").animate({'scrollTop' : 0}, 300);
			return false;
		});
		/*===== 8.2. Scroll To Top Button Click Effect End Here =====*/
		/*======================================
		08. Scroll To Top Button $ End Here
		======================================*/		
		
	});

}(jQuery));