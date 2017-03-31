<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Deneme Projesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

     <link href="css/imageupload.css" rel="stylesheet"> 

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
   
   
	<link href="css/hover.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">	
	<link href="css/jasny-bootstrap.min.css" rel="stylesheet">
     	
		
	 <script src="js/imageupload.js"></script>	
    <link href="css/ayar.css" rel="stylesheet">

 

</head>
<body>


<div class="row ust-menu">

	<a href="slider.php?x=slideekle"><button class="btn btn-menu pull-right">Slider Ekle</button></a>
	<button class="btn btn-menu pull-right">Oturumu kapat</button>
</div>

<div class="row">

<div class="col-md-3">
    <?php include ("solmenu.php"); ?>
</div>


<div class="col-md-9">

<?php

$x=@$_GET["x"];

switch ($x) {
  

    case 'slideekle': include("slide-ekle.php");
    break;
                
    default:
    include("slider-index.php"); 
    break;
}



?>

</div>
</div>

</body>
</html>