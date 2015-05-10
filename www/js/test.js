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
            url: '/vote/applyVote',
            data: data,
            success: function (response) {
				var result = response;
				console.log(result);
	  }})
	  location.reload();
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
            url: '/vote/applyVote',
            data: data,
            success: function (response) {
				var result = response;
				console.log(result);
	  }})
	  location.reload();
}
this.button.addEventListener('click', this.vote.bind(this));
}
var objectArray2 = [];
var thumbsDownButtons = document.getElementsByClassName('glyphicon-thumbs-down');
for (var i = 0; i < thumbsDownButtons.length; ++i) {
objectArray2.push(ThumbsDownVote[i] = new ThumbsDownVote(thumbsDownButtons[i]));	

}

var Comment = function(commentParent) {

this.commentParent = commentParent,
this.form = this.commentParent.children[1],
this.button = this.commentParent.children[2].children[0],
this.location = this.form.getAttribute('data-location'),
this.comment = function(e) {
	var commentValue = this.form.value;
	var data = {value:commentValue,location:this.location};
	  $.ajax({
            type: 'POST',
            url: '/comment/applyComment',
            data: data,
            success: function (response) {
				var result = response;
				console.log(result);
	  }})
	  location.reload();
console.log('it worked???');	  
console.log(commentValue);
console.log(this.location);
}
this.button.addEventListener('click', this.comment.bind(this));
}

var objectArray3 = [];
var userCommentBox = document.getElementsByClassName('comment-box');
var foo = userCommentBox[4].getElementsByClassName('form-control')[0];
console.log(userCommentBox);
for (var i = 0; i < userCommentBox.length; ++i) {
objectArray3.push(Comment[i] = new Comment(userCommentBox[i]));
}
console.log(objectArray3);
})

