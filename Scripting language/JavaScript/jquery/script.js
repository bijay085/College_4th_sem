/**
 * Retriving elements : $ or jQuery  --- but this is better
 * Element selectors: CSS Selector
 * 
 */

// let jsContent = jQuery(".js-content-toggle");  **Or we can do  --- but this is better
let jsContent = $(".js-content-toggle"),
    jsToggleBtn = jQuery("#js-toggle");

jsToggleBtn.on("click", function() {
    jsContent.slideToggle(30);
});

/**
 * Important Note : -
 * understand addons of jQuery (jQuery Libraries)
 * jQuery : Java script library
 * Addons : jQuery libraries 
 * i.e : Using slider/carousel, Tabs/Accordion, Hamburger menu or Resposnive Navigation are the addons of jQuery. (i.e : slick slider/carousel)
 * -- It means we don't need to code everything , we can use addons or libraries to make it easy and short.
 */

