<!DOCTYPE html>
<html lang="en">

	<?php include 'nomad_header.php'?>
  
  <body>
  <?php include 'nomad_topnav.php' ?>
  <br></br>
  <br></br>
  <div class='container-fluid'>
    <div class='row'>
		<div class='col-md-12 text-center' style='font-size:3em;'>Your Seasonal Experience</div>
	</div>
  
	<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			<br></br>
			<strong>Reason I need this information:</strong>
			<br></br>
			<p>I am in the process of creating a website that is for seasonal/tourism industry people.
			A guidebook. Also a place where people can exchange ideas and make educated decisions 
			about where they should move next, what companies they should work for, ect. I really appreciate 
			everyone's input, stay tuned for more!</p></div>
		<div class='col-md-3'></div>
	</div>
	<br></br>
	<br></br>
	<div class='row'>
		
		<div class='col-md-12'>
		<form action='../www/nomad_handler.php' name='survey' method='post'>
			  <div class="form-group">
				<label for="years">How many years have you worked as a seasonal employee?</label>
					<select name='years'>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3' >3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7+</option>
					</select>
			  </div>
			  <div class="form-group">
				<label for="original-location">Where did your seasonal life start for you? City, State, Country</label>
				<input type="text" class="form-control" name='original-location' id="original-location" placeholder="City, State, Country">
			  </div>
			  <div class="form-group">
				<label for="all-locations">List all the locations you have lived during your seasonal life:</label>
				<input type="text" class="form-control" name='all-locations' id="all-locations" placeholder="All">
			  </div>
			  <div class="form-group">
				<label for="favorite-location">Out of all the locations you have lived which one was your favorite?</label>
				<input type="text" class="form-control" name='favorite-location' id="favorite-location" placeholder="Favorite Location">
			  </div>
			  <div class="form-group">
				<label for="first-job">What was your first job in a tourist location?</label>
				<input type="text" class="form-control" id="first-job" name='first-job' placeholder="Job">
			  </div>
			  <div class="form-group">
				<label for="all-jobs">List all the seasonal jobs you've had since then:</label>
				<input type="text" class="form-control" id="all-jobs" name='all-jobs' placeholder="All">
			  </div>
			  <div class="form-group">
				<label for="favorite-job">Which job was your favorite?</label>
				<input type="text" class="form-control" id="favorite-job" name='favorite-job' placeholder="Favorite Job">
			  </div>
				<div class="form-group">
				<label for="opinion">I'm interested to hear anything else you have to say about the industry and any experience you have gleaned from this lifestyle. Write as much as you want!</label>
				<textarea row='5' class="form-control" id="opinion" name='opinion' placeholder="Your input is valued!"></textarea>
			  </div>
			    <div class="form-group">
				<label for="email">Your email if you'd like to participate in future surveys about this lifestyle. I promise there won't be any spam from me!</label>
				<input type="text" class="form-control" id="email" name='email' placeholder="email">
			  </div>
			  <button type="submit" method='post' class="btn btn-default">Submit</button>
</form>

				
	</div>
  </div>
  
  </body>
     <?php include 'nomad_footer.php' ?>
  </html>