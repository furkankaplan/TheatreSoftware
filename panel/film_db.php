<?php


$kullanici = "root";
$host = "localhost";
$veritabani="deneme";
$sifre="";
try{
	$db = new PDO("mysql:host=$host; dbname=$veritabani;charset=utf8", "$kullanici" , "$sifre");
	
	}

	catch(PDOException $mesaj){
		echo $mesaj->getmessage();
	}




?>