var ww = document.body.clientWidth;
$(document).ready(function() {$(".nav li a").each(function() {if ($(this).next().length > 0) {$(this).addClass("parent");};})
$(".toggleMenu").click(function(e) {e.preventDefault();$(this).toggleClass("active");$(".nav").toggle();});adjustMenu();})
$(window).bind('resize orientationchange', function() {ww = document.body.clientWidth;adjustMenu();});
var adjustMenu = function() {
	if (ww < 768) {$(".toggleMenu").css("display", "inline-block");if (!$(".toggleMenu").hasClass("active")) {$(".nav").hide();} else {$(".nav").show();}$(".nav li").unbind('mouseenter mouseleave');$(".nav li a.parent").unbind('click').bind('click', function(e) {e.preventDefault();$(this).parent("li").toggleClass("hover");});} 
	else if (ww >= 768) {$(".toggleMenu").css("display", "none");$(".nav").show();$(".nav li").removeClass("hover");$(".nav li a").unbind('click');$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		$(this).toggleClass('hover');});}
}
$(document).ready(function() {RESPONSIVEUI.responsiveTabs();})
function initMenus() {
	$('ul.menu ul').hide();$.each($('ul.menu'), function(){$('#' + this.id + '.expandfirst ul:first').show();});
	$('ul.menu li a').click(function() {var checkElement = $(this).next();var parent = this.parentNode.parentNode.id;
if($('#' + parent).hasClass('noaccordion')) {$(this).next().slideToggle('normal');return false;}
if((checkElement.is('ul')) && (checkElement.is(':visible'))) {if($('#' + parent).hasClass('collapsible')) {$('#' + parent + ' ul:visible').slideUp('normal');} return false;}
if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {$('#' + parent + ' ul:visible').slideUp('normal');checkElement.slideDown('normal');return false;
}});}$(document).ready(function() {initMenus();});
$(document).ready(function(){
    $('.slide-trigger').collapsable();
});
/* MOBILE COLLAPSE MENU */
(function($) {
  $.fn.collapsable = function(options) {
    // iterate and reformat each matched element
    return this.each(function() {
      // cache this:
      var obj = $(this); var tree = obj.next('.navigation'); obj.click(function(){  if( obj.is(':visible') ){ tree.toggle();} });
      $(window).resize(function(){   if ( $(window).width() <= 570 ){tree.attr('style','');};  });  }); };
})(jQuery);

jQuery(document).ready(function(){jQuery(window).scroll(function(){if (jQuery(this).scrollTop() > 100) { jQuery('.scrollup').fadeIn(); } else {  jQuery('.scrollup').fadeOut(); }});
jQuery('.scrollup').click(function(){jQuery("html, body").animate({ scrollTop: 0 }, 600); return false;  });
});
// ResponsiveTabs.js | www.petelove.com 
var RESPONSIVEUI={};RESPONSIVEUI.responsiveTabs=function(){var e=$(".responsive-tabs");if(!e.hasClass("responsive-tabs--enabled")){e.addClass("responsive-tabs--enabled");var t=1;e.each(function(){var e=$(this);e.children("h1,h2,h3,h4,h5,h6").addClass("responsive-tabs__heading");e.children("div").addClass("responsive-tabs__panel");var n=e.find(".responsive-tabs__panel--active");if(!n.length){var n=e.find(".responsive-tabs__panel").first().addClass("responsive-tabs__panel--active")}e.find(".responsive-tabs__panel").not(".responsive-tabs__panel--active").hide().attr("aria-hidden","true");n.attr("aria-hidden","false");n.addClass("responsive-tabs__panel--closed-accordion-only");var r=$("<div/>",{Class:"responsive-tabs-wrapper"});e.wrap(r);var i=0;e.find(".responsive-tabs__panel").each(function(){var e=$(this).height();if(e>i){i=e}});var s=$("<ul/>",{Class:"responsive-tabs__list",role:"tablist"});var o=1;e.find(".responsive-tabs__heading").each(function(){var n=$(this);var u=$(this).next();n.attr("tabindex",0);var a=$("<li/>",{Class:"responsive-tabs__list__item",id:"tablist"+t+"-tab"+o,"aria-controls":"tablist"+t+"-panel"+o,role:"tab",tabindex:0,text:n.text(),keydown:function(e){if(e.keyCode==13){a.click()}},click:function(){r.css("height",i);e.find(".responsive-tabs__panel--closed-accordion-only").removeClass("responsive-tabs__panel--closed-accordion-only");e.find(".responsive-tabs__panel--active").toggle().removeClass("responsive-tabs__panel--active").attr("aria-hidden","true").prev().removeClass("responsive-tabs__heading--active");u.toggle().addClass("responsive-tabs__panel--active").attr("aria-hidden","false");n.addClass("responsive-tabs__heading--active");s.find(".responsive-tabs__list__item--active").removeClass("responsive-tabs__list__item--active");a.addClass("responsive-tabs__list__item--active");r.css("height","auto")}});u.attr({role:"tabpanel","aria-labelledby":a.attr("id"),id:"tablist"+t+"-panel"+o});if(u.hasClass("responsive-tabs__panel--active")){a.addClass("responsive-tabs__list__item--active")}s.append(a);n.keydown(function(e){if(e.keyCode==13){n.click()}});n.click(function(){e.find(".responsive-tabs__panel--closed-accordion-only").removeClass("responsive-tabs__panel--closed-accordion-only");if(!n.hasClass("responsive-tabs__heading--active")){if($(".responsive-tabs__heading--active").length){var t=$(".responsive-tabs__heading--active").offset().top}e.find(".responsive-tabs__panel--active").slideToggle().removeClass("responsive-tabs__panel--active").prev().removeClass("responsive-tabs__heading--active");e.find(".responsive-tabs__panel").hide().attr("aria-hidden","true");u.slideToggle().addClass("responsive-tabs__panel--active").attr("aria-hidden","false");n.addClass("responsive-tabs__heading--active");var r=e.find(".responsive-tabs__list__item--active");r.removeClass("responsive-tabs__list__item--active");var i=u.attr("id");var s=i.replace("panel","tab");$("#"+s).addClass("responsive-tabs__list__item--active");var o=$(".responsive-tabs").offset().top;var a=$(".responsive-tabs__heading--active").offset().top;if(t<a){$("html, body").animate({scrollTop:o},0).animate({scrollTop:a},400)}}else{u.removeClass("responsive-tabs__panel--active").slideToggle(function(){$(this).addClass("responsive-tabs__panel--closed-accordion-only")});n.removeClass("responsive-tabs__heading--active")}});o++});e.prepend(s);t++})}}