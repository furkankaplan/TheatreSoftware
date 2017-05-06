<?php

include ("connect.php");

$isim = $_POST["name"];
$soyisim = $_POST["lname"];

$sifre = $_POST["pass"];
$eposta = $_POST["email"];

$id=$_POST["id"];


$dizi = new Kullanicilar();

if ($dizi -> updateKullanicilar($isim,$soyisim,$sifre,$eposta,$id)) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='index.php?k=profil'; }, 3000);

	</script>
<?php
}
?>