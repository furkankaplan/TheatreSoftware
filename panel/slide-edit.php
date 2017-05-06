	<?php 

include ("connect.php");
include ("../Classes.php");


$id=$_POST["id"];
   $slayt_adi=$_POST["slidename"];
   $slide_yazi=$_POST["slidewriting"];
   $slide_linki=$_POST["slidelink"];

   
   $klasor="../img";
   $slide_resim=$_FILES['thumb']['name'];
  
  move_uploaded_file($_FILES['thumb']['tmp_name'],$klasor."/".$_FILES['thumb']['name']); 
  $obj = new SliderFilm();

  if($obj -> updateSliderFilm($slayt_adi,$slide_resim,$slide_yazi,$slide_linki,$id)){
    echo "slayt değiştirildi.<br>";
  }else{
  	echo"slayt değiştirilemedi<br>";
  }




?>