

<?php 
// Inserting comment to test GIT here!!
	require_once '/model_test_comment.php';
	//$getAll();
	$result = Comment::getAll();
	$location_1 = array();
	$location_2 = array();
	$location_3 = array();
	
	foreach ($result as $row){
		if (strlen($row['1'])!=0) {
			array_push($location_1, $row['1']);
		}
		if (strlen($row['2'])!=0) {
			array_push($location_2, $row['2']);
		}
		if (strlen($row['3'])!=0) {
			array_push($location_3, $row['3']);
		}
	}
	
	
	eval ('?>' . file_get_contents ('view_test_comment.php'));

?>