<?php

include ("film_db.php");

$film_id = $_GET["k"];

$filmler = $db -> prepare("delete from filmler where id=?");
$deleteing = $filmler->execute (array($film_id));

if ($deleteing) {
	echo "Silindi";?>
	<script>
	setTimeout(function(){ window.location.href='filmler.php'; }, 3000);

	</script>
<?php }

	else {
		echo "Silinmedi";
		$hatam = $filmler->errorInfo();
		echo $hatam[2];

	}

 ?>