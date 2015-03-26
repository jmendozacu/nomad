var slideObject = function() {
	this.rightArrow = document.getElementById('click-to-open'),
	this.slideMenu = document.getElementsByClassName('slide-nav')[0],
	this.initializeListeners = function() {
		var slideMenu = this.slideMenu;
		var rightArrow = this.rightArrow;
		this.rightArrow.addEventListener('click', function(){
		if (slideMenu.getAttribute('style')){
			slideMenu.removeAttribute('style');
			rightArrow.setAttribute('class','glyphicon glyphicon-arrow-right');
		}
		
		else {
		slideMenu.setAttribute('style','width:150px;');
		rightArrow.setAttribute('class','glyphicon glyphicon-arrow-left');
		}
		
	})
}
}

var slideObject = new slideObject();
slideObject.initializeListeners();