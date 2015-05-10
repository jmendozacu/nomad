<?php 
class VoteController extends Controller {
	public static function getLocationInfo() {
	require_once '../application/models/model_vote.php';
	$var = Vote::getLocations();
	return $var;
	}
	public function applyVote() {
if (isset($_POST['location'])){
$location = $_POST['location'];
$value = $_POST['value'];
require_once '../application/models/model_vote.php';
$var2 = Vote::applyVote($location,$value);
if($var2){
return "this is working";
}
else {
	return "error";
}
}
else {return;}


}
}
VoteController::getLocationInfo();

?>