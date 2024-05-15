/**
 * Types of frames ::
 * i. Top-level Frame (window): The main window in the browser is also referred to as the top-level frame. This frame contains the entire webpage content and is represented by the window object. All other frames are nested within this top-level frame.
 * ii. Nested Frames (window.frames): These are frames nested within the main window (window object). You can access and manipulate these frames using window.frames[index] or window.frames["frameName"].
 * iii. iFrames (<iframe>): While not technically part of the window.frames collection, <iframe> elements are used in HTML to embed another HTML document within the current document. They provide a way to include external content within a webpage.
 */

//DOMContentLoaded, load
window.addEventListener("load", (event) => {
    const frames = window.frames;
    for(let i = 0; i < frames.length; i++){
        frames[i].document.body.style.background = "cyan";
        frames[i].document.body.childNodes[1].style.background = "gray"; 
        frames[i].document.body.childNodes[1].style.color = "White"; 
        frames[i].document.body.childNodes[1].style.fontSize = "20px"; 
        frames[i].document.body.childNodes[1].style.width = "300px";
        frames[i].document.body.childNodes[1].style.height = "200px";        
        console.log(frames[i].document.body.childNodes)
    };
});

document.addEventListener("DOMContentLoaded", () => {
    console.log("hello world");
});

// task 
console.log(window);