<?php 
include ("connect.php");
include("../Classes.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$tarih = $_POST["tarih"];
$seans = $_POST["seans"];
$ozet = $_POST["fsummary"];
$gosterim_turu =$_POST["gosterim_turu"];
$yonetmen = $_POST["tyonetmen"];

$klasor = "../img/";

if($_FILES){

$resim=$_FILES['fposter']['name'];
move_uploaded_file($_FILES['fposter']['tmp_name'],$klasor."/".$_FILES['fposter']['name']);

}

if(($isim!=NULL) && ($stars!= NULL)  && ($tarih!=NULL) && ($seans!=NULL) && ($ozet!=NULL)){

$filmler= $db->prepare("insert into tiyatrolar set gosterim_tarihi=?,yonetmen=?,seans=?,tiyatro_adi=?,oyuncular=?,ozet=?,afis=?,gosterim_turu=?");

$adding = $filmler -> execute(array($tarih,$yonetmen,$seans,$isim,$stars,$ozet,$resim,$gosterim_turu));

if ($adding) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='tiyatrolar.php'; }, 3000);

	</script>
<?php
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