<?php
include ("connect.php");
include ("../Classes.php");

$instagram = $_POST["instagram"];
$googleplus = $_POST["plus"];
$facebook = $_POST["face"];


$obj = new Sosyalmedya();
$updateing = $obj -> updateSosyalmedya($facebook,$googleplus,$instagram);

if ($updateing) {
	echo "Başarılı";?>
	<script>
	setTimeout(function(){ window.location.href='index.php?k=sosyal'; }, 3000);

	</script>
<?php }
else {

$hatam=$filmler->errorInfo();
echo $hatam[2];
}
?>

