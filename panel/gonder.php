<?php 
include ("connect.php");
include("../Classes.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$tarih = $_POST["tarih"];
$seans = $_POST["seans"];
$ozet = $_POST["fsummary"];
$gosterim_turu =$_POST["gosterim_turu"];
$yonetmen = $_POST["fyonetmen"];
$klasor = "../img/";

if($_FILES){

$resim=$_FILES['fposter']['name'];
move_uploaded_file($_FILES['fposter']['tmp_name'],$klasor."/".$_FILES['fposter']['name']);

}

if(($isim!=NULL) && ($stars!= NULL) && ($fragman!=NULL)   && ($tarih!=NULL) && ($seans!=NULL) && ($ozet!=NULL)){

$obj = new Films();

if ($obj -> insertFilms($tarih,$yonetmen,$seans,$isim,$stars,$ozet,$fragman,$resim,$gosterim_turu)) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='filmler.php'; }, 3000);

	</script>
<?php
}
else {
echo "film insert işlemi hatalı!";
}


}

else{
	echo "Hiçbir alan boş geçilemez!";

}

?>