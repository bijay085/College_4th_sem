// 19. Demonstrate JavaScript Window Load and Document Content Ready (page and window) event. Introduce jQuery. Write script to demonstrate jQuery. 

//*** This is from internet  */;
// JavaScript Window Load Event:
// The window load event is fired when the entire page, including all external resources like images and stylesheets, has finished loading.

window.addEventListener('load', function() {
    console.log('Window is fully loaded');
});

// Document Content Ready Event:
// The DOMContentLoaded event is fired when the initial HTML document has been completely loaded and parsed, without waiting for stylesheets, images, and subframes to finish loading.

document.addEventListener('DOMContentLoaded', function() {
    console.log('Document content is ready');
});

// jQuery Example:
// jQuery simplifies handling these events:
$(window).on('load', function() {
    console.log('Window is fully loaded (jQuery)');
});

$(document).ready(function() {
    console.log('Document content is ready (jQuery)');
});

//<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  :: This neee to be aadded 
 