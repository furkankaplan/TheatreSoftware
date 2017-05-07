<?php include_once "Classes.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">	
	<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	


    <link href="css/ayar.css" rel="stylesheet">

 

</head>
<body>

<?php 

include ("connect.php");

$id=$_GET["y"];


if(isset($_GET["t"])){
    $dizi = new Tiyatrolar();
    $result = $dizi -> getTiyatrolarByID($id);

    $film = $dizi -> getTiyatroAdi($result);
    $oyuncular = $dizi -> getOyuncular($result);
    $ozet = $dizi -> getOzet($result);
    $seans = $dizi -> getSeans($result);
    $poster = $dizi -> getAfis($result);
    $tarih = $dizi -> getGosterimTarihi($result);
}else{

    $dizi = new Films();
    $result = $dizi -> getFilmsByID($id);

    $film = $dizi -> getFilmAdi($result);
    $oyuncular = $dizi -> getOyuncular($result);
    $ozet = $dizi -> getOyuncular($result);
    $seans = $dizi -> getSeans($result);
    $poster = $dizi -> getAfis($result);
    $tarih = $dizi -> getGosterimTarihi($result);

}

 ?>


	<?php 
$isim = @$_POST["name"];
$soyisim = @$_POST["surname"];
$telno = @$_POST["telNumber"];
$emailadress = @$_POST["email"];
$bilettip = @$_POST["selectticket"];
$koltuksayisi =@$_POST["ticketNums"];
$cost =@$_POST["ucret"];
$koltuk = @$_POST["koltuknumarasi"];





$biletler=explode(" ",$koltuk);

$toplam_bilet= count($biletler);



foreach($biletler as $eleman){
  
  $koltuk_adi = $eleman;

   $sorgu=$db->prepare("update koltuklar set durum='0' where koltuk_adi=?");
   $guncelle=$sorgu -> execute(array($koltuk_adi));

   if($guncelle){
    ?>
    <div class="row">

    <?php include ("navbar.php");?>



      <div class="col-md-8 col-md-offset-2" style="margin-top:100px;">
        <div class="panel panel-default ticket-panel">

        <div class="panel-heading text-center">
          <h4>Bilet Bilgileriniz</h4>

        </div>

        <div class="panel-body text-center">
          
        
          
          <div class="row">
            <?php 
            echo'
            <table class="table table-bordered table-striped">
             <tr>
              <td  colspan="2" width="40" style="text-align:left;">';
            echo isset($_GET["tiyatro"])?"Tiyatro":"Film";
                echo ' İsmi:</td>
              <td  colspan="4" style="text-align:left;">'.$film.'</td>
             </tr>
             <tr>
             <td colspan="2">Bilet Bilgileri:</td>
             <td colspan="1">'.$koltuk.'</td>
             <td colspan="2">'.$tarih.' '.$seans.'</td>
             <td colspan="1">'.$cost.'&nbsp;<i class="fa fa-try" aria-hidden="true"></i></td>
             </tr>
            <tr><td class="text-center"  colspan="6">Müşteri Bilgileri</td></tr>
            <tr>
              <td  colspan="2"> '.$isim.' '.$soyisim.'  </td>
              <td  colspan="2"> '.$emailadress.' </td>
              <td  colspan="2">  '.$telno.' </td>
            </tr>
            </table>
            ';?>
          </div>

        </div>

        <div class="panel-footer text-center">
          <h6>Bizi tercih ettiğiniz için teşekkür ederiz.</h6>
          <a href="index.php"><button  id="btn-payment"  class="btn btn-danger btn-payment" >Ana Sayfaya Dön</button></a>
        </div>

        </div>

      </div>

    </div>

    <?php include ("footer.php") ?>



    
    <?php 
   }

   else {
    $hatam=$sorgu->errorInfo();
  echo $hatam[2]."<br>";
    }
   }



?>


</body>
</html>