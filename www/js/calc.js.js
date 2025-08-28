// DOM ELEMENTS
const time = document.getElementById('time'),
greeting = document.getElementById('greeting'),
name = document.getElementById('name'),
focus = document.getElementById('focus'),
day = document.getElementById('day'),
month = document.getElementById('month');
// SHOW TIME
function showTime() {
	let today = new Date(),	
	hour = today.getHours(),
	min = today.getMinutes(),
	sec = today.getSeconds();

//Set AM or PM
const amPm = hour >= 12 ? 'PM':'AM';

//12hr Format
hour = hour % 12 || 12;



//Output Time
time.innerHTML = `${addZero(hour)}<span>:</span>${addZero(min)}<span>:</span>${addZero(sec)}`

setTimeout(showTime, 1000);

}

function addZero(n) {
	return(parseInt(n, 10) < 10 ? '0' : '' ) + n;
}


// Set Background and Greeting
function setBgGreet() {
	let today = new Date(),
		hour = today.getHours();

	if ( hour < 12) {
		//Morning
		document.body.style.backgroundImage = "url('../img/morning.jpg')";
		greeting.textContent = 'Good Morning';
		// document.body.style.fontWeight:'bold';
	}else  if( hour < 17) {
		//Afternoon
		document.body.style.backgroundImage = "url('../img/afternoon.jpg')";
		greeting.textContent = 'Good Afternoon';
	}
	else {
		//Evening
		document.body.style.backgroundImage = "url('../img/evening.jpg')";
		greeting.textContent = 'Good Evening';
		 // document.body.style.color:'black';
	}
	
}
function showDay() {
var day;
switch (new Date().getDay()) {
    case 0:
        day = "Sunday";
        break;
    case 1:
        day = "Monday";
        break;
    case 2:
        day = "Tuesday";
        break;
    case 3:
        day = "Wednesday";
        break;
    case 4:
        day = "Thursday";
        break;
    case 5:
        day = "Friday";
        break;
    case 6:
        day = "Saturday";
	}
	document.getElementById("day").innerHTML = day;
}

function showMonth() {
var month;
switch (new Date().getMonth()) {
    case 0:
       month = "January";
        break;
    case 1:
       month = "February";
        break;
    case 2:
       month = "March";
        break;
    case 3:
       month = "April";
        break;
    case 4:
       month = "May";
        break;
    case 5:
       month = "June";
        break;
    case 6:
       month = "July";
        break;
    case 7:
       month = "August";
        break;
    case 8:
       month = "September";
        break;
    case 9:
       month = "October";
        break;
    case 10:
       month = "Novemeber";
        break;
    case 11:
       month = "Decemeber";
        break;
       }
	document.getElementById("month").innerHTML = Month;
}
	
// Run
showTime();
addZero();
setBgGreet();
showDay();
showMonth();