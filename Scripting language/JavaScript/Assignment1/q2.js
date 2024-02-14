// -WS to print digital date-clock using js 

function displayTime() {
    let d = new Date();
    let hour = d.getHours(),
        min = d.getMinutes(),
        sec = d.getSeconds(),
        amOrpm = "AM";
        
        //for name 
        let monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        
        //for date
    let year = d.getFullYear(),
        month = monthNames[d.getMonth()],
        mday = d.getDate(),
        wday = dayNames[d.getDay()];

        //concat 0
    if (hour < 10) {
        hour = "0" + hour;
    }
    if (sec < 10) {
        sec = "0" + sec;
    }
    if (min < 10) {
        min = "0" + min;
    }

    //for am pm and 12 hour time format
    if (hour >= 12) {
        amOrpm = "PM";
        hour = hour - 12;
    }

    document.getElementById("date").innerHTML = `${year} ${month} ${mday}, ${wday} :: ${hour} : ${min} : ${sec} ${amOrpm} `;
    // document.getElementById("clock").innerHTML = `${hour} : ${min} : ${sec} ${amOrpm}`;
};

setInterval(displayTime, 1000);

