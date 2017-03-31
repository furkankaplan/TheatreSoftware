<?php


include("connect.php");


$koltuk_adi=$_POST["koltuk_adi"];

$sorgu=$db->prepare("insert into koltuklar set koltuk_adi=?");
$ekle = $sorgu-> execute(array($koltuk_adi));


if (!$ekle) {
	$hatam = $sorgu->errorInfo();
	echo $hatam[2];
}

else{
	?>
	<script>
		window.location.href='form-form.php';
	</script>
	<?php
}



?>