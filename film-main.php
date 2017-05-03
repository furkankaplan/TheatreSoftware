<div class="row"  >

<?php
include ("slider.php");
?>

</div>






<div class="row">
<h2 class="text-center">Vizyondakiler</h2>
<div class="row">
	
	<?php

    $dizi = new Films();
    $resultArray = $dizi -> getFilmsByGosterimTuru(0);

    foreach ($resultArray as $elements) {
		   $id = $dizi -> getID($elements);
		   $film_adi =  $dizi -> getFilmAdi($elements);
           $seans = $dizi -> getSeans($elements);
		   $gosterim_tarihi = $dizi -> getGosterimTarihi($elements);
		   $afis = $dizi -> getAfis($elements);


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
    $dizi = new Films();
    $resultArray = $dizi -> getFilmsByGosterimTuru(1);

    foreach ($resultArray as $elements) {
        $id = $dizi -> getID($elements);
        $film_adi =  $dizi -> getFilmAdi($elements);
        $seans = $dizi -> getSeans($elements);
        $gosterim_tarihi = $dizi -> getGosterimTarihi($elements);
        $afis = $dizi -> getAfis($elements);


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





	