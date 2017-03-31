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

$filmler = $db ->prepare("select * from filmler where id=? ");
$filmler -> execute(array($id));
$dizi = $filmler -> fetch(PDO::FETCH_ASSOC);

$fisim = $dizi["film_adi"];
$oyuncular = $dizi["oyuncular"];
$ozet = $dizi["ozet"];
$seans = $dizi["seans"];
$poster = $dizi["afis"];
$fragman = $dizi["fragman"];
$tarih = $dizi["gosterim_tarihi"];
$id=$dizi["id"];

 ?>


	<?php 
$isim = $_POST["name"];
$soyisim = $_POST["surname"];
$telno = $_POST["telNumber"];
$emailadress = $_POST["email"];
$bilettip = $_POST["selectticket"];
$koltuksayisi =$_POST["ticketNums"];
$cost =$_POST["ucret"];
$koltuk = $_POST["koltuknumarasi"];




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
				<table class="table">
   			 <tr>
   			 	<td  colspan="2">Oyun İsmi</td>
   			 	<td  colspan="2">'.$fisim.'</td>
   			 </tr>
   			 <tr>
   			 	<td  colspan="2">Seans</td>
   			 	<td  colspan="2">'.$seans.'</td>
   			 </tr>

   			 <tr>
   			 	<td  colspan="2"> '.$bilettip.' </td>
   			 	<td  colspan="1"> '.$koltuk.'  </td>
   			 	<td  colspan="2"> '.$cost.' ₺ </td>
   			 </tr>
   			<tr><td class="text-center"  colspan="5">Müşteri Bilgileri</td></tr>
   			<tr>
   				<td  colspan="2"> '.$isim.' '.$soyisim.'  </td>
   				<td  colspan="1"> '.$emailadress.' </td>
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
</body>
</html>