<?php 


include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$poster = $_POST["fposter"];
$tarih = $_POST["tarih"];
$sira_no = $_POST["fnumber"];
$ozet = $_POST["fsummary"];



$dizi = new Films();

echo $dizi -> updateFilms2($tarih,$sira_no,$isim,$stars,$ozet,$fragman,$poster);




?>