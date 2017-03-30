<?php 


include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$poster = $_POST["fposter"];
$tarih = $_POST["tarih"];
$sira_no = $_POST["fnumber"];
$ozet = $_POST["fsummary"];
$id=$_POST["id"];


$filmler= $db->prepare("update filmler set gosterim_tarihi=?,sira_no=?,film_adi=?,oyuncular=?,ozet=?,fragman=?,afis=? where id=?");

$updateing = $filmler -> execute(array($tarih,$sira_no,$isim,$stars,$ozet,$fragman,$poster,$id));

if ($updateing) {
	echo "Başarılı";
}
else {

$hatam=$filmler->errorInfo();
echo $hatam[2];
}



?>