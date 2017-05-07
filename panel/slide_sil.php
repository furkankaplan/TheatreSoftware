<?php

include ("connect.php");
include_once ("../Classes.php");

$id = $_GET["k"];

$obj = new Slider();

if ($obj -> deleteSlider($id)) {
	echo "Silindi";
	?>
	<script>
	setTimeout(function(){ window.location.href='slider.php'; }, 3000);

	</script>
<?php }

	else {
		echo "Silinmedi";

	}

 ?>