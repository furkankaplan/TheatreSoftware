<?php
include("../Classes.php");
include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$tarih = $_POST["tarih"];
$seans = $_POST["seans"];
$ozet = $_POST["fsummary"];
$fid=$_POST["fid"];
$gosterim_turu =$_POST["gosterim_turu"];
$yonetmen = $_POST["fyonetmen"];

$obj = new Films();

 $klasor="../img";

   $poster=$_FILES['fposter']['name'];

  if(!empty($_FILES['fposter']['name'])){

  move_uploaded_file($_FILES['fposter']['tmp_name'],$klasor."/".$_FILES['fposter']['name']); 

  $updateing = $obj -> updateFilms($tarih,$yonetmen, $seans,$isim,$stars,$ozet,$fragman,$poster,$gosterim_turu,$fid);

if ($updateing) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='filmler.php'; }, 3000);

	</script>
<?php	
}
else {

echo "Filmi afiş ile birlikte güncellerken hata oluştu.";
}

}

else {
  //Dosya Yüklenmediyse sadece slide bilgilerini güncelle
    $dizi = $obj -> getFilmsByID($fid);
    $poster = $obj -> getAfis($dizi);

    $updateing = $obj -> updateFilms($tarih,$yonetmen,$seans,$isim,$stars,$ozet,$fragman,$poster,$gosterim_turu,$fid);
  

if($updateing){
echo "oldu2";?>
  <script>
  setTimeout(function(){ window.location.href='filmler.php'; }, 3000);

  </script>
<?php

}



else{

  echo"filmi güncellerken hata oluştu";

}
}


?>