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
      <link href="css/imageupload.css" rel="stylesheet"> 
 <script src="js/imageupload.js"></script>
	<link href="css/hover.css" rel="stylesheet">	
	<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	
    <link href="css/ayar.css" rel="stylesheet">

  
</head>

<body>
<div class="row">

<?php 

include ("connect.php");

$id=$_GET["id"];

$dizi = new Tiyatrolar();
$result = $dizi -> getTiyatrolarByID($id);

$isim = $dizi -> getTiyatroAdi($result);
$oyuncular = $dizi -> getOyuncular($result);
$ozet = $dizi -> getOzet($result);
$seans = $dizi -> getSeans($result);
$poster = $dizi -> getAfis($result);
$tarih = $dizi -> getGosterimTarihi($result);
$id= $dizi -> getID($result);
$yonetmen = $dizi -> getYonetmen($result);
 ?>

</div>

<div class="container-fluid" >

<form action="duzenle2.php" method="POST" enctype="multipart/form-data">
		<div class="row">

        <div class="col-md-4">
            <h4>Tiyatronun ID'si</h4>
            <div class="input-group">
                 <input type="text" class="form-control"  name="fid" value="<?php echo $id; ?>" readonly>
            </div>
        </div>

		<div class="col-md-4">
		<h4>Tiyatronun Adı</h4>
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
		<textarea  class="form-control" placeholder="Özet" name="fsummary" required rows="4" cols="50"> <?php echo $ozet; ?></textarea>
		
		</div>
		</div>

		
	</div>

	<div class="row">
		<div class="col-md-4">
		<h4>Seans Süresi</h4>
		<div class="input-group">
		<input type="number" class="form-control" placeholder="" name="seans" value="<?php echo $seans; ?>" required>
		</div>
		</div>

		<div class="col-md-4">
		<h4>Gösterim Tarihi</h4>
		<div class="input-group">
		<input type="date" class="form-control" placeholder="Fragman Linki" name="tarih" value="<?php echo $tarih; ?>"  required>
		</div>
		</div>


	</div>

<div class="row">
    <div class="col-md-4">
        <h4>Yonetmen</h4>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Yonetmen adı" name="fyonetmen"  value="<?php echo $yonetmen; ?>" required>
        </div>
    </div>
    <br>
<div class="col-md-2" style="margin-top: 20px;">
	
	<select name="gosterim_turu"  class="form-control">
  		<option value="0">Vizyonda</option>
  		<option value="1">Gelecek Gösterim</option>
    </select>

</div>

</div>

<div class="row">

<div class="col-md-4">
		<h4>Afiş</h4>
		<div class="dropzone" data-width="900" data-height="500"  data-image="../img/<?php echo $poster;?>" style="width:400px; height:300px; ">

		<input type="file" name="fposter"   />



		</div>

		<input type="hidden"  name="fposter" id="fposter" value="<?php echo $poster;?>"  class="form-control"/>

		</div>



	
</div>

<div class="col-md-9"><input type="submit"  value=" Filmi Düzenle" id="btn-payment"  class="btn btn-danger pull-right"></button></div>
<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>
</div>

</body>


<script>

$('.dropzone').html5imageupload({

onAfterProcessImage: function() {

$('#Resim').val($(this.element).data('name'));

},

onAfterCancel: function() {

$('#Resim').val('');

}

});

</script>