<head>

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/ayar.css" rel="stylesheet">
</head>


<body>

<?php
include ("connect.php");
include "Classes.php";
$dizi = new Sosyalmedya();
$result = $dizi -> getSosyalmedya();

$facebook = $dizi -> getFacebook($result);
$googleplus= $dizi -> getGooglePlus($result);
$instagram= $dizi -> getInstagram($result);


?>
	
<footer>
	<div class="container">
		<div class="row" >
		<div class="col-md-4 col-xs-4 new-foot">
			<h3>İletişim</h3>
			<i class="fa fa-map-marker hvr-grow " aria-hidden="true"> İş Adresi - Lorem ipsum bolor at sumnis konsortil</i> 
			<i class="fa fa-phone-square hvr-grow" aria-hidden="true"> Telefon Numarası - 0254 256 25 25</i> 
			<i class="fa fa-envelope  hvr-grow" aria-hidden="true"> E-Mail Adresi - biletal@copsmail.com</i> 
		</div>
		
		<div class="col-md-4 col-xs-4 col-md-offset-2 col-xs-offset-2" style="margin-top: 20px;" >
			<ul class="listoflist">
				<li><a href="#">Ana Sayfa</a><li>
				<li><a href="#">Hakkımızda</a><li>
				<li><a href="#">Seanslar</a><li>
				<li><a href="#">Filmler</a><li>
				<li><a href="#">Salonlarımız</a><li>
				<li><a href="iletisim.php">İletişim</a><li>
			</ul>
		</div>
		
		<div class="col-md-2 col-xs-2 social">
			<h3>Sosyal Medya</h3>
			<a href="<?php echo $facebook?>"><i class="fa fa-facebook hvr-grow"  aria-hidden="true"></i></a>
			<a href="<?php echo $googleplus?>"><i class="fa fa-google-plus hvr-grow" aria-hidden="true"></i></a>
			<a href="<?php echo $instagram?>"><i class="fa fa-instagram hvr-grow" aria-hidden="true"></i></a>
			
		</div>
		</div>
	</div>
</footer>

</body>