	<?php 

include ("connect.php");


$id=$_POST["id"];
   $slayt_adi=$_POST["slidename"];
   $slide_yazi=$_POST["slidewriting"];
   $slide_linki=$_POST["slidelink"];

   
   $klasor="../img";
   $slide_resim=$_FILES['thumb']['name'];
  
  move_uploaded_file($_FILES['thumb']['tmp_name'],$klasor."/".$_FILES['thumb']['name']); 
  $sorgu2=$db->prepare("update slider_film set slider_adi=?,slider_resmi=?,slider_yazi=?,slide_link=? where id=?");
  $slayt_duzenle=$sorgu2->execute(array($slayt_adi,$slide_resim,$slide_yazi,$slide_link,$id));


  if($slayt_duzenle){
echo "slayt değiştirildi.<br>";

  }

  else{
  	echo"slayt değiştirielemedi<br>";
  	$hatam=$sorgu2->errorInfo();
  	echo $hatam[2];
  }




?>