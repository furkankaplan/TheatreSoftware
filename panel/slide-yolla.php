	<?php 
include ("connect.php");
include ("../Classes.php");

$slidename = $_POST["slidename"];
$slidelink = $_POST["slidelink"];
$slidewriting = $_POST["slidewriting"];

$klasor = "../img/";

if($_FILES){

$isim=$_FILES['resim']['name'];
move_uploaded_file($_FILES['resim']['tmp_name'],$klasor."/".$_FILES['resim']['name']);
}
else{
	echo "Resim bulunamadı.";
}
$dizi = new Slider();
if ($dizi -> insertSlider($slidename,$isim,$slidewriting,$slidelink)) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='slider.php'; }, 3000);

	</script>
<?php


	

}
else {

echo "İnsertSlider hsql hatası!";
}




?>