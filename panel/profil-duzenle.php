<?php

include ("connect.php");

$isim = $_POST["name"];
$soyisim = $_POST["lname"];

$sifre = $_POST["pass"];
$eposta = $_POST["email"];

$id=$_POST["id"];


$kullanicilar= $db->prepare("update kullanicilar set uye_adi=?, uye_soyadi=?, uye_sifre=?, uye_eposta=? where id=?");

$updateing = $kullanicilar -> execute(array($isim,$soyisim,$sifre,$eposta,$id));

if ($updateing) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='index.php?k=profil'; }, 3000);

	</script>
<?php
}
else {

$hatam=$kullanicilar->errorInfo();
echo $hatam[2];
}





?>