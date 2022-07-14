/*
Theme Name: Jhon Smith
Theme URI: https://github.com/BashirRased/wp-theme-jhon-smith
Author: Bashir Rased
Author URI: https://profiles.wordpress.org/bashirrased2017/ 
Description: Jhon Smith is a portfolio website.
Requires at least: 5.9
Tested up to: 5.9
Requires PHP: 5.6
Version: 1.0.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: jhon-smith
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, theme-options, threaded-comments, translation-ready, block-patterns, block-styles, wide-blocks

Jhon Smith WordPress Theme, (C) 2022 WordPress.org
Jhon Smith is distributed under the terms of the GNU GPL.
*/

var TxtType = function(el, toRotate, period) {
	this.toRotate = toRotate;
	this.el = el;
	this.loopNum = 0;
	this.period = parseInt(period, 10) || 2000;
	this.txt = '';
	this.tick();
	this.isDeleting = false;
};

TxtType.prototype.tick = function() {
	var i = this.loopNum % this.toRotate.length;
	var fullTxt = this.toRotate[i];

	if (this.isDeleting) {
		this.txt = fullTxt.substring(0, this.txt.length - 1);
	}
	else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
	}

	this.el.innerHTML = this.txt;
	var that = this;
	var delta = 200 - Math.random() * 100;
	
	if (this.isDeleting) { delta /= 2; }
	if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
	}
	else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
	}

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
	var elements = document.getElementsByClassName('jhon-smith-type-effect');
	for (var i=0; i<elements.length; i++) {
		var toRotate = elements[i].getAttribute('data-type');
		var period = elements[i].getAttribute('data-period');
        if (toRotate) {
			new TxtType(elements[i], JSON.parse(toRotate), period);
		}
	}
        
};