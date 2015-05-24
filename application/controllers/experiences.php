<?php 
class ExperiencesController extends Controller {
	function __construct() {
		$title = 'noMad Survey';
		$description = 'Survey for seasonal and tourism employees';
		$keywords = 'livethenomadlife, seasonal employment, nomad, nomadic lifestyle, modern nomad, tourism industry, tourism, survey, ski resort, beach town, ski, beach, snowboard, vacation, my life is your vacation';
		$data = array('title'=> $title, 'description'=> $description, 'keywords' => $keywords);
$this->view('nomad_experiences.php', $data);
	}
}


?>