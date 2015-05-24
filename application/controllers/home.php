<?php 
class HomeController extends Controller {
	function __construct() {
		$title = 'noMad Life';
		$description = 'Guide to living seasonally, review and vote on resort towns, learn how to see the world AND make great money doing it!';
		$keywords = 'livethenomadlife, seasonal employment, nomad, nomadic lifestyle, modern nomad, tourism industry, tourism, survey, ski resort, beach town, ski, beach, snowboard, vacation, my life is your vacation';
		$data = array('title'=>$title, 'description'=> $description, 'keywords'=>$keywords);
$this->view('home.php', $data);
	}
}


?>