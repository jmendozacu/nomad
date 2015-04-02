<?php 
class ControllerVote extends Controller {
	function __construct() {
	require_once '../application/models/model_vote.php';     
	$votes = Vote::getAll();
	var_dump($votes);
	$length = count($votes);
	$thumbsUpVotes['Portsmouth_NH'] = array();
	$thumbsUpVotes['Hampton_Beach_NH'] = array();
	for ($i = 0; $i <$length; $i++) {
		if ($votes[$i]['Portsmouth_NH'] === '1') {
			array_push($thumbsUpVotes['Portsmouth_NH'],$votes[$i]['Portsmouth_NH']);
		}
	}
			for ($i = 0; $i <$length; $i++) {
		if ($votes[$i]['Hampton_Beach_NH'] === '1') {
			array_push($thumbsUpVotes['Hampton_Beach_NH'],$votes[$i]['Hampton_Beach_NH']);
		}
	}
}
}

?>