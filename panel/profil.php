<?php
		include("connect.php");
        include_once "../Classes.php";

        $id=$_SESSION["id"];

		$obj = new Kullanicilar();
		$res = $obj -> get($id);
		$username = $obj -> getUyeEposta($res);
        $status = $obj -> getUyeStatu($res);
        $lastname = $obj -> getUyeSoyadi($res);
		$password = $obj -> getUyeSifre($res);
 	    $email= $obj -> getUyeEposta($res);
    
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


        <div class="col-md-4">
            <h4>Üye Id</h4>
            <div class="input-group">
                <input type="text" class="form-control"  name="id" value="<?php echo $id; ?>" disabled>
            </div>
        </div>

	</div>



<div class="row" style="margin-top: 20px;">
<div class="col-md-9"><input type="submit"  value=" Profili Düzenle" id="btn-payment"  class="btn btn-danger pull-right"></button></div>
<input type="hidden" name="id" value="<?php echo $id; ?>">
</div>


