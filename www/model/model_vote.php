<?php
class Vote {
    public static function insertVote ($location,$bool){
	$user = 'bcm811';
	$pass = 'poke811';
	$db = 'nomad';
	$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
	
	$sql2 = "INSERT INTO `votes_by_location` (`$location`) VALUES ('$bool')";
	$query2 = $conn->prepare($sql2);
	$query2->execute();
	$result = $query2->fetchall(PDO::FETCH_ASSOC);
	return $result;
}
}
?>