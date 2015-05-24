<?php 
class PlacesController extends Controller {
	function __construct() {
		require_once '../application/models/model_vote.php';
		require_once '../application/models/model_comment.php';
		require_once '../application/controllers/vote.php';
		require_once '../application/controllers/comment.php';
		$votes = VoteController::getLocationInfo();
		$comments = CommentController::getLocationInfo();
		$title = 'noMad Places';
		$description = 'A list of seasonal tourist towns with brief descriptions, with the ability to share your experiences and opinions about each';
		$keywords = 'livethenomadlife, seasonal employment, seasonal jobs, nomad, nomadic lifestyle, modern nomad, tourism industry, tourism, survey, ski resort, beach town, ski, beach, snowboard, vacation, my life is your vacation';
		$data = array($votes, $comments, 'title'=>$title, 'description'=>$description, 'keywords'=>$keywords);
		$this->view('nomad_places.php', $data);
	}
}
?>