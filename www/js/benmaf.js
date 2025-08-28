








// const inputBox = document.getElementById("tst1");
// // const inputBox = document.getElementById("tst2");
// // const inputBox = document.getElementById("exam");
// // const inputBox = document.getElementById("bfwd");
// const listContainer = document.getElementById("list-container");

// function addTask(){
// 	if(tst1.value === ''){
// 		alert("you must write something!");
// 	}

// 	else{
// 	let li = document.createElement("li");
// 	li.innerHTML = tst1.value;
// 	// li.innerHTML = tst2.value;
// 	// li.innerHTML = exam.value;
// 	// li.innerHTML = bfwd.value;
// 	listContainer.appendChild(li);
// 	let span = document.createElement("span");
// 	span.innerHTML = "\u00d7";
// 	li.appendChild(span);

// 	}
// 	tst1.value = "";
// 	saveData();
// }

// function saveData(){
// 	localStorage.setItem("data", listContainer.innerHTML);
// }
// function showTask(){
// 	listContainer.innerHTML = localStorage.getItem("data");
// }
// showTask();