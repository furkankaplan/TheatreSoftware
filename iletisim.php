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
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">	
	<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	
    <link href="css/ayar.css" rel="stylesheet">
</head>
<body>
	

	<?php 
	include ("navbar.php");
	?>

	<div class="row" style="margin-top: 100px;">

	<div class="col-md-6">
		<div class="row">
		
		<ul class="iletisim-control">
		<h3>İletişim</h3>
			<li><i class="fa fa-map-marker hvr-grow " aria-hidden="true"> İş Adresi - Lorem ipsum bolor at sumnis konsortil</i> </li>
			<li><i class="fa fa-phone-square hvr-grow" aria-hidden="true"> Telefon Numarası - 0254 256 25 25</i> </li>
			<li><i class="fa fa-envelope  hvr-grow" aria-hidden="true"> E-Mail Adresi - biletal@copsmail.com</i> </li>
			</ul>
			</div>
	</div>
	<form action="" method="post" name="iletisim">
	<div class="col-md-6">

	<div class="row">
	<div class="col-md-4">
	<h5>Adınız</h5>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Adınız" name="name" >
		<span class="input-group-addon glyphicon glyphicon-user" id="<basic-addon1></basic-addon1>"></span>
		</div>
		</div>
		
		<div class="col-md-4">	
		<h5>Soyadınız</h5>
		<div class="input-group">	
		<input type="text" class="form-control" placeholder="Soyadınız" name="surname"  >
		<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
		</div>
		
		</div>
	</div>

		<div class="row">		
	
		<div class="col-md-8">
		<h5>E-Posta Adresiniz</h5>
		<div class="input-group">
			
		<input type="email" class="form-control" placeholder="E-Mailiniz" name="email"  title="Zorunlu">
		<span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1" ></span>
		</div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-8">
		<h5>Mesajınız</h5>
		<div class="input-group">
          <textarea class="form-control" placeholder="Mesajınız..." rows="8" cols="53" name="mesaj"></textarea>
      	</div>
		</div>
		</div>
		<div class="row" style="margin-top: 5px;">
		
			<div class="col-md-2 col-md-offset-6"><input type="submit" value="Gönder" class="btn btn-danger" name="gonder"></input></div>
		
		</div>
	</div>
				
	</div>	
	
	</form>

<div class="row" style="margin-top: 50px;">
<?php  include ("footer.php")  ?>
</div>
</body>
</html>