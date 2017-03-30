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
    <link href= ="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">    
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">  
     <link href="css/datatables.min.css" rel="stylesheet"> 
    <link href="css/ayar.css" rel="stylesheet">
  
</head>
<body>

<?php include ("film_db.php"); ?>


<script>

$(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength : 25,
        responsive : true
    });

    
});

</script>
    
    <div class="row ust-menu">

        <button class="btn btn-menu pull-right">Oturumu kapat</button>
    </div>


    <div class="row">
        <div class="col-md-3">
            <?php include ("solmenu.php"); ?>
        </div>


    </div>
</body>
</html>