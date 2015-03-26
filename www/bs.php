<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<!-- Google Oswald Font -->
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- Navigation  -->
  <div class="container-fluid" id='me-top-nav'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style='color:black;'>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#me-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
      <a class="navbar-brand" href="#">noMad</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
<?php include 'nomad_topnav.php' ?>
    <!-- Content -->
	
	
<div class='container-fluid'>
	<div class='row'>
	<div class='col-sm-12'>
		<img style='margin:0 auto;' class="img-responsive" src="oldorchardbeach.jpg" alt="Canyons Square Top"/>
	</div>
</div>
<div class="row">
  <div style='border:1px solid black;' class="col-sm-4">
	<div style='margin:0 auto; width:90%; height:300px; background-color:blue;'>
		<div style='width:50%; height:50%; border-radius:25px; background-color:black; position:relative; left:25%;top:25%;'></div>
	</div>
  </div>
  <div style='border:1px solid black;' class="col-sm-4">
	<div style='margin:0 auto; width:90%; height:200px; background-color:blue;'></div>
  </div>
    <div style='border:1px solid black;' class="col-sm-4">
	<div style='margin:0 auto; width:90%; height:200px; background-color:blue;'></div>
  </div>
</div>
<div class='row'>
	<div class='col-sm-12'>
		<div style='width:1px;height:20px;'></div>
	</div>
</div>
<div class='row'>
	<div class='col-sm-12'>
		<div class="panel panel-default" >
		<div data-toggle='collapse' data-target='#coll1' class="panel-heading" style='margin:0 auto; background-color:yellow;'><p class='text-center'>Panel heading without title</div>
		<div id='coll1' class="panel-body collapse">
			Panel content
		</div>
		</div>
	</div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>