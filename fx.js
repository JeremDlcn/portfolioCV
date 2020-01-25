let card = document.querySelectorAll('.skillContainer');
let percent = document.querySelectorAll('.percent');


const indexes = [50, 40, 25, 30, 90, 90, 95, 20];

for (let i = 0; i < card.length; i++){
	card[i].addEventListener('mouseenter', ()=>{
		let value = indexes[i];

		let y = 0;
		let inv = setInterval(()=>{
		   	if(y <= value)
		        percent[i].innerHTML = y++;
		    else
		        clearInterval(inv);
		}, 15)
			percent[i].textContent = y;

			
	});
}