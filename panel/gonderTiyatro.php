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

$obj = new Tiyatrolar();

if ($obj -> insertTiyatrolar($tarih,$yonetmen,$seans,$isim,$stars,$ozet,$resim,$gosterim_turu)) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='tiyatrolar.php'; }, 3000);

	</script>
<?php
}
else {
 echo "tiyatrolar güncelleme hatası.";
}


}

else{
	echo "Hİçbir alan boş geçilemez!";

}

?>