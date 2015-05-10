<?php

class Vote {
    public static function getLocations (){
$thumbsUp = array();
$thumbsDown =  array();
$all = array($thumbsUp, $thumbsDown);
	$user = 'bcm811';
	$pass = 'poke811';
	$db = 'nomad';
	$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
	$sql2 = 'SELECT * FROM `votes_by_location` ORDER BY `location` DESC';
	$query2 = $conn->prepare($sql2);
	$query2->execute();
	$result = $query2->fetchall(PDO::FETCH_ASSOC);
	if ($result){		
		$votes = $result;
		foreach ($votes as $array) {
			if ($array['value'] === '1'){
			array_push($thumbsUp, $array['location']);
			}
			if ($array['value'] === '0'){
				array_push($thumbsDown, $array['location']);
			}
			
		}
		$thumbsUp = array_count_values($thumbsUp);
		$thumbsDown = array_count_values($thumbsDown);
		return array ($thumbsUp, $thumbsDown);
		
	}
	else {echo 'something happened';}
}
	public static function applyVote($location, $value) {
		$user = 'bcm811';
		$pass = 'poke811';
		$db = 'nomad';
		$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
		$sql = "INSERT INTO `votes_by_location` (`location`,`value`) VALUES (?, ?)";
		$query = $conn->prepare($sql);
		$query->bindParam(1, $location);
		$query->bindParam(2, $value, PDO::PARAM_INT);
		if ($query->execute()) {
		echo 'Success!';
		} else {
		echo 'Failure.';
		}

	
	}

}

?>