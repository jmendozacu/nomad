<?php
class Vote {
    public static function getAll (){
	$user = 'bcm811';
	$pass = 'poke811';
	$db = 'nomad';
	$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
	$sql2 = 'SELECT * FROM `votes_by_location`';
	$query2 = $conn->prepare($sql2);
	$query2->execute();
	$result = $query2->fetchall(PDO::FETCH_ASSOC);
	if ($result) {
	return $result;
	}
	else {return 'there was a problem';}
}
}
?>