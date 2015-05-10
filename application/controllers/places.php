<?php 
class PlacesController extends Controller {
	function __construct() {
		require_once '../application/models/model_vote.php';
		require_once '../application/models/model_comment.php';
		require_once '../application/controllers/vote.php';
		require_once '../application/controllers/comment.php';
		$votes = VoteController::getLocationInfo();
		$comments = CommentController::getLocationInfo();
		$data = array($votes, $comments);
		$this->view('nomad_places.php', $data);
	}
}
?>