<?php
/**
 * Created by PhpStorm.
 * User: furkankaplan
 * Date: 8.05.2017
 * Time: 12:26
 */
include_once "Classes.php";
include_once "connect.php";

if(isset($_GET["search"])){
    $search = $_GET["search"];
    $dizi = Search::doThat($search);

    $obj = new Films();

    echo '
     <h2 class="text-center"><b>'.$search.'</b> için arama sonuçları</h2>
    <div class="row">
    ';
    foreach ($dizi as $elements){
        $res = $obj -> getFilmsByID($elements["id"]);
        $id = $elements["id"];
        $afis = $obj -> getAfis($res);
        $film_adi = $obj -> getFilmAdi($res);
        echo '<div class="col-md-4">
	<div class="panel panel-default">
	    <a href="film.php?k='.$id.'"><div class="panel-body">
	    		<img src="img/'.$afis.'" class="img-responsive" alt=""/>
	    		<h4 class="text-center">'.$film_adi.'</h4>
	     </div></a>
	    </div></div>  
	    ';
    }
    echo '</div>';
}


