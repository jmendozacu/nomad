document.addEventListener('DOMContentLoaded', function(){
// OOP


var ThumbsUpVote = function(button) {

this.button = button,
this.location = this.button.getAttribute('data-location'),
this.form = document.getElementsByTagName('select')[this.order],
this.voteValue = 1,
this.vote = function(e) {
	var data = {value:this.voteValue,location:this.location};
	  $.ajax({
            type: 'POST',
            url: 'controller/controller_vote.php',
            data: data,
            success: function (response) {
				var result = response;
				console.log(result);
	  }})
}
this.button.addEventListener('click', this.vote.bind(this));
}
var objectArray = [];
var thumbsUpButtons = document.getElementsByClassName('glyphicon-thumbs-up');
for (var i = 0; i < thumbsUpButtons.length; ++i) {
objectArray.push(ThumbsUpVote[i] = new ThumbsUpVote(thumbsUpButtons[i]));	

}

var ThumbsDownVote = function(button) {

this.button = button,
this.location = this.button.getAttribute('data-location'),
this.form = document.getElementsByTagName('select')[this.order],
this.voteValue = 0,
this.vote = function(e) {
	var data = {value:this.voteValue,location:this.location};
	  $.ajax({
            type: 'POST',
            url: 'controller/controller_vote.php',
            data: data,
            success: function (response) {
				var result = response;
				console.log(result);
	  }})
}
this.button.addEventListener('click', this.vote.bind(this));
}
var objectArray2 = [];
var thumbsDownButtons = document.getElementsByClassName('glyphicon-thumbs-down');
for (var i = 0; i < thumbsDownButtons.length; ++i) {
objectArray2.push(ThumbsDownVote[i] = new ThumbsDownVote(thumbsDownButtons[i]));	

}
})