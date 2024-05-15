setInterval(function () {
    let date = new Date();
    let year = date.getFullYear(),
        month = date.getMonth(),
        mDay = date.getDate(),
        wDay = date.getDay(),
        hour = date.getHours(),
        minute = date.getMinutes(),
        second = date.getSeconds();

    let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    let ampm = (hour < 12) ? "AM" : "PM";
    hour = (hour === 0) ? 12 : (hour > 12) ? (hour - 12) : hour;

    const suffix = (mDay >= 11 && mDay <= 13) ? 'th' : ['st', 'nd', 'rd'][mDay % 10 - 1] || 'th';

    let fullDate = `${mDay}${suffix} ${months[month]} ${year} ${hour}:${minute}:${second} ${ampm} ${days[wDay]}`;
    document.getElementById("date").innerText = fullDate;
}, 1000);

// Math object demonstration
const num = 16.789;
console.log('Math.floor:', Math.floor(num)); // Rounds down to nearest integer
console.log('Math.ceil:', Math.ceil(num));   // Rounds up to nearest integer
console.log('Math.round:', Math.round(num)); // Rounds to nearest integer
console.log('Math.max:', Math.max(10, 20, 30)); // Returns the maximum value
console.log('Math.min:', Math.min(10, 20, 30)); // Returns the minimum value
