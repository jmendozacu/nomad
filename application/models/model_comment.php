<?php 
class Comment {
	public static function getLocations (){
	$userComments = array();
		$user = 'bcm811';
		$pass = 'poke811';
		$db = 'nomad';
		$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
		$sql2 = 'SELECT * FROM `comments_by_location` ORDER BY `location` DESC';
		$query2 = $conn->prepare($sql2);
		$query2->execute();
		$result = $query2->fetchall(PDO::FETCH_ASSOC);
		if ($result){		
			$comments = $result;
			return $comments;
			}
		else {echo 'something happened';}
		}
		public static function applyComment($location, $value) {
		$user = 'bcm811';
		$pass = 'poke811';
		$db = 'nomad';
		$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
		$sql = "INSERT INTO `comments_by_location` (`location`,`comment`) VALUES (?, ?)";
		$query = $conn->prepare($sql);
		$query->bindParam(1, $location);
		$query->bindParam(2, $value, PDO::PARAM_INT);
		if ($query->execute()) {
		echo 'Success!';
		} 
		else {
		echo 'Failure.';
		}

	
	}

}

?>