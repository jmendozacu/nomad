<?php 

echo $_POST['user-comment'];
$entry = $_POST['user-comment'];

$user = 'aplaceg7_brian';
$pass = 'poke811';
$db = 'aplaceg7_scratch';

$conn = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

if ($conn) {
echo '<br/>it connected!';
}
else {
echo 'there is a problem somewhere';
}
$sql = "INSERT INTO `test_comment`(`user_comment`) VALUES ('$entry') ";
$query = $conn->prepare($sql);
$query->execute();

if ($query->execute()){
echo '<br/> it added to the db!';
} 
else {
echo '<br/> there was a problem entering into db';
}

$sql2 = 'SELECT * FROM`test_comment`';
$query2 = $conn->prepare($sql2);
$query2->execute();
$result = $query2->fetchall(PDO::FETCH_ASSOC);
$array = array();
foreach  ($result as $row){
	$array = $row;
}

print_r($array);


	//foreach ($values as $b){
	//echo "<br/> User Comment: $b";
	





?>