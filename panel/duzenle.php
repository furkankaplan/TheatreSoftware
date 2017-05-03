<?php
include("../Classes.php");
include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$tarih = $_POST["tarih"];
$seans = $_POST["seans"];
$ozet = $_POST["fsummary"];
$id=$_POST["id"];
$gosterim_turu =$_POST["gosterim_turu"];



 $klasor="../img";

   $poster=$_FILES['fposter']['name'];

  if(!empty($_FILES['fposter']['name'])){

  move_uploaded_file($_FILES['fposter']['tmp_name'],$klasor."/".$_FILES['fposter']['name']); 
  $obj = new Films();

  $updateing = $obj -> updateFilms($tarih,$seans,$isim,$stars,$ozet,$fragman,$poster,$gosterim_turu,$id);

if ($updateing) {
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

else {
  //Dosya Yüklenmediyse sadece slide bilgilerini güncelle

    $obj = new Films();
    $updateing = $obj -> updateFilms($tarih,$seans,$isim,$stars,$ozet,$fragman,$poster,$gosterim_turu,$id);
  

if($updateing){
echo "oldu2";?>
  <script>
  setTimeout(function(){ window.location.href='filmler.php'; }, 3000);

  </script>
<?php

}



else{

  echo"slayt eklenemedi2!!!";

  $hatam=$filmler->errorInfo();

  echo $hatam[2];

}
}


?>