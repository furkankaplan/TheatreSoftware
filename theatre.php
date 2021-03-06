<?php include "connect.php";?>
<?php include_once "Classes.php";?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Deneme Projesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script src="js/jquery-3.2.0.slim.min.js"></script>
    <link href= ="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/hover.css" rel="stylesheet">	
		<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	

    <link href="css/ayar.css" rel="stylesheet">
  
</head>

<script>
    function goToTiyatro(id){
        location = "tiyatro.php?k="+id;
    }
</script>

<body>
    <div class="row">    <?php include 'navbar.php'; ?></div>

    <div class="container" style="margin-left: auto; margin-top: 59px;">


        <?php
        $obj = new Tiyatrolar();
        $dizi = $obj -> getTiyatrolarByGosterimTuru(0); // 0: vizyondakiler, 1: gelecek filmler
        foreach ($dizi as $elements){
            $poster = $obj -> getAfis($elements);
            $tiyatro_adi = $obj -> getTiyatroAdi($elements);
            $yonetmen = $obj -> getYonetmen($elements);
            $gosterim_tarihi = $obj -> getGosterimTarihi($elements);
            $oyuncular = $obj -> getOyuncular($elements);
            $fid = $obj -> getID($elements);

            echo'
        
        
        <div class="col-md-8 col-md-offset-2 cont-movie" >
            <div class="row movie">
                <div class="col-md-4">
                    <img src="img/'.$poster.'" alt="" class="img-responsive img-movie">
                </div>
                <div class="col-md-6 col-md-offset-2">
                <h3>'.$tiyatro_adi.'</h3>

                <br>
                Yönetmen: '.$yonetmen.'

                <br>

                Gösterim tarihi:'.$gosterim_tarihi.'

                <br>

                Oyuncular: '.$oyuncular.'


                <br>


                   <input type="submit"  value=" Ayrıntılı Bak"   class="btn btn-warning pull-right" onclick="goToTiyatro('.$fid.')">
                </div>
            </div>
            
        </div>
        
        
        ';
        }

        ?>

    </div>
    </div>
<?php include 'footer.php'; ?>

</body>