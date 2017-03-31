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
include ("connect.php");
include ("navbar.php");  
?> 





<?php 

$x=@$_GET["x"];

switch ($x) {
	

	default:
	include ("film-main.php");
	break;
	
}?>


<?php
include ("footer.php");
?>

</body>
</html>





