<?php 

include ("connect.php");


$sosyalmedya = $db ->prepare("select * from sosyalmedya");
$sosyalmedya -> execute(array());
$dizi = $sosyalmedya -> fetch(PDO::FETCH_ASSOC);

$facebook = $dizi["facebook"];
$googleplus=$dizi["googleplus"];
$instagram=$dizi["instagram"];



 ?>



 <form action="medya-duzenle.php" method="POST">


		<div class="row">
		<div class="col-md-12">
		<h4>Facebook</h4>
		
		<div class="input-group">
		 <span class="input-group-addon" id="basic-addon2"><i class="fa fa-facebook" aria-hidden="true"></i></span>
		  <input  type="text" class="form-control" placeholder="Facebook" name="face" value="<?php echo $facebook; ?>" required aria-describedby="basic-addon2">
		 
		</div>

		
		
		</div>
</div>

<div class="row">
	
		<h4>Google</h4>
			<div class="col-md-12">
		<div class="input-group">
		<span class="input-group-addon" id="basic-addon1"><i class="fa fa-google-plus"  aria-hidden="true"></i></span>
		<input type="text" class="form-control" placeholder="Google Plus" name="plus"  value="<?php echo $googleplus; ?>" required aria-describedby="basic-addon1">
		</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-12">
		<h4>Instagram</h4>
		<div class="input-group">
		<span class="input-group-addon" id="basic-addon3"><i class="fa fa-instagram"  aria-hidden="true"></i></span>
		<input type="text" class="form-control" placeholder="Instagram" name="instagram"  value="<?php echo $instagram; ?>" required aria-describedby="basic-addon3">
		</div>
		</div>
		</div>

		
	</div>

<div class="row" >
	<div class="col-md-9" style="margin-top: 40px;"><input type="submit"  value=" Sosyal Ağları Düzenle" id="btn-payment"  class="btn btn-danger pull-right"></button></div>
	
</div>
</form>