let zoom = document.querySelectorAll('.more img');


for (let i = 0; i < zoom.length; i++){
	zoom[i].addEventListener('click', ()=>{
		zoom[i].classList.toggle('activate');
	});
}