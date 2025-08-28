const date = document.getElementById('date');
const time = document.getElementById('time'),
greeting = document.getElementById('greeting'),
name = document.getElementById('name'),
focus = document.getElementById('focus'),
day = document.getElementById('day');
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
let x = new Date();
let d;

function showDate() {

d = x.toLocaleString( 'default', {
	month: 'Long',
	day:'string',
	year:'long'	;
});

document.getElementById("date").innerHTML = d;

}

// Run
showDate();
showTime();
addZero();
setBgGreet();
showDay();