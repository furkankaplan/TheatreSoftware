<?php

include ("film_db.php");

$id = $_GET["k"];

$slider_film = $db -> prepare("delete from slider where id=?");
$deleteing = $slider_film->execute (array($id));

if ($deleteing) {
	echo "Silindi";
	?>
	<script>
	setTimeout(function(){ window.location.href='slider.php'; }, 3000);

	</script>
<?php }

	else {
		echo "Silinmedi";
		$hatam = $slider_film->errorInfo();
		echo $hatam[2];

	}

 ?>