<?php 


include ("connect.php");

$isim = $_POST["fname"];
$stars = $_POST["fstars"];
$fragman = $_POST["fmovieclip"];
$tarih = $_POST["tarih"];
$seans = $_POST["seans"];
$ozet = $_POST["fsummary"];
$id=$_POST["id"];


 $klasor="../img";

   $poster=$_FILES['fposter']['name'];

  if(!empty($_FILES['fposter']['name'])){

  move_uploaded_file($_FILES['fposter']['tmp_name'],$klasor."/".$_FILES['fposter']['name']); 

$filmler= $db->prepare("update filmler set gosterim_tarihi=?,seans=?,film_adi=?,oyuncular=?,ozet=?,fragman=?,afis=? where id=?");

$updateing = $filmler -> execute(array($tarih,$seans,$isim,$stars,$ozet,$fragman,$poster,$id));

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

$filmler= $db->prepare("update filmler set gosterim_tarihi=?,seans=?,film_adi=?,oyuncular=?,ozet=?,fragman=? where id=?");

$updateing = $filmler -> execute(array($tarih,$seans,$isim,$stars,$ozet,$fragman,$id));
  

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