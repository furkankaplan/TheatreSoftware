<?php  

session_start();

ob_start();

if(!$_SESSION){

	echo"lütfen giriş yapın";

	header("location:mrzpanelgiris.php");

}



else{


  include("connect.php");


   $guncelleyen=$_SESSION["uye_adi"]." ".$_SESSION["uye_soyadi"];

   date_default_timezone_set('Europe/Moscow');

   $guncellenme_tarihi=date("Y-m-d H:i:s");



   $id=$_POST["slideID"];

   $slayt_adi=$_POST["slideAdi"];

   $slide_yazi=$_POST["slideYazisi"];

   $slide_linki=$_POST["slideLinki"];


   $klasor="../img";

   $slide_resim=$_FILES['thumb']['name'];
    $obj = new Slider();
if(!empty($_FILES['thumb']['name'])){
  move_uploaded_file($_FILES['thumb']['tmp_name'],$klasor."/".$_FILES['thumb']['name']); 

if($obj -> updateSlider($slayt_adi,$slide_resim,$slide_yazi,$slide_linki,$guncelleyen,$guncellenme_tarihi,$id)){
echo "oldu";?>
  <script>
  setTimeout(function(){ window.location.href='slider.php'; }, 3000);

  </script>
<?php

}else{

  echo"slayt eklenemedi!!!";

}


}

else {
  //Dosya Yüklenmediyse sadece slide bilgilerini güncelle
$slide_resim = false;
if($obj -> updateSlider($slayt_adi,$slide_resim,$slide_yazi,$slide_linki,$guncelleyen,$guncellenme_tarihi,$id)){
echo "oldu2";?>
  <script>
  setTimeout(function(){ window.location.href='slider.php'; }, 3000);

  </script>
<?php

}



else{

  echo"slayt eklenemedi2!!!";


}
 


   }

}
