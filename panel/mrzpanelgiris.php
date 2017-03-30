<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MrzPanel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
	
	
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
   
   <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
	
	 <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
  

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


	<style>
	.ortabolum{
		min-height:200px;
		margin-top:7%;
		margin-left:27%;
		background:url(http://cdn.sabahservers.com/static/img/bg-white-lock.png);
		padding:15px;
		width:400px;
		
	}
	.girisbutonu{
		background:#209DD8;
		color:white;
		text-align:center;
		font-size:18px;
		padding:10px;
		height:40px;
		border-color:#209DD8;
	}
	.girisbutonu:hover{
		
		opacity:0.9;
	}
	<style>

</style>
	</style>

</head>

<body style="background:url(img/bglogin1.jpg) no-repeat ;background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">


    <div class=" container " > 
	
	<div class="row"> 
	
	</div>
	<form action="kontrol.php" method="POST"> 
	
	<div class="row ortabolum"> 
	
	<div class="col-md-12"> 
	<img src="img/morzalogo.png" alt="" class="img-responsive" />
	</div>
	
	<div class="col-md-12"> 
	<h1 class="text-center" style="color:black;"> MrzPanel Kontrol Paneli </h1>
	<h5 class="text-center" style="color:black;"> Lütfen oturum açin.</h5>
	</div>
	
	<div class="col-md-12">   
	<div class="col-md-12">
	<input type="email" name="email" class="form-control" placeholder="Eposta Adresiniz" required />
	</div>
	</div>
	
	  <div class="row" style="margin-top:20px; margin-bottom:20px;"> </div>   
	
	<div class="col-md-12">   
	<div class="col-md-12">
	<input type="password" name="sifre" class="form-control" placeholder="Şifre" required />
	</div>
	</div>
	
	<div class="row" style="margin-top:20px; margin-bottom:20px;"> </div>
	
	<div class="col-md-12">   
	<div class="col-md-12">
	<input type="submit"  value="Giriş Yap" class="girisbutonu form-control"/>
	 </div>
	 </div>
	
	
	<div class="row" style="margin-top:20px; margin-bottom:20px;"> </div>   
	
 <div class="col-md-12"> 
 <h4 class="text-center"> <a href="parolahatirlatma.php" style="font-weight:300">  Parolamı Unuttum</a> </h4>
 </div>
	
	</div>
	
	
	</form>
	


</body>
</html>