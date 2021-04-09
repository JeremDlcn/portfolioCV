let card = document.querySelectorAll('.skillContainer');
let percent = document.querySelectorAll('.percent');


const indexes = [];
percent.forEach(elt => indexes.push(elt.textContent));

card.forEach((elt,i) => {
	elt.addEventListener('mouseenter', ()=>{
		let value = indexes[i];
		let y = 0;
		let inv = setInterval(() => {
			if (y <= value)	percent[i].innerHTML = y++;
			else clearInterval(inv);
		}, 15)
		percent[i].textContent = y;
	});
})


