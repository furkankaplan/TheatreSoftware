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
</head>
<body>


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
				
				<table class="table">
   			 <tr>
   			 	<td  colspan="2">Oyun İsmi</td>
   			 	<td  colspan="2">İsim</td>
   			 </tr>
   			 <tr>
   			 	<td  colspan="2">Seans</td>
   			 	<td  colspan="2">Saat&Tarih</td>
   			 </tr>

   			 <tr>
   			 	<td  colspan="2"><?php echo $bilettip; ?></td>
   			 	<td  colspan="1"><?php echo $koltuk; ?> </td>
   			 	<td  colspan="2"><?php echo $cost ;?>₺ </td>
   			 </tr>
   			<tr><td class="text-center"  colspan="5">Müşteri Bilgileri</td></tr>
   			<tr>
   				<td  colspan="2"><?php echo $isim; ?> <?php echo $soyisim; ?> </td>
   				<td  colspan="1"><?php echo $emailadress; ?></td>
   				<td  colspan="2"><?php echo $telno; ?></td>
   			</tr>
   			</table>
			</div>

		</div>

		<div class="panel-footer text-center">
			<h6>Bizi tercih ettiğiniz için teşekkür ederiz.</h6>
		</div>

		</div>

	</div>

</div>

<footer>
	<div class="container">
		<div class="row">
		<div class="col-md-4 col-xs-4">
			<h3>Biz Kimiz</h3>
			<p>Suspendisse potenti. In sagittis efficitur nulla, sed scelerisque massa elementum.</p>
		</div>
		
		<div class="col-md-4 col-xs-4 col-md-offset-2 col-xs-offset-2  ">
			<ul class="listoflist">
				<li><a href="#">Ana Sayfa</a><li>
				<li><a href="#">Hakkımızda</a><li>
				<li><a href="#">Seanslar</a><li>
				<li><a href="#">Filmler</a><li>
				<li><a href="#">Salonlarımız</a><li>
				<li><a href="#">İletişim</a><li>
			</ul>
		</div>
		
		<div class="col-md-2 col-xs-2 social">
			<h3>Sosyal Medya</h3>
			<a href="#"><i class="fa fa-facebook hvr-grow"  aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-google-plus hvr-grow" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin hvr-grow" aria-hidden="true"></i></a>
			
		</div>
		</div>
	</div>
</footer>
</body>
</html>