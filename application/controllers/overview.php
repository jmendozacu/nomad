<?php 
class OverviewController extends Controller {
	function __construct() {
		$title = 'noMad Overview';
		$description = 'An overview of the nomadic seasonal lifestyle, how it can change your life, and the pros and cons';
		$keywords = 'livethenomadlife, seasonal employment, seasonal jobs, nomad, nomadic lifestyle, modern nomad, tourism industry, tourism, survey, ski resort, beach town, ski, beach, snowboard, vacation, my life is your vacation';
		$data = array('title'=>$title, 'description'=>$description, 'keywords'=>$keywords);
$this->view('nomad_overview.php', $data);
	}
}


?>