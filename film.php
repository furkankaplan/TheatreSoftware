<?php include("Classes.php");?>
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
            margin-top:150px;
        }
    </style>
</head>

<body >


<?php 
include ("connect.php");
include ("navbar.php");  
?> 




<?php include("navbar.php");

$id=$_GET["k"];
$dizi = new Films();
$result = $dizi -> getFilmsByID($id);
$id = $dizi -> getID($result);
$film_adi = $dizi -> getFilmAdi($result);
$seans = $dizi -> getSeans($result);
$oyuncular = $dizi -> getOyuncular($result);
$ozet = $dizi -> getOzet($result);
$gosterim_tarihi = $dizi -> getGosterimTarihi($result);
$afis = $dizi -> getAfis($result);
$fragman = $dizi -> getFragman($result);

echo '<div class="row">
   
    <div class="col-md-6"><div class="embed-responsive embed-responsive-4by3 ">
          <iframe class="embed-responsive-item" src="'.$fragman.'"></iframe>
     </div>
    </div>
        <h4 class="text-center" value="'.$film_adi.'"></h4>
    
<div class="col-md-6">
    
    <div class="panel panel-default">
        <div class="panel-body">
                        <div class="row">
                <table class="dataTable-example table film-table">
                

                    <tbody>
                        <tr><td width="25%">Film İsmi:</td> <td>'.$film_adi.'</td> </tr>
                        <tr><td>Oyuncular: </td> <td>'.$oyuncular.'</td></tr>


                        <tr><td>Özet: </td> <td>'.$ozet.' </td></tr>


                        <tr><td>Seans Uzunluğu: </td><td>'.$seans.'</td></tr>

                        <tr><td colspan="2"><a class="btn btn-warning btn-xs pull-right" href="koltuk.php?x='.$id.'" role="button">Bilet Al</a</td></tr>

                     



                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



</div>';

?>

<div class="row" style="margin-top: 50px;">
<?php include ("footer.php") ?>
</div>
</body>
</html>