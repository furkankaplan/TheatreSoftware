<!DOCTYPE html><html lang="en"><head>	<meta charset="utf-8">	<title>Deneme Projesi</title>    <meta name="viewport" content="width=device-width, initial-scale=1">    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>     <link href="css/imageupload.css" rel="stylesheet">     <script src="js/bootstrap.min.js"></script>    <script src="js/jasny-bootstrap.min.js"></script>      	<link href="css/hover.css" rel="stylesheet">    <link rel="stylesheet" href="css/font-awesome.min.css">		<link href="css/jasny-bootstrap.min.css" rel="stylesheet">     				 <script src="js/imageupload.js"></script>	    <link href="css/ayar.css" rel="stylesheet"> </head><body><?php      include("connect.php");
    $id=$_GET["id"];
    $sorgu3=$db->prepare("select * from slider where id=?");
	$sorgu3->execute(array($id));
	$dizi3=$sorgu3->fetch(PDO::FETCH_ASSOC);
	
	$slide_id=$dizi3["id"];
	$slayt_adi=$dizi3["slayt_adi"];
	$slide_resim=$dizi3["slide_resim"];
	$slide_yazi=$dizi3["slide_yazi"];
	$slide_linki=$dizi3["slide_linki"];
	$slide_alt_yazisi=$dizi3["slide_alt_yazisi"];

  ?>

<div class="row bg-beyaz" style="padding:20px 10px 10px 20px; margin-top:10px;border-top:3px solid #ddd; border-bottom:1px solid #ddd">
<h3> Slayt Düzenle </h3>
</div>

<div class="row bg-beyaz"> 
<form action="slide-duzenle-2.php" method="POST"  enctype="multipart/form-data">
<div class="col-md-12"> 

<div class="col-md-6"> 
<label for="">Slayt Başlığı</label>
<input type="text" name="slideAdi" class="form-control" value="<?php echo $slayt_adi;?>" required />
</div>

<div class="col-md-6"> 
<label for="">Slayt Alt Yazısı</label>
<input type="text" name="slideAltYazisi" class="form-control" value="<?php echo $slide_alt_yazisi;?>" required />
</div>
</div>

<div class="col-md-12 bg-beyaz"> 
<div class="col-md-12"> 
<label for="">Slaytın Üstüne Gelecek Yazı</label>
<input type="text" name="slideYazisi" class="form-control" value="<?php echo $slide_yazi;?>"/>
<p> Slayt ın üzerinde yazı olmasını istemiyorsanız boş bırakın</p>

</div>
</div>

<div class="col-md-12 bg-beyaz"> 
<div class="col-md-12"> 
<label for="">Slayt Linki</label>
<input type="text" name="slideLinki" class="form-control" value="<?php echo $slide_linki;?>"/>
<p> Link vermek istemiyorsanız boş bırakın</p>
</div>
</div>
<div class="col-md-12">
<div class="col-md-12"> 
<label>Slayt Resmi:</label>
<p> Düşük çözünürlük problemi yaşamamak için yükleyeceğiniz resim boyutu minimum 900 X 500 px olmalıdır.</p>
</div>
<div class="col-md-6">
<div class="dropzone" data-width="900" data-height="500"  data-image="../img/<?php echo $slide_resim;?>" style="width:400px; height:300px; ">
<input type="file" name="thumb"   />

</div>
<input type="hidden"  name="Resim" id="Resim" value="<?php echo $slide_resim;?>"  class="form-control"/>
</div>
</div>

<div class="col-md-12"  style="margin-top:200px"> 
<div class="col-md-2"> 
<input type="submit" value="Kaydet" class="form-control gonderbutonu" />
</div>
</div>

<div class="col-md-12"> 
<input type="hidden" name="slideID" value="<?php echo $slide_id ;?>" />
</div>

</form>
</div><script>$('.dropzone').html5imageupload({onAfterProcessImage: function() {$('#Resim').val($(this.element).data('name'));},onAfterCancel: function() {$('#Resim').val('');}});</script></body></html>
