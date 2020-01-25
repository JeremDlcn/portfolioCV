let card = document.querySelectorAll('.skillContainer');
let percent = document.querySelectorAll('.percent');


const indexes = [45, 12, 56, 80, 90, 30, 60, 70];

for (let i = 0; i < card.length; i++){
	card[i].addEventListener('mouseenter', ()=>{
		let value = indexes[i];

		let y = 0;
		let inv = setInterval(()=>{
		   	if(y <= value)
		        percent[i].innerHTML = y++;
		    else
		        clearInterval(inv);
		}, 20)
			percent[i].textContent = y;

			
	});
}