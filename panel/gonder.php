	<?php 
include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$poster = $_POST["fposter"];
$tarih = $_POST["tarih"];
$sira_no = $_POST["fnumber"];
$ozet = $_POST["fsummary"];

if(($isim!=NULL) && ($stars!= NULL) && ($fragman!=NULL)  && ($poster!=NULL) && ($tarih!=NULL) && ($sira_no!=NULL) && ($ozet!=NULL)){

$filmler= $db->prepare("insert into filmler set gosterim_tarihi=?,sira_no=?,film_adi=?,oyuncular=?,ozet=?,fragman=?,afis=?");

$adding = $filmler -> execute(array($tarih,$sira_no,$isim,$stars,$ozet,$fragman,$poster));

if ($adding) {
	echo "Başarılı";
}
else {

$hatam=$filmler->errorInfo();
echo $hatam[2];
}


}

else{
	echo "Failed";

}

?>