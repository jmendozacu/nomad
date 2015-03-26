document.addEventListener('DOMContentLoaded', function(){
	var glyphs = document.getElementsByClassName('glyphicon-thumbs-up');
	console.log(glyphs);
	glyphs[0].addEventListener('click', function(){
		var data = {value:1, location:glyphs[0].getAttribute('data-location')};
		$.ajax({
			type:'POST',
			url: '/controller/controller_vote.php',
			data: data,
			success: function (response) {
				var result = response;
				console.log(result);
			}
		})
	})
})




/*
this.vote = function(e) {
	var data = {value:this.voteValue(),location:this.location};
	var location = this.location-1;
	  $.ajax({
            type: 'POST',
            url: 'enter_vote.php',
            data: data,
            success: function (response) {
				var result = response;
				console.log(result);
				var avgData = document.getElementsByClassName('avg')[location];
				avgData.innerHTML= 'Average Value:'+result;
	  }})*/