<?php 
class PlacesController extends Controller {
	function __construct() {
		require_once '../application/models/model_vote.php';
		require_once '../application/controllers/vote.php';
		$data = VoteController::getLocationInfo();
		$this->view('nomad_places.php', $data);
	}
}
?>