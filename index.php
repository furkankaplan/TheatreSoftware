<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Deneme Projesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script src="js/slider.min.js"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">	
	<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	
    <link href="css/ayar.css" rel="stylesheet">

    <style type="text/css">
    	body{
    		margin-top:50px;
    	}
    </style>
</head>

<body >


<?php 
include ("navbar.php");  
?> 



<div class="row" style=" margin-bottom: 150px;" >

<?php
include ("slider.php");
?>

</div>

<div class="row">
<h2 class="text-center">Vizyondakiler</h2>
<div class="row">
	<div class="col-md-4">
	<div class="panel panel-default">
	    <div class="panel-body">
			<img src="img/logan-dikey.jpg" class="img-responsive" alt=""/>
			<h4 class="text-center">Logan</h4>
	  </div>
	</div>
	</div>


	<div class="col-md-4">
	<div class="panel panel-default">
	    <div class="panel-body">
			<img src="img/martian-dikey.jpg" class="img-responsive" alt=""/>
			<h4 class="text-center">Martian</h4>
	  </div>
	</div>
	</div>

	<div class="col-md-4">
	<div class="panel panel-default">
	    <div class="panel-body">
			<img src="img/skyfall-dikey.jpg" class="img-responsive" alt=""/>
			<h4 class="text-center">Skyfall</h4>
	  </div>
	</div>
	</div>
	</div>
</div>


<div class="row">
	<h2 class="text-center">Gelecek Filmler</h2>

	<div class="row">
		<div class="col-md-4">
		<div class="panel panel-default">
	    <div class="panel-body">
			<img src="img/endersgame-dikey.jpg" class="img-responsive" alt=""/>
			<h4 class="text-center">Lucy</h4>
	  </div>
	</div>
	</div>
	
	<div class="col-md-4">
	<div class="panel panel-default">
	    <div class="panel-body">
			<img src="img/lucy-dikey2.jpg" class="img-responsive" alt=""/>
			<h4 class="text-center">Lucy</h4>
	  </div>
	</div>
	</div>
	
	<div class="col-md-4">
	<div class="panel panel-default">
	    <div class="panel-body">
			<img src="img/yesilyol-dikey.jpg" class="img-responsive" alt=""/>
			<h4 class="text-center">Godfather</h4>
	  </div>
	</div>
	</div>


	</div>


</div>

<?php
include ("footer.php");
?>

</body>
</html>





