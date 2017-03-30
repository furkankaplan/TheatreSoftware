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

  
</head>

<body>
<div class="row">

<?php 

include ("connect.php");

$id=$_GET["id"];

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

</div>

<div class="container-fluid" >

<form action="duzenle.php" method="POST">
		<div class="row">
		<div class="col-md-4">
		<h4>Film Adı</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Film Adı" name="fname" value="<?php echo $isim; ?>" required>
		</div>
		</div>


		<div class="col-md-4">
		<h4>Oyuncular</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Oyuncular" name="fstars"  value="<?php echo $oyuncular; ?>" required>
		</div>
		</div>

		<div class="col-md-4">
		<h4>Özet</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Özet" name="fsummary"  value="<?php echo $ozet; ?>" required>
		</div>
		</div>

		
	</div>

	<div class="row">
		<div class="col-md-4">
		<h4>Sıra Numarası</h4>
		<div class="input-group">
		<input type="number" class="form-control" placeholder="" name="fnumber" value="<?php echo $sira_no; ?>" required>
		</div>
		</div>
		
		<div class="col-md-4">
		<h4>Afiş Linki</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Afiş Linki" name="fposter"  value="<?php echo $poster; ?>" >
		</div>
		</div>

		<div class="col-md-4">
		<h4>Fragman Linki</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Fragman Linki" name="fmovieclip"  value="<?php echo $fragman; ?>" required>
		</div>
		</div>


	</div>


<div class="row">

<div class="col-md-4"></div>


	<div class="col-md-5">
		<h4>Gösterim Tarihi</h4>
		<div class="input-group">
		<input type="date" class="form-control" placeholder="Fragman Linki" name="tarih" value="<?php echo $tarih; ?>"  required>
		</div>
		</div>
</div>

<div class="col-md-3"><input type="submit"  value=" Filmi Düzenle" id="btn-payment"  class="btn btn-danger pull-left"></button></div>
<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>
</div>

</body>

