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

<body>

<?php 

include ("connect.php");

$id=@$_GET["id"];

$filmler = $db ->prepare("select * from filmler where id=? ");
$filmler -> execute(array($id));
$dizi = $filmler -> fetch(PDO::FETCH_ASSOC);

$isim = $dizi["film_adi"];
$oyuncular = $dizi["oyuncular"];
$ozet = $dizi["ozet"];
$sira_no = $dizi["sira_no"];
$poster = $dizi["afis"];
$fragman = $dizi["fragman"];
$tarih = $dizi["gosterim_tarihi"];
$id=$dizi["id"];

 ?>

<?php include("navbar.php"); ?>

   
    <div class="row">
    <div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-body">
        <img src="img/logan-dikey.jpg" class="img-responsive" alt=""/>
        <h4 class="text-center" value="<?php echo $isim ?>"></h4>
    </div>
    </div>
    </div>
<div class="col-md-8">
    
    <div class="panel panel-default">
        <div class="panel-body">
                        <div class="row">
                <table class="dataTable-example table table-striped">
                <thead>
                    <tr>
                        <th>Film Adı</th>
                        <th>Gösterim Tarihi</th>
                        
                        
                    </tr>
                    </thead>

                    <tbody>
                      <?php 
                     $filmler = $db ->prepare("select * from filmler");
                     $filmler -> execute(array());
                     $dizi = $filmler -> fetchALL(PDO::FETCH_ASSOC);

                     foreach ($dizi as $elements) {
                        $id = $elements["id"];
                        $film_adi= $elements["film_adi"];
                        $sira_no = $elements["sira_no"];
                        $gosterim_tarihi = $elements["gosterim_tarihi"];

                        echo ' <tr>
                        <td>'.$film_adi.'</td>
                        <td>'.$gosterim_tarihi.'</td>
                        
                        
                        </tr>';


                     }



                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



</div>

</body>