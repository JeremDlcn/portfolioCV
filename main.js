	function open(){
					document.querySelector('.menu').classList.toggle('on');
					document.querySelector('.circle').classList.toggle('on');
					var elementArray = document.querySelectorAll('.bar');
						for (var i = 0; i < elementArray.length; i++) {
							elementArray[i].classList.toggle('erase');
					}
			}
			document.querySelector('.button').addEventListener('click', open);
			document.querySelector('.arrow').addEventListener('click', open);
			document.querySelector('ul').addEventListener('click', open);