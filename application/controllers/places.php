<?php 
class PlacesController extends Controller {
	function __construct() {
		require_once '../application/models/model_vote.php';
		require_once 'vote.php';
		VoteController::getVotes();
		$this->view('nomad_places.php');
	}
}
?>