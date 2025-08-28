

	const mobileBtn = document.getElementById('mobile-cta');
		nav = document.querySelector('nav');
		mobileBtnExit = document.getElementById('mobile-exit');

	mobileBtn.addEventListener('click', () => {
		nav.classList.add('menu-btn');
	})

	mobileBtnExit.addEventListener('click', () => {
		nav.classList.remove('menu-btn');
	});

// var prevScrollpox = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollpos = window.pageYOffset;
// 	if (prevScrollpox > currentScrollpos) {
// 		document.getElementById("hide-header").style.top = "0";
// 	} else{
// 		document.getElementById("hide-header").style.top = "-80px;" /*adjust the height of your header*/
// 	}
// 	prevScrollpox = currentScrollpos;
// }
// intersection observer
const observer = new IntersectionObserver((entries)) => {
	entries.forEach((entry)) = >{
		console.log(entry) = >
		if(entry.isIntersecting){
			entry.target.classList.add('show');
		} else {
			entry.target.classList.remove('show');
		}
	});
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el)) = > observer.observe((el));