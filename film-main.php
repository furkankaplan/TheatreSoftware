<div class="row"  >

<?php
include ("slider.php");
?>

</div>






<div class="row">
<h2 class="text-center">Vizyondakiler</h2>
<div class="row">
	
	<?php

		$filmler = $db ->prepare("select * from filmler where gosterim_turu='0'");
		$filmler -> execute(array());
		$dizi = $filmler -> fetchALL(PDO::FETCH_ASSOC);

		foreach ($dizi as $elements) {
		   $id = $elements["id"];
		   $film_adi= $elements["film_adi"];
		   $seans = $elements["seans"];
		   $gosterim_tarihi = $elements["gosterim_tarihi"];
		   $afis = $elements["afis"];


		   echo '<div class="col-md-4">
	<div class="panel panel-default">
	    <a href="film.php?k='.$id.'"><div class="panel-body">
	    		<img src="img/'.$afis.'" class="img-responsive" alt=""/>
	    		<h4 class="text-center">'.$film_adi.'</h4>
	     </div></a>
	    </div></div>  
	    ';
}



	?>


</div>


</div>


<div class="row">
<h2 class="text-center">Gelecek Gösterim</h2>
<div class="row">
	
	

	<?php
		$filmler = $db ->prepare("select * from filmler where gosterim_turu='1'");
		$filmler -> execute(array());
		$dizi = $filmler -> fetchALL(PDO::FETCH_ASSOC);

		foreach ($dizi as $elements) {
		   $id = $elements["id"];
		   $film_adi= $elements["film_adi"];
		   $seans = $elements["seans"];
		   $gosterim_tarihi = $elements["gosterim_tarihi"];
		   $afis = $elements["afis"];


		   echo '<div class="col-md-4">
	<div class="panel panel-default">
	    <a href="film.php?k='.$id.'"><div class="panel-body">
	    		<img src="img/'.$afis.'" class="img-responsive" alt=""/>
	    		<h4 class="text-center">'.$film_adi.'</h4>
	     </div></a>
	    </div></div>  
	    ';
}



	?>


</div>


</div>





	