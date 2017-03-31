<?php
		session_start();
		include("connect.php");

 		$username=$_SESSION["uye_adi"];
 		$status=$_SESSION["uye_statu"];
		$lastname=$_SESSION["uye_soyadi"];
		$password=$_SESSION["uye_sifre"];
		$email=$_SESSION["uye_eposta"];
		$id=$_SESSION["uye_id"];
        

    
?>

<form action="profil-duzenle.php" method="POST">
		<div class="row">
		
		
		<div class="col-md-4">
		<h4>Kullanıcı Adı</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Kullanıcı Adı" name="name" value="<?php echo $username; ?>" required>
		</div>
		</div>

		<div class="col-md-4">
		<h4>Kullanıcı Soy İsmi</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Kullanıcı Soy İsmi" name="lname" value="<?php echo $lastname; ?>" required>
		</div>
		</div>

		<div class="col-md-4">
		<h4>Kullanıcı Şifresi</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Kullanıcı Şifresi" name="pass" value="<?php echo $password; ?>" required>
		</div>
		</div>


	<div class="row">
		
		

		<div class="col-md-4">
		<h4>Kullanıcı Emaili</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="E-Mail" name="email" value="<?php echo $email; ?>" required>
		</div>
		</div>

		

	</div>



<div class="row" style="margin-top: 20px;">
<div class="col-md-9"><input type="submit"  value=" Profili Düzenle" id="btn-payment"  class="btn btn-danger pull-right"></button></div>
<input type="hidden" name="id" value="<?php echo $id; ?>">
</div>


