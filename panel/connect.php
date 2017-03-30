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


#Veriyi Gösterme

/*
$a = "aktif";

$sayfalar = $db ->prepare("select * from sayfalar where durum=? ");
$sayfalar -> execute(array($a));
$dizi = $sayfalar -> fetchALL(PDO::FETCH_ASSOC);




$hatam=$sayfalar->errorInfo();
echo $hatam[2];


foreach($dizi as $eleman){

$sayfa_basligi=$eleman["sayfa_basligi"];

echo "$sayfa_basligi";
}


*/

#Veri Ekleme

/*$sayfalar  = $db -> prepare("insert into sayfalar set durum='pasif', sayfa_basligi='BAZA TAKIMI', ekleyen='Nacaroglu', guncelleyen='Ahmet', sayfa_aciklama='test', sayfa_icerigi='double take', guncellenme_tarihi='0000-00-00 00:00:00'");

$adding = $sayfalar -> execute(array());

if ($adding) {
	echo "Başarılı";
}
else {

$hatam=$sayfalar->errorInfo();
echo $hatam[2];
}
*/

#Veri Güncelleme

/*$id=7;
$sayfalar = $db -> prepare ("update sayfalar set durum=?, sayfa_icerigi=?, ekleyen=? where id=?");

$sayfa_icerigi="Yenilenmiş İçerik";
$durum="aktif";
$ekleyen="Ahmet Nacaroglu";


$updateing = $sayfalar -> execute(array($durum,$sayfa_icerigi,$ekleyen,$id));
if ($updateing) {
	echo "Güncelleme Başarılı";
}

else {

$hatam=$sayfalar->errorInfo();
echo $hatam[2];
}*/



#Veri Silme

/*$db->beginTransaction();

$ekleyen= "yasemin morza";
$uye_adi="yasemin";
$uye_soyadi="morza";

$kullanicilar = $db -> prepare("delete from kullanicilar where uye_adi=? AND uye_soyadi=?");
$deletion = $kullanicilar -> execute(array($uye_adi,$uye_soyadi));

$sayfalar = $db -> prepare("delete from sayfalar where ekleyen=?");
$deleteing = $sayfalar->execute (array($ekleyen));

if (($deleteing==TRUE ) && ($deletion==TRUE)){
	$db->commit();
	echo "Başarılı";
}
else{
	$db->rollback();
}*/


#Tablo Birleştirme

/*

$sayfalar = $db ->prepare("select * from sayfalar inner join alt_sayfalar on sayfalar.id=alt_sayfalar.ust_sayfa_id where sayfalar.id between 4 and 5");
$sayfalar -> execute(array());
$x = $sayfalar ->fetchALL (PDO::FETCH_ASSOC);

$sayi=0;
foreach($x as $eleman){
$id=$eleman["id"];
$ust_sayfa_id=$eleman["ust_sayfa_id"];

$sayfa_basligi=$eleman["sayfa_basligi"];


echo "$id - $ust_sayfa_id - $sayfa_basligi <br>";
$sayi=$sayi+1;
}

echo "<br>".$sayi;
*/


#Son 10 Girdiyi Gösterme

/*$sayfalar = $db -> prepare ("select * from alt_sayfalar order by id  desc limit 10");

$sayfalar -> execute (array());

$dizi = $sayfalar->fetchALL(PDO::FETCH_ASSOC);

foreach ($dizi as $element) {
	$sayfa_basligi = $element["sayfa_basligi"];
	$id = $element["id"];
	echo "$id - $sayfa_basligi <br>" ;
}

*/





?>