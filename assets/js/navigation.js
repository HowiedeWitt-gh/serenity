(function(){

'use strict';


const button =
document.querySelector('.menu-toggle');


const menu =
document.querySelector('.main-navigation');


if(!button || !menu){
	return;
}


button.addEventListener(
'click',
function(){

const expanded =
this.getAttribute('aria-expanded') === 'true';


this.setAttribute(
'aria-expanded',
String(!expanded)
);


menu.style.display =
expanded ? 'none':'block';


});

})();