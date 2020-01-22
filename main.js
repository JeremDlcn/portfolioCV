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
		console.log(data.techno[i].img);
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
		event.target.parentElement.remove();
	});

}














/*		<dialog id="details">
			<main>
				<section>
					<section class="main-img">
						<img src="img/cow-snack.png">
					</section>
					<section class="info">
						<div>
							<h3>Voilier Handicap</h3>
							<a href="https://">Voir<img src="img/out.png" alt="Voir le site"></a>
						</div>
						<div>
							<b>IoT & Mobile</b>
							<b>12 Février 2020</b>	
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<h2>Technologies utilisées</h2>
						<div>
							<div class="used">
								<img src="img/js.png">
								<p>Javascript</p>
							</div>
							<div class="used">
								<img src="img/js.png">
								<p>Javascript</p>
							</div>
							<div class="used">
								<img src="img/js.png">
								<p>Javascript</p>
							</div>
						</div>
					</section>
				</section>
				<section class="more">
					<img src="img/univership.png">
					<img src="img/univership.png">
					<img src="img/univership.png">
				</section>
			</main>	
		</dialog> */