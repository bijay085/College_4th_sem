//DOMContentLoaded, load
window.addEventListener("load", (event) => {
    const frames = window.frames;
    for(let i = 0; i < frames.length; i++){
        frames[i].document.body.style.background = "blue";
        frames[i].document.body.childNodes[1].style.background = "black"; 
        frames[i].document.body.childNodes[1].style.color = "red"; 
        console.log(frames[i].document.body.childNodes)
    };
});

document.addEventListener("DOMContentLoaded", () => {
    console.log("hello world");
});

// task 
console.log(window);