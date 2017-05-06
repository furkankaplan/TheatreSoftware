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
    <script src="js/datatables.min.js"></script>
    <script src="js/jquery-3.2.0.slim.min.js"></script>
    <link href= "css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">    
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">  
     <link href="css/datatables.min.css" rel="stylesheet"> 
    <link href="css/ayar.css" rel="stylesheet">
  
</head>
<body>

<?php include ("connect.php"); ?>


    
    <div class="row ust-menu">

        <a href="logout.php"><button class="btn btn-menu pull-right">Oturumu kapat</button></a>
    </div>


    <div class="row">
      <div class="col-md-3">
            <?php include ("solmenu.php"); ?>
</div>


<div class="col-md-9">
<?php

$k=@$_GET["k"];

switch ($k) {

    case 'sosyal':
    include("medya.php");
    break;

    case 'profil':
    include ("profil.php");
    break;

    
                
    
}



?>
</div>


</body>
</html>