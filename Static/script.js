function renderClock() {

    //Date 
    var addDate = new Date();
    var year = addDate.getFullYear();
        if(year < 1000) {
            year += 1900
        }

    var day = addDate.getDay();
    var month = addDate.getMonth();
    var dayMonth = addDate.getDate();

    //Array for days in week
    var dayarray = new Array("Sunday" , "Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday");
    //var montharray = new Array("January" , "February" , "Marso" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December");

    month++;

    //For single digit month
    if(month < 10) {
        month = "0" + month;
    }

    //For single digit date
    if(dayMonth < 10) {
        dayMonth = "0" + dayMonth;
    }


    //Time
    var currentTime = new Date();
    var hrs = currentTime.getHours();
    var mins = currentTime.getMinutes();
    var sec = currentTime.getSeconds();

        //24 hours
        if(hrs == 24) {
            hrs = 0;
        }

        else if(hrs > 12) {
            hrs = hrs - 0;
        }

        //For single digit hour
        if(hrs < 10) {
            hrs = "0" + hrs;
        }

        //For single digit minutes
        if(mins < 10) {
            mins = "0" + mins;
        }

        //For single digit seconds
        if(sec < 10) {
            sec = "0" + sec;
        }
        

        //Display

        var myTime = document.getElementById("timeDisplay");
        myTime.textContent = hrs + ":" + mins + ":" + sec;
        myTime.innerText =  hrs + ":" + mins + ":" + sec;

       var myDate = document.getElementById("dateDisplay");
       myDate.textContent = dayarray[day] + ", " + dayMonth + "/" + month + "/" + year;
       myDate.innerText = dayarray[day] + ", " + dayMonth + "/" + month + "/" + year;

        setTimeout("renderClock()", 1000);

}

renderClock();