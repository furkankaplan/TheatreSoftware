	<?php 
include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$tarih = $_POST["tarih"];
$seans = $_POST["seans"];
$ozet = $_POST["fsummary"];

$klasor = "../img/";

if($_FILES){

$resim=$_FILES['fposter']['name'];
move_uploaded_file($_FILES['fposter']['tmp_name'],$klasor."/".$_FILES['fposter']['name']);

}

if(($isim!=NULL) && ($stars!= NULL) && ($fragman!=NULL)   && ($tarih!=NULL) && ($seans!=NULL) && ($ozet!=NULL)){

$filmler= $db->prepare("insert into filmler set gosterim_tarihi=?,seans=?,film_adi=?,oyuncular=?,ozet=?,fragman=?,afis=?");

$adding = $filmler -> execute(array($tarih,$seans,$isim,$stars,$ozet,$fragman,$resim));

if ($adding) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='filmler.php'; }, 3000);

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