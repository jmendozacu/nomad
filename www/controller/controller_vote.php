<?php 
	require_once '../model/model_vote.php';
	//$getAll();
	$location = $_POST['location'];
	$value = $_POST['value'];
	$bool = $value;
	
	$result = Vote::insertVote($location,$bool);

	if ($result) {
		return 'It mustve worked';
	}
	else return 'Something went wrong';

?>