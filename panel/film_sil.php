<?php

include ("connect.php");
include_once ("../Classes.php");

$film_id = $_GET["k"];

$obj = new Films();

if ($obj -> deleteFilms($film_id)) {
	echo "Silindi";?>
	<script>
	setTimeout(function(){ window.location.href='filmler.php'; }, 3000);
	</script>
<?php

    } else {
		echo "Silinemedi";
	}

 ?>