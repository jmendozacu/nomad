<?php include 'nomad_header.php' ?>
<?php include 'nomad_topnav.php' ?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<div class='container-fluid'>
<br></br>
<br></br>
<div class='row'>
<div class='col-md-12'>
<ul style='float:left;'>
	<li><a href='#massachussetts'>Massachussetts</a></li>
	<li><a href='#newhampshire'>New Hampshire</a></li>
	<li><a href='#maine'>Maine</a></li>
	<li><a href='#vermont'>Vermont</a></li>
	<li><a href='#rhodeisland'>Rhode Island</a></li>
	
</ul>
<ul style='float:left;'>
	<li><a href='#connecticut'>Connecticut</a></li>
</ul>
</div>
</div>
<div style='float:clear;'></div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<div class='container'><img style='margin:0 auto;' src='/img/colormapfinal.jpg'/></div>
	</div>
	<div class='col-md-3'>
</div>
<div class='row'>
	<div class='col-md-12'><p class='text-center'>So far I have covered 6 US States. They are far from complete, there are quite a few locations all over this wonderful country
	that although I'd like to, I'll never get to visit. I'll do my best to cover the location, but having input from fellow seasonal nomads is what will really help others. I'll soon be adding
	functionality to be able to submit a location yourself!
	</p></div>
</div>
<!-- VERMONT -->
<div class='row'>
<div class='col-md-12'>

<h1 class='text-center'><a name='vermont'>Vermont</a></h1>
</div> </div>
<!-- Stratton, VT -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Stratton, VT</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img data-featherlight='/img/stratton.jpg' class='img-responsive center-block' src='/img/stratton.jpg' alt='Stratton Mountain, VT'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Stratton_VT'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Stratton_VT'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Stratton_VT']}" ;
	echo "  Thumbs down: {$data[0][1]['Stratton_VT']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-left description'>Stratton Mountain is the largest ski mountain in southern VT. The closest urbanized area to it would be Brattleboro, VT a roughly 45 minute drive. It is 3 hours from Boston,
		and 4 hours from New York City. With 2000 ft of vertical none of the other resorts south of Killington can compete with Stratton for length of runs and world class snow making. I've personally ridden on quite a few
		east coast mountains, early season or bad season (no snow) and have come to the conclusion Stratton takes the cake for grooming and snowmaking. Even on the scariest of days a beginner can easily get down from
		the top of the gondola. They also just put in new gondola cars that look quite fancy although I have yet to ride in them. Now that I've dealt with the snow quality, I feel a big difference that Stratton offers to it's guests is
		it's village experience, most of the other resorts south of there in New England at least, don't have much to speak of for a village. Stratton has a veritable array of shops, bars and restaurants,all offering something special.
		I feel this, combined with the close proximity to NYC and Boston is the reason Stratton is known as a higher end mountain. You can definitely make really good money here working in the restaurants. Housing can leave
		something to be desired, if you have the money for the whole season upfront you can get a place pretty easy, but if you're paying month to month I'd look to some of the local inns first.
		<ul>
			<li><a href='http://stratton.com'>Stratton Official Website</a> Contains everything to know about the mountain</li>
			<li><a href='http://redfoxinn.com'>The Red Fox Inn</a> Inn at the bottom of Stratton's Access Road rents seasonal rooms</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Stratton_VT') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Stratton_VT'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Burlington, VT -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Burlington, VT</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/burlington.jpg' src='/img/burlington.jpg' alt='Burlington, VT'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Burlington_VT'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Burlington_VT'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Burlington_VT']}" ;
	echo "  Thumbs down: {$data[0][1]['Burlington_VT']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-left description'>Burlington is the largest city in Vermont. It lies on the shores of Lake Champlain an enormous body of water. Burlington is best known for it's Church St
		which is a pedestrian only street that runs multiple city blocks and showcases artisans of every craft, street performers, restaurants, bars and breweries. Burlington has long been
		known for being very progressive as a city, and now runs entirely on renewable energy! Being 40 minutes away from Mt. Stowe ski area and right on the shores of the lake, makes this
		a very desirable destination for tourists year round.
		</p>
		<ul>
			<li><a href='http://www.churchstmarketplace.com/'>Official Church St. Marketplace Site</a> A site built to inform you about everything to do with Church St</li>
			<li><a href='http://www.burlingtonfreepress.com/'>BurlingtonFreePress.com</a> A good local newspaper</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Burlington_VT') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Burlington_VT'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>


<!-- RHODE ISLAND -->
<h1 class='text-center'><a name='rhodeisland'>Rhode Island</a></h1>
<!-- Block Island, RI -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Block Island, RI</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/blockisland.jpg' src='/img/blockisland.jpg' alt='Cliffs on Block Island'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Block_Island_RI'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Block_Island_RI'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Block_Island_RI']}" ;
	echo "  Thumbs down: {$data[0][1]['Block_Island_RI']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-left description'>Block Island, RI is located 13 miles off the coast of Narragansett, RI. In the 2010 census it was determined 1,051 people live on a little over 
		9 square miles of land. This location was my first seasonal place, and it helped immensely to set me on the path which I took from there. There are many historic buildings on the island
		some over 200 years old. It's season operates from Memorial Day until Columbus Day (with it slowing down noticably after labor day). There are numerous hotels, restaurants, and bars to work at
		on the island, as well as boat marinas, moped rental shops, lifeguard and beach positions, as well as landscaping. Housing can be rather difficult to find if you do not get it from your employer,
		but I've known people to buy a cheap boat, sail it to Block Island, and park it all summer long to live on it. Cars are definitely not needed, I made it the whole 6 months with a 
		bicycle and saw nearly the whole island. Make sure you go to one of the multiple Rebecca's Seafood and Takeout spots on the island for one of their famous Monster Chicken wraps.
		</p>
		<ul>
			<li><a href='http://blockisland.com'>BlockIsland.com</a> The islands flagship website</li>
			<li><a href='http://www.blockislandinfo.com/'>Block Island Tourism Council Website</a> Lots of information about this wonderful place</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Block_Island_RI') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Block_Island_RI'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>

<!-- Narragansett, RI -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Narragansett, RI</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/narragansett.jpg' src='/img/narragansett.jpg' alt='Narragansett Beach and Seawall'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Narragansett_RI'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Narragansett_RI'></span></p>
	</div>
		<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Narragansett_RI']}" ;
	echo "  Thumbs down: {$data[0][1]['Narragansett_RI']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'> The town of Narragansett, RI is located on a small strip of land in between a river and the Narragansett Bay. It's year round community is roughly 15,000
		with it more than doubling to around 34,000 in the summer. It is home to many smaller communities with names like "Bonnet Shores" and "Eastward Look". There are multiple beaches
		running along the coastline, with some even requiring an entry fee to people on foot. Ferries to multiple other locations close by can be taken out of the seaport of Galilee. The beer
		Naragansett Lager, was named after this town. There are many restaurants and shops along the stretch of this community and it makes for a lively tourist scene.
		</p>
		<ul>
			<li><a href='http://www.narragansettri.gov/'> NarragansettRI.gov</a> Government website for the town of Narragansett</li>
			<li><a href='http://www.durkincottages.com/'> Durkin Realty</a> A local realtor in Narragansett that specializes in sea cottage rentals</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Narragansett_RI') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Narragansett_RI'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div> 
<!-- Newport, RI -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Newport, RI</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/newport.jpg' src='/img/newport.jpg' alt='Mansions on Newports Cliffs'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Newport_RI'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Newport_RI'></span></p>
	</div>
		<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Newport_RI']}" ;
	echo "  Thumbs down: {$data[0][1]['Newport_RI']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'> Newport, RI is a seaside city on Aquidneck Island. A major 18th-century port city, 
		Newport now contains among the highest number of surviving colonial buildings of any city in the United States. With a bustling downtown section with taverns, shops, and all
		kinds of restaurants there is no shortage of activity. There are many beautiful beaches, Newport Second Beach being my personal favorite. There are many historic cliff-side mansions
		like the one pictures that litter the picturesque shoreline of Newport. Not a far drive from downtown there is also a gaming casino, The Newport Grand.
		</p>
		<ul>
			<li><a href='http://www.cityofnewport.com/'>City of Newport</a> Newport's local government website</li>
			<li><a href='http://www.newportri.com/newportdailynews/'> Newport Local Newspaper</a> A good place to start if trying to live in Newport</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Newport_RI') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Newport_RI'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- CONNECTICUT -->
<h1 class='text-center'><a name='connecticut'>Connecticut</a></h1>
<!-- Niantic, CT -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Niantic, CT</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/niantic.jpg' src='/img/niantic.jpg' alt='/img/niantic.jpg'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Niantic_CT'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Niantic_CT'></span></p>
	</div>
		<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Niantic_CT']}" ;
	echo "  Thumbs down: {$data[0][1]['Niantic_CT']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>Niantic, CT is a village located inside of East Lyme, CT. Niantic Bay is a very popular summer destination for boating, swimming, and fishing. Rocky Neck State Park
		offers a mile of beach with views of long island sound, and some of the only sandy beach area in Connecticut. The Niantic Yacht Club organizes races a couple of adays a week in the summertime.
		</p>
		<ul>
			<li><a href='http://theblacksheepniantic.com/'>The Black Sheep Tavern</a> A local favorite</li>
			<li><a href='http://www.discovereastlyme.com/'>East Lyme Tourism</a> Things to do while in East Lyme</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Niantic_CT') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Niantic_CT'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Mystic, CT -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Mystic, CT</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/mystic.jpg' src='/img/mystic.jpg' alt='Aerial view of Mystic, CT'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Mystic_CT'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Mystic_CT'></span></p>
	</div>
		<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Mystic_CT']}" ;
	echo "  Thumbs down: {$data[0][1]['Mystic_CT']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'> Mystic, CT is best known for the Mystic Aquarium and Institute for Exploration as well as Mystic Seaport, which is the largest
		maritime museum of it's kind. Being right on the Mystic River with bridges connecting to the different parts of the town, it definitely gives you the feel of an 18th century fishing community.
		</p>
		<ul>
			<li><a href='www.mystic.org'>mystic.org</a> Gives a broad overview about everything Mystic and the surrounding areas have to offer.</li>
			<li><a href='http://www.mysticaquarium.org/'>Mystic Aquarium</a> The aquarium's website showing what they have available</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Mystic_CT') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Mystic_CT'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- MASSACHUSSETTS-->
<h1 class='text-center'><a name='massachussetts'>Massachussetts</a></h1>
<!-- Cape Cod, MA -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Cape Cod, MA</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'>
	</div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/capecod.jpg' src='/img/capecod.jpg' alt='Aerial view of Cape Cod and the Islands'/>
	</div>
	<div class='col-md-3'></div>
	</div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Cape_Cod_MA'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Cape_Cod_MA'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Cape_Cod_MA']}" ;
	echo "  Thumbs down: {$data[0][1]['Cape_Cod_MA']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-left description'>I used this picture to show the scale of how large the area known as "Cape Cod" is. You can also see the islands of <a href='#Marthas_Vineyard_MA'>
		Martha's Vineyard</a>, <a href='#Nantucket_MA'>Nantucket</a>, and Block Island (part of Rhode Island). Cape Cod is home to quite a few towns and villages, all of them see their economies boom in the few shorts
		months that comprise the summer season. Generally the rule is once the kids are out of school (mid-June) until they go back (1st week of September) is the whole season. All communities on the cape have some form of
		year round population and economy but the further out the arm you go the less likely you are to find too many jobs in the winter time unless you like to fish. The whole of the Cape has 559.6 miles of unspoiled coastline. If
		you like coastal areas Cape Cod simply cannot be beat for ease of access and activities available.
		</p>
		<ul>
			<li><a href='http://www.capecodchamber.org/'>Cape Cod Chamber of Commerce</a> Quite a well put together website giving details about much of what the Cape has to offer</li>
			<li><a href='http://www.capecod.com/'>Cape Cod Dot Com</a>Website with news and current events about Cape Cod as well as promotional offers!</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Cape_Cod_MA') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Cape_Cod_MA'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Martha's Vineyard, MA -->
<a name='Marthas_Vineyard_MA'></a>
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Martha's Vineyard, MA</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/marthasvineyard.jpg' src='/img/marthasvineyard.jpg' alt='Picture of Marthas Vineyard gingerbread houses'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Marthas_Vineyard_MA'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Marthas_Vineyard_MA'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Marthas_Vineyard_MA']}" ;
	echo "  Thumbs down: {$data[0][1]['Marthas_Vineyard_MA']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-left description'>Located just a 30 minute ferry ride out of the fishing and research community of Wood's Hole, in Falmouth, MA,  Martha's Vineyard sits south of Cape Cod. Also referred to as just "the vineyard" the island
sees much traffic from daytrippers and overnight vacationers. Year round population is 14k. In the summertime it can swell to over 100k. There a four different towns on Martha's Vineyard: Vineyard Haven (Tisbury), West Tisbury, 
Edgartown,and Oak Bluffs. There are many employers who will hire you from afar here and provide employee housing. It is possible to get your own housing on islands but it will be at least 30% more expensive and you'll probably
have to cough up a large chunk up front to prove you mean business. The island has many summer homes that are owned by the rich and famous, movie stars included.
		<ul>
			<li><a href='http://www.mvy.com'>Martha's Vineyard Chamber of Commerce</a> Up to date commerce website ith everything island related</li>
			<li><a href='http://www.mvtimes.com/'>Martha's Vineyard Times</a> Newspaper, always worth a look at the classified for housing and employment</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Marthas_Vineyard_MA') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Marthas_Vineyard_MA'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Provincetown, MA -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Provincetown, MA</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/provincetown.jpg' src='/img/provincetown.jpg' alt='Provincetown Shoreline View'/>
	</div>
	<div class='col-md-3'>
	</div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Provincetown_MA'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Provincetown_MA'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Provincetown_MA']}" ;
	echo "  Thumbs down: {$data[0][1]['Provincetown_MA']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>Provincetown, MA is located on the very end of the peninsula or the "arm" of Cape Cod. It takes a solid 90 minutes of driving from when you first drive over one of the bridges
		onto the Cape Cod land mass, to get to Provincetown. It is very remote for being connected by road to the rest of the state. Known as one of the largest LBGT communites in the country, and also a very active fishing port,
		Provincetown is host to a variety of people from all walks of life. The town is extremely built up for a beach community and there is something going on every night of the week. Day time tourism is just as high with families coming out
		in large numbers to enjoy the shops that the main strip has to offer. There are natural wonders along the beaches and shoreline that are rare even for a place as beautiful as Cape Cod. You can definitely have a great summer working-with-us-en
		out here, and with the right job make a bunch of money too!
		</p>
		<ul>
			<li><a href='http://ptownchamber.com'>Provincetown Chamber of Commerce</a> Website with the details of Provincetown</li>
			<li><a href='http://provincetown.wickedlocal.com/'>WickedLocal Provincetown Edition</a></li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Provincetown_MA') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Provincetown_MA'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Nantucket, MA -->
<a name='Nantucket_MA'></a>
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Nantucket, MA</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/nantucket.jpg' src='/img/nantucket.jpg' alt='Nantucket seaside'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Nantucket_MA'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Nantucket_MA'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Nantucket_MA']}" ;
	echo "  Thumbs down: {$data[0][1]['Nantucket_MA']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>Nantucket is an island 30 miles south of Cape Cod, it is what could be described as a modern functioning late 18th - early 19th century seaport town. Also known as the grey lady, Nantucket has an
		astonishing amount of foggy days per year. During the summer season Nantucket is playground of the ultra wealthy and elite. If Martha's Vineyard is home to the movie stars mansions, Nantucket is where the directors come
		to play. If you take the slow ferry it is 2.5 hours long. There are some amazing land formations and breath taking views. Island life can be hard, and the remoteness of Nantucket isn't for everyone.If you like the idea of being isolated
		from the rest of the world then maybe Nantucket might be for you.
		</p>
		<ul>
			<li><a href='http://www.ack.net/'>The Inquirer and Mirror</a> This is where you go to get the local feel, you can buy and sell anything you'd need on an island, and find housing</li>
			<li><a href='http://nantucket.wickedlocal.com/'>Nantucket Wicked Local Newspaper</a> Another local island newspaper with classifieds</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Nantucket_MA') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Nantucket_MA'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Wachussett Mountain, Massachussetts -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Wachussett, MA</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/wachussett.jpeg' src='/img/wachussett.jpeg' alt='Wachussett Mountain'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Wachussett_MA'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Wachussett_MA'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php 
	echo "Thumbs up: {$data[0][0]['Wachussett_MA']}" ;
	echo "  Thumbs down: {$data[0][1]['Wachussett_MA']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center'>Located just an hour outside of Boston, Wachussett Ski Area is one of the largest ski areas in Massachussetts. With over 1000 ft of vertical you can get decently long runs for a smaller resort.
		</p>
		<ul>
			<li><a href='wachussett.com'>Wachussett Ski Area</a> Website for Wachussett</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Wachussett_MA') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Wachussett_MA'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>


<!-- NEW HAMPSHIRE -->
<h1 class='text-center'><a name='newhampshire'>New Hampshire</a></h1>
<!-- Portsmouth, NH -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Portsmouth, NH</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/portsmouth.jpg' src='/img/portsmouth.jpg' alt='Portsmouth NH Harbor'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/>

<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Portsmouth_NH'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Portsmouth_NH'></span></p>
	</div>
	<div class='col-md-6'>
	<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Portsmouth_NH']}" ;
	echo "  Thumbs down: {$data[0][1]['Portsmouth_NH']}";
	?></div>
	</div>
</div>
<br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>
		With a population of 21,000 Portsmouth, NH has a larger year round population than many other tourist destinations but still keeps its small town charm. It is a historic seaport with quite a lot of history. With 86 bars
		and restaurants in town someone would have no problem at all finding a summer time job here to make money. With multiple beaches available within 20 minutes from the city, one can live and work in a city but still
		visit gorgeous beaches in a short drive.
		</p>
		<ul>
			<li><a href='http://www.portsmouthnh.com/downtown/'>Portsmouth, NH</a> Official Website</li>
			<li><a href='http://www.wentworth.com/careers/'>Wentworth by the Sea, New Castle, NH</a> 10 minutes away from downtown Portsmouth, Wentworth offers exciting opportunites in hospitality!</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
				
			<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Portsmouth_NH') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Portsmouth_NH'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Hampton Beach, NH -->
	<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Hampton Beach, NH</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/hampton.jpg' src='/img/hampton.jpg' alt='Hampton Beach traffic'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Hampton_Beach_NH'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Hampton_Beach_NH'></span></p>
	</div>
	<div class='col-md-6'>
	<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Hampton_Beach_NH']}" ;
	echo "  Thumbs down: {$data[0][1]['Hampton_Beach_NH']}";
	?></div>
	</div>
</div>
<br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>
		Hampton Beach is a village-district within the town of Hampton, New Hampshire. It is the most visited tourist destination in the state. It is home to many gorgeous beaches within close proximity to town. Ocean Gaming Casino
		draws big spenders into the area. Big name shows are also available for viewing at the Hampton Beach Casino Ballroom. 
		</p>
		<ul>
			<li><a href='http://www.casinoballroom.com/'>Hampton Beach Casino Ballroom</a> Musical acts and other shows year round</li>
			<li><a href='http://www.oceangamingcasino.com/'>Ocean Gaming Casino</a> Charitable gambling casino where 35% of the house winnings goes to charity</li>
		</ul>
	</div>
		<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'> 
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Hampton_Beach_NH') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Hampton_Beach_NH'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
</div>
<!-- North Conway, NH -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>North Conway, NH</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/northconway.jpg' src='/img/northconway.jpg' alt='North Conway Main St'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='North_Conway_NH'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='North_Conway_NH'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['North_Conway_NH']}" ;
	echo "  Thumbs down: {$data[0][1]['North_Conway_NH']}";
	?></div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>
		North Conway is a year round resort destination. Located in between the White Mountain National Forest and the border of Maine, it is the largest village within the town of Conway. With so much to do within just a few
		minutes drive its no wonder people come here with the family for vacations. There's Mt Washington 22 minutes away (highest peak in the Northeastern United States at 6,288 ft) , Mt. Cranmore Ski Area is literally under
		a five minute drive from town and offers 100% snowmaking on its trails. There's also climbing at Cathedral Ledge and an antique train that runs a route through town.
		</p>
		<ul>
			<li><a href='http://www.cranmore.com/summer/jobs_summer'>Cranmore Mountain Resort</a> Cranmore's Official Website with current Job listings</li>
			<li><a href='http://www.newporthotelgroup.com/employment/working-with-us-en.html'>North Conway Grand Hotel</a> North Conway's Grand Hotel Employment page, they offer employee housing!!</li>
		</ul>
	</div>
		<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'> 
							<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'North_Conway_NH') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='North_Conway_NH'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>


<br/><br/>
<!-- Loon, NH -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Loon Mountain, NH</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/loon.jpg' src='/img/loon.jpg' alt='Gondola at Loon'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Loon_NH'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Loon_NH'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Loon_NH']}" ;
	echo "  Thumbs down: {$data[0][1]['Loon_NH']}";
	?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center'>Loon description
		</p>
		<ul>
			<li><a href='http://www.loonmtn.com/human-resources'>Loon Mountain Human Resources</a> Loon's Official website, check out the employment page and all the pictures of the mountain!</li>
			<li><a href='http://www.lincolnwoodstock.com/'>Lincoln, NH CoC</a> Chamber of Commerce for the closest town to Loon, NH</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Loon_NH') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Loon_NH'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>

<br/><br/>
<!-- MAINE -->

<h1 class='text-center'><a name='maine'>Maine</a></h1>

<!-- Millinockett, Maine-->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Millinocket, Maine</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/millinocket.jpg' src='/img/millinocket.jpg' alt='Millinockett, Maine'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Millinockett_ME'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Millinockett_ME'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Millinockett_ME']}" ;
	echo "  Thumbs down: {$data[0][1]['Millinockett_ME']}";
	?></div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>
		With a population of only around 4500 year round residents Millinocket is definitely a small town in the middle of the expansive forest of northern Maine. Come here if you are seeking adventure. This is close
		to one of the last outposts of human civilization going north or west further into Maine.
		Millinocket Lake is drained by the West Branch Penobscot River and Millinocket Stream, and is 9 miles (14 km) northwest of town. 
		Millinocket is the closest town to Mount Katahdin, located in Baxter State Park 20 miles (32 km) to the northwest. At an elevation 5,270 feet (1,610 m), its summit is the highest point in Maine.
		The town is crossed by State Route 11 and 157. The town of East Millinocket is located 8 miles (13 km) to the east.</p>
		<ul>
			<li><a href='www.neoc.com'>New England Outdoor Center</a> Snowmobiling, White Water Rafting and guided hikes of Katahdin</li>
			<li><a href='http://www.penobscotadventures.com/'>Penobscot Adventures</a>White water rafting and River boarding on the Penobscot river</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] ==='Millinockett_ME') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Millinockett_ME'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Bar Harbor, ME -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Bar Harbor, Maine</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/barharbor.jpg' src='/img/barharbor.jpg' alt='Bar Harbor, Maine'/>
	</div>
	<div class='col-md-3'></div>
</div>

<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Bar_Harbor_ME'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Bar_Harbor_ME'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Bar_Harbor_ME']}" ;
	echo "  Thumbs down: {$data[0][1]['Bar_Harbor_ME']}";
	?></div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>Bar Harbor is a town on Mount Desert Island in Hancock County, Maine, United States. It is an island accessed by bridge, it is also home to Acadia National Park and the highest
		peak within 25 miles of the coastline of the eastern United States. There is a bustling downtown section and with so many different activities for vacationers its no wonder it is such a huge tourist destination in the
		summer and fall. I personally know multiple people who keep coming back to work here every year, the money is good and the place can be magical! The main thing here is finding housing,  since the island 
		has a finite amount of housing, and the commute from off island can take up to an hour or more during high tourist times its best to secure housing on island early even if it costs a little bit more.
		</p>
		<ul>
			<li><a href='http://www.oplhotels.com/employment/'>OPL Hotels</a> Ocean Properties Resorts and Hotels is a large company owning many hotels in Bar Harbor</li>
			<li><a href='http://www.nps.gov/acad/index.htm'>Acadia National Park</a> The official website for Acadia National Park</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Bar_Harbor_ME') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Bar_Harbor_ME'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
</div>
<!-- Sugarloaf, ME -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Sugarloaf, Maine</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/sugarloaf.jpg' src='/img/sugarloaf.jpg' alt='Sugarloaf, Maine'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Sugarloaf_ME'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Sugarloaf_ME'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Sugarloaf_ME']}" ;
	echo "  Thumbs down: {$data[0][1]['Sugarloaf_ME']}";
	?></div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>With it's peak standing at 4237' and a continous vertical drop of 2820' Sugarloaf is the largest ski resort east of the Mississippi in terms of skiable acreage 1230.
		A 2 hour drive from Portland, ME it is not TOO far from a major city, but is far enough away from Boston and New York (6 and 9 hours respectively) where only the hardcore skiers from that far south
		make it up. You obviously get the unwashed masses coming in droves for Christmad Vacation, MLK Jr Day, and school vacation weeks, but it is nice to be on the mountain mid-week and be able to not see another
		soul your whole run.  The side country available is amazing and guaranteed the best in the east. An entire basin is available that is only glades, and eventually dumps you back out at a lift, or you can choose
		to traverse a short hike to a neighboring peak, and STILL make it back to the lift. ReggaeFest in the spring is one of the largest organized events in Maine every year, bringing over 10,000 people to the mountain to
		celebrate good times and good music.
		</p>
		<ul>
			<li><a href='http://www.sugarloaf.com'>Sugarloaf</a> Sugarloaf's offical website, check out the employment page and all the pictures of the mountain!</li>
			<li><a href='http://www.thebagandkettle.com'>The Bag and Kettle</a> My favorite place to get a burger when I'm on the mountain!</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Sugarloaf_ME') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Sugarloaf_ME'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
<!-- Sunday River, ME -->
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Sunday River, Maine</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/sundayriver.jpg' src='/img/sundayriver.jpg' alt='Sunday River, Maine'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Sunday_River_ME'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Sunday_River_ME'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Sunday_River_ME']}" ;
	echo "  Thumbs down: {$data[0][1]['Sunday_River_ME']}";
	?></div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>Located in Newry, Maine just barely 3 hours from Boston, Sunday River is nearly a straight shot up I-95 into southern Maine. Known for being open for halloween when the weather cooperates,
		Sunday River beat out Arapahoe Basin in Colorado for first ski resort to open in the continental United States in 2010. With 870 acres of skiable terrain available it is second largest for east coast ski resorts. This place gets
		busy every single weekend. Being so close to Portland, ME and Boston, MA there is no shortage of businesses or lodges to work at.
		</p>
		<ul>
			<li><a href='http://www.sundayriver.com'>Sunday River</a> Sunday River's Official website, check out the employment page and all the pictures of the mountain!</li>
			<li><a href='http://www.bethelmaine.com/'>Bethel, ME CoC</a> Chamber of Commerce for the closest town to Sunday River</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Sunday_River_ME') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Sunday_River_ME'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
	</div>
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>Ogunquit, Maine</p>
	</div>
</div>
<div class='row'>
<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='/img/ogunquit.jpg' src='/img/ogunquit.jpg' alt='Ogunquit, Maine'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>

<!-- Ogunquit, ME -->
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='Ogunquit_ME'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='Ogunquit_ME'></span></p>
	</div>
	<div class='col-md-6'>
		<div class='text-center vote-border'><?php
	echo "Thumbs up: {$data[0][0]['Ogunquit_ME']}" ;
	echo "  Thumbs down: {$data[0][1]['Ogunquit_ME']}";
	?></div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>Ogunquit,  means "beautiful place by the sea" in the indigenous Abenaki language. I must say, having been there myself, it really is a beautiful place by the sea. Many Mainers affectionately refer
		to the town as 'northern Massachussetts' because of how close it is to Boston. People start coming here as early as memorial day, and continue coming until all the leaves have fallen off the trees. Ogunquits Marginal Way,
		a one and a quarter mile long trail with views of the coast, is neatly paved and the treacherous cliffs are, in places, fenced. The path leads from the downtown shopping area to the fishing village in Perkins Cove, 
		now an outdoor mall of jewelry, clothing and candle boutiques. Ogunquit is also heralded as an LGBT destination with many of its tourists and business owners being of the LGBT community.
		</p>
		<ul>
			<li><a href='http://www.ogunquit.org/'>Ogunquit Chamber of Commerce</a> Where to get the local info</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php 
				foreach ($data[1] as $array) {
					if ($array['location'] === 'Ogunquit_ME') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='Ogunquit_ME'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>


</div>
</html>


<script src='/js/test.js'></script>
<?php 
include 'nomad_footer.php'?>

<!-- FORMAT FOR NEW LOCATIONS -->
<!--
<div class = 'row'>
	<div class='col-md-12'>
		<p class='text-center h1'>LOCATION</p>
	</div>
</div>
<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
		<img class='img-responsive center-block' data-featherlight='IMG SOURCE' src='IMG SOURCE' alt='IMAGE ALT'/>
	</div>
	<div class='col-md-3'></div>
</div>
<br/><br/>
<div class='row'>
	<div class='col-md-6'>
		<p class='text-center' style='font-size:2em;'>Vote  <span class='glyphicon glyphicon-thumbs-up' data-location='LOCATION'></span>  <span class='glyphicon glyphicon-thumbs-down' data-location='LOCATION'></span></p>
	</div>
		<div class='col-md-6'>
		<div class='text-center vote-border'><?php /*
	echo "Thumbs up: {$data[0][0]['LOCATION']}" ;
	echo "  Thumbs down: {$data[0][1]['LOCATION']}";
	*/?>
	</div>
	</div>
</div>
<div class='row'>
	<div class='col-md-6'>
		<p class='description'>DESCRIPTION
		</p>
		<ul>
			<li><a href='FIRST LINK'>LINK NAME</a>DESCRIPTION OF WEBSITE</li>
			<li><a href='SECOND LINK'>LINK NAME</a> DESCRIPTION OF WEBSITE</li>
		</ul>
	</div>
	<div class='col-md-6'>
		<div class='comment-box'>	
			<div class='php-comment-output'>
						<?php /*
				foreach ($data[1] as $array) {
					if ($array['location'] === 'LOCATION') {
						echo "<div class='row'>
						<div class='col-sm-3'>
										<strong>User Review :</strong> 
								 </div>
								 <div class='col-sm-9'>
										{$array['comment']}
								</div></div><br/>";
					}
				}
			*/?>
			</div>
				<input type="text" class="form-control" placeholder="Text input" data-location='LOCATION'></input>
				<div class='button-holder'>
				<button type='submit'>Submit</button>
			</div>
			</div>
	</div>
	</div>
	-->

<br/><br/>