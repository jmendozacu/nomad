<?php 
class CommentController extends Controller {
	public static function getLocationInfo() {
	require_once '../application/models/model_comment.php';
	$var = Comment::getLocations();
	return $var;
	}
	public function applyComment() {
		$location = $_POST['location'];
		$value = $_POST['value'];
		require_once '../application/models/model_comment.php';
		$var = Comment::applyComment($location,$value);
		if ($var) {
			return 'this is working';
		}
		else {
			return 'error';
		}
	}
}

?>