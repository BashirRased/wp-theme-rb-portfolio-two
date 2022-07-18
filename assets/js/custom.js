/*
Theme Name: RB Portfolio Two
Theme URI: https://github.com/BashirRased/wp-theme-rb-portfolio-two
Author: Bashir Rased
Author URI: https://profiles.wordpress.org/bashirrased2017/ 
Description: RB Portfolio Two is a portfolio website.
Requires at least: 5.9
Tested up to: 5.9
Requires PHP: 5.6
Version: 1.0.2
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: rb-portfolio-two
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, theme-options, threaded-comments, translation-ready, block-patterns, block-styles, wide-blocks

RB Portfolio Two WordPress Theme, (C) 2022 WordPress.org
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
				$('.rb-portfolio-two-header-menu-area').addClass('rb-portfolio-two-header-fixed');
			}
			else {
				$('.rb-portfolio-two-header-menu-area').removeClass('rb-portfolio-two-header-fixed');
			}
		});
		/*===== 3.1. Header Fixed Menu End Here =====*/
		
		/*===== 3.2. Active Menu Click Highlight jQuery Start Here =====*/
		var sidenav = $('.rb-portfolio-two-header-desktop-menu a');
		$(sidenav).on('click', '.rb-portfolio-two-header-desktop-menu a', function() {
			$(this).addClass('rb-portfolio-two-header-active-menu').siblings().removeClass('rb-portfolio-two-header-active-menu');		
		});
		/*===== 3.2. Active Menu Click Highlight jQuery End Here =====*/
		
		/*===== 3.3. Active Menu Scroll Highlight jQuery Start Here =====*/
		$(window).on('scroll', function() {
			$('.rb-portfolio-two-scroll-menu').each(function() {
				if ($(window).scrollTop() >= $(this).position().top - 50) {
					var id = $(this).attr('id');
					$('.rb-portfolio-two-header-desktop-menu a').removeClass('rb-portfolio-two-header-active-menu');
					$('.rb-portfolio-two-header-desktop-menu a[href*=\\#' + id + ']').addClass('rb-portfolio-two-header-active-menu');
				}
			});
		});
		/*===== 3.3. Active Menu Scroll Highlight jQuery End Here =====*/
		
		/*===== 3.4. Mobile Menu Toggle jQuery Start Here =====*/
		$(".rb-portfolio-two-header-mobile-menu-btn").click(function(){
			$(".rb-portfolio-two-header-desktop-menu").slideToggle();
		});
		/*===== 3.4. Mobile Menu Toggle $ End Here =====*/
		
		/*===== 3.5. Menu Resize Open/Close $ Start Here =====*/
		$(window).resize(function(){
			var RBMenu = $(window).width();
			if(RBMenu > 991){
				$(".rb-portfolio-two-header-desktop-menu").show();				
			}
			else{
				$(".rb-portfolio-two-header-desktop-menu").hide();			
			}
		});
		/*===== 3.5. Menu Resize Open/Close $ End Here =====*/

		$(".sub-menu .sub-menu").addClass("rb-portfolio-two-multi-dropdown-menu");
        $(".rb-portfolio-two-multi-dropdown-menu").removeClass("sub-menu");

        $(".sub-menu").addClass("rb-portfolio-two-dropdown-menu");
        $(".rb-portfolio-two-dropdown-menu").removeClass("sub-menu");

		$(".rb-portfolio-two-multi-dropdown-menu").siblings("a").prepend
		('<i class="fas fa-chevron-left"></i>');

		$(".rb-portfolio-two-dropdown-menu").siblings("a").append('<i class="fas fa-chevron-down"></i>');

		$(".menu-item-has-children").children("a").append('<button><span class="fas fa-chevron-down"></span></button>');

        $('.menu-item-has-children button').on("click", function (event) {
            event.preventDefault();
            $(this).parent("a").siblings("ul").toggleClass('rb-portfolio-two-dropdown-menu-open');
        });
		/*=====================================
		03. Header Menu Section $ End Here
		=====================================*/
		
		/*=======================================
		04. Skill Bar Animation $ Start Here
		=======================================*/
		$('.rb-portfolio-two-skill-bar').each(function() {
			$(this).find('.rb-portfolio-two-skill-animation').animate({ width: $(this).attr('data-percent') }, 3000);
		});
		/*=====================================
		04. Skill Bar Animation $ End Here
		=====================================*/
		
		/*===================================
		05. CountTo Section $ Start Here
		===================================*/
		$(".rb-portfolio-two-countup").appear(function() {
			$(".rb-portfolio-two-countup-number").countTo();
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
			var $grid = $('.rb-portfolio-two-portfolio-grid').isotope({
			  itemSelector: '.rb-portfolio-two-portfolio-item',
			  percentPosition: true,
			  masonry: {
				columnWidth: 1
			  }
			});
			/*===== 6.1. Isotope Masonry End Here =====*/
		
			/*===== 6.2. Isotope Filtering Start Here =====*/
			$('.rb-portfolio-two-portfolio-menu ul').on( 'click', 'li', function() {
			  var filterValue = $(this).attr('data-filter');
			  $grid.isotope({ filter: filterValue });
			});	
			/*===== 6.2. Isotope Filtering End Here =====*/
		
			/*===== 6.3. Active Filter Menu Highlight Start Here =====*/
			$('.rb-portfolio-two-portfolio-menu li').on('click', function(event){
				$(this).siblings('.rb-portfolio-two-active-portfolio').removeClass('rb-portfolio-two-active-portfolio');
				$(this).addClass('rb-portfolio-two-active-portfolio');
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
			  $(".rb-portfolio-two-scroll-to-top").fadeIn();
		  }else {
			  $(".rb-portfolio-two-scroll-to-top").fadeOut();
		  }
		});
		/*===== 8.1. Scroll To Top Button Hide/Show End Here =====*/
		
		/*===== 8.2. Scroll To Top Button Click Effect Start Here =====*/
		$(".rb-portfolio-two-scroll-to-top").on('click', function(){
			$("html, body").animate({'scrollTop' : 0}, 3000);
			return false;
		});
		/*===== 8.2. Scroll To Top Button Click Effect End Here =====*/
		/*======================================
		08. Scroll To Top Button $ End Here
		======================================*/		
		
	});

}(jQuery));