<?php include ("connect.php");

$instagram = $_POST["instagram"];
$googleplus = $_POST["plus"];
$facebook = $_POST["face"];




$sosyalmedya= $db->prepare("update sosyalmedya set facebook=?,googleplus=?,instagram=?");

$updateing = $sosyalmedya -> execute(array($facebook,$googleplus,$instagram));

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

