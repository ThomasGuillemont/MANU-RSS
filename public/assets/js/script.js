// LOGO LAPTOP LINK

let logolaptop = document.getElementById('logoLaptop');

logolaptop.addEventListener('click', () => {
	window.location.replace('http://myrssfeed.localhost/accueil');
})




// VARIABLES DARK MODE

let darkMode = document.getElementById('darkMode');
let darkModeMobile = document.getElementById('darkModeMobile');
let imgLogo = document.querySelector('.imgLogo');
let content = document.getElementById('content');
let bottomContent = document.querySelector('.bottomContentNav');

// AFFICHAGE DARK MODE
let trueVar = 1;
darkMode.addEventListener('change', () => {
    imgLogo.classList.toggle('darkModeEvent');
    content.classList.toggle('darkModeEvent');
    bottomContent.classList.toggle('darkSoftPurple');
	if(content.classList.contains('darkModeEvent')){
		logolaptop.src='../public/assets/img/MELT_Blanc.png';
	} else {
		logolaptop.src='../public/assets/img/MELT.png';
	}
})

darkModeMobile.addEventListener('change', () => {
    content.classList.toggle('darkModeEvent');
    bottomContent.classList.toggle('darkSoftPurple');
    imgLogo.classList.toggle('darkModeEvent');
})

// VARIABLES MODAL ET FERMETURE MODAL

var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
span.onclick = function() {
    modal.style.display = "none";
}

// 3 SELECTEURS MAX

function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onchange=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
            modal.style.display = "block";
			this.checked=false;
			}
		}
	}
}


let checkboxesSelection = document.querySelectorAll('.selectorLimit');

checkboxlimit(checkboxesSelection, 3);

