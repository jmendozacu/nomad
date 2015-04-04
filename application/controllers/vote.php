<?php 
class VoteController extends Controller {
	public static function getLocationInfo() {
	require_once '../application/models/model_vote.php';
	$var = Vote::getLocations();
	return $var;

	}






	/*public static function getVotes() {
		require_once '../application/models/model_vote.php';
$votes = Vote::getAll();
	$thumbsUp = array('Portsmouth_NH'=>0,'Hampton_Beach_NH'=>0);
	$locations = array('Portsmouth_NH', 'Hampton_Beach_NH');	
	foreach ($votes as $array){
		foreach ($locations as $location) {
			if ($array["$location"] === $location){
			$thumbsUp["$location"] = $thumbsUp[$location]+1;
			}
		}
	}
	return $thumbsUp;
	}

*/
}
VoteController::getLocationInfo();
?>