const projet = document.querySelectorAll('.projectContainer');

for (let i = 0; i < projet.length; i++){
	projet[i].addEventListener('click', ()=>{
		template(database[i]);
	});
}



function template(data) {
	let tech = data.techno;
	let carousel = data.sides;
	const details = document.createElement('dialog');
	const main = document.createElement('main');
	const vue = document.createElement('section');
	const more = document.createElement('section');
	const preview = document.createElement('section');
	const info = document.createElement('section');
	const frontImg = document.createElement('img');
	const div1 = document.createElement('div');
	const div2 = document.createElement('div');
	const div3 = document.createElement('div');
	const text = document.createElement('p');
	const techno = document.createElement('h2');
	const title = document.createElement('h3');
	const link = document.createElement('a');
	const out = document.createElement('img');
	const category = document.createElement('b');
	const date = document.createElement('b');
	const close = document.createElement('img');
	
	details.id = "details";
	more.className = "more";
	out.src = "img/out.png";
	close.src = "img/close.png";
	close.className = "close";
	link.innerText = "Voir";
	preview.className = "main-img";
	info.className = "info";
	techno.innerText ="Technologies utilisées";


	title.innerText = data.title;
	category.innerText = data.category;
	date.innerText = data.date;
	text.innerText = data.description;
	link.href = data.link;
	frontImg.src = "img/" + data.cover;


	for (let i = 0; i < tech.length; i++){
		let used = document.createElement('div');
		let icon = document.createElement('img');
		let techname = document.createElement('p');
		used.className = "used";
		icon.src = "img/" + data.techno[i].img;
		techname.innerText = data.techno[i].name;
		used.appendChild(icon);
		used.appendChild(techname);
		div3.appendChild(used);
	}


	for (let y = 1; y <= carousel; y++){
		const side = document.createElement('img');
		side.src = "img/" + data.title + "/" + y + ".png";
		more.appendChild(side);
	}


	div2.appendChild(category);
	div2.appendChild(date);
	div1.appendChild(title);
	link.appendChild(out);
	div1.appendChild(link);
	info.appendChild(div1);
	info.appendChild(div2);
	info.appendChild(text);
	info.appendChild(techno);
	info.appendChild(div3);
	preview.appendChild(frontImg);
	vue.appendChild(preview);
	vue.appendChild(info);
	main.appendChild(vue);
	main.appendChild(more);
	details.appendChild(close);
	details.appendChild(main);
	document.querySelector('body').appendChild(details);
	open();
}

function tech(id) {
	icon.src = "img/js.png";
	techname.innerText = "Javascript"
}

function open() {
	details.showModal();

	document.querySelector('dialog').addEventListener('click', function(event) {
	  if(!event.target.closest('main')) {
	    	event.target.remove();
	  }
	});
	document.querySelector('.close').addEventListener('click', function(event) {
		document.querySelector('#details').remove();
	});


	let zoom = document.querySelectorAll('.more img');
	for (let i = 0; i < zoom.length; i++){
		zoom[i].addEventListener('click', ()=>{
			if (zoom[i].classList.contains('activate')) {
				zoom[i].classList.remove('activate');
			}
			else {
				for (let o = 0; o < zoom.length; o++){
					zoom[o].classList.remove('activate');
					zoom[o].title = '';
				}
				zoom[i].classList.add('activate');
				zoom[i].title = 'Cliquez sur l\'image pour revenir en arrière'
			}
		});
	}
}



// Copy 
document.querySelector('#copyButton').addEventListener('click', ()=>{
	let copyText = document.querySelector('#contact input');
	copyText.select();
	document.execCommand("copy");

	let containCopy = document.createElement('div');
	containCopy.className = "copy";
	document.querySelector('#contact > div').appendChild(containCopy);
	setTimeout(()=>{
		document.querySelector('.copy').classList.add('final');
	},50);
	setTimeout(()=>{
		document.querySelector('.copy').textContent = "Lien copié ✔";
	},500);
	setTimeout(()=>{
		document.querySelector('.copy').remove();
	},2000);

});
