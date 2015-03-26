<?php 

var_dump($_POST);
echo 'unsanitized';
foreach ($_POST as $a){
	var_dump($a);
}


function cleanInput($input) {
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );
 
    $output = preg_replace($search, '', $input);
    return $output;
  }

function sanitize($input) {
	$server = 'localhost';
$dbname = 'aplaceg7_nomad';
$username = 'aplaceg7_brian';
$password = 'poke811';

$conn = mysqli_connect($server, $username, $password, $dbname);


    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysqli_real_escape_string($conn,$input);
		
    
	
}
 return $output;   
}
	$server = 'localhost';
$dbname = 'aplaceg7_nomad';
$username = 'aplaceg7_brian';
$password = 'poke811';

$conn2 = mysqli_connect($server, $username, $password, $dbname);
  $_POST = sanitize($_POST);
  $sanvars = $_POST;
  echo 'sanitized';
  var_dump($_POST);
  
$command = "INSERT INTO survey (`years`,`original-location`,`all-locations`,`favorite-location`,`first-job`,`all-jobs`,`favorite-job`,`opinion`,`email`) 
VALUES ('{$sanvars['years']}','{$sanvars['original-location']}','{$sanvars['all-locations']}','{$sanvars['favorite-location']}','{$sanvars['first-job']}','{$sanvars['all-jobs']}','{$sanvars['favorite-job']}','{$sanvars['opinion']}','{$sanvars['email']}')";
$success = $conn2->query($command);
if ($success) {
	echo 'success';
	
  header('Location: http://aplaceformyhead.org/nomad/nomad_success.php');
  exit;

//http_redirect('aplaceformyhead.org/nomad/nomad_success.php');
}
else{
	echo $conn2->error;
}
 

  
  
?>