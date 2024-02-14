// 15. What is event in JavaScript? List all the common types of event in JavaScript. Write a JavaScript with  HTML to demonstrate events. 

/**
 * Events are things that happen in the system when a signal of some kind is send. Event enables webapge to respond as user interact.
 * Event Listeners: They are functions that wait for a particular event to occur on an element or the document.
 * 
 * All types of event in js are :
 * Mouse Events: Such as click, mouseover, mouseout, mousemove, etc.
 * Form Events: Such as submit, change, focus, blur, etc.
 * Window Events: Such as load, resize, scroll, etc.
 * HTML/DOM Events: Events like DOMContentLoaded, beforeunload, etc.
 * Keyboard Events:keydown, keyup, keypress etc.
 */
    // Get the button and input elements
    let button = document.getElementById('clickMe');
    let input = document.getElementById('inputField');
    let output = document.getElementById('output');

    // Event listener for the button click event
    button.addEventListener('click', function() {
      output.textContent = 'Button clicked!';
    });

    // Event listener for keyup event on input field
    input.addEventListener('keyup', function(event) {
      output.textContent = `Typed: ${event.target.value}`;
    });

