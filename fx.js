let card = document.querySelectorAll('.skillContainer');
let percent = document.querySelectorAll('.percent');

for (let i = 0; i < card.length; i++){
	card[i].addEventListener('mouseenter', ()=>{
		let value = Number(percent[i].textContent);

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