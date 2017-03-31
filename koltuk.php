<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Deneme Projesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script src="js/jquery-3.2.0.slim.min.js"></script>
    <link href= ="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/hover.css" rel="stylesheet">	
		<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	

    <link href="css/ayar.css" rel="stylesheet">
  
</head>
<body>

<?php 

include ("connect.php");

$id=$_GET["x"];

$filmler = $db ->prepare("select * from filmler where id=? ");
$filmler -> execute(array($id));
$dizi = $filmler -> fetch(PDO::FETCH_ASSOC);

$isim = $dizi["film_adi"];
$oyuncular = $dizi["oyuncular"];
$ozet = $dizi["ozet"];
$seans = $dizi["seans"];
$poster = $dizi["afis"];
$fragman = $dizi["fragman"];
$tarih = $dizi["gosterim_tarihi"];
$id=$dizi["id"];

 ?>



<?php
	include ("navbar.php");
 ?>

<div class="container-fluid">
	<div class="row">

	<div class="col-md-2"></div>
	<div class="col-md-10">
	<div class="row">
	<div class="col-md-9" value=" seat-map">
		<div class="panel panel-default center-block">

  		<div class="panel-heading"><h4>Koltuk Seçimi</h4></div>

  		<!-- Table -->
  		<?php

  		echo ' <table class="table">
   			 <tr>
   			 	<td>Oyun İsmi</td>
   			 	<td>'.$isim.'</td>
   			 </tr>
   			 <tr>
   			 	<td>Seans</td>
   			 	<td>'.$seans.'</td>
   			 </tr>
   			
  		</table>';

  		?>
  		
		
		<div class="row seat-row" >
		<button class="btn btn-success" value="A1">A1</button>
		<button class="btn btn-success" value="A2">A2</button>
		<button class="btn btn-success" value="A3">A3</button>
		<button class="btn btn-success" value="A4">A4</button>
		<button class="btn btn-success" value="A5">A5</button>
		<button class="btn btn-success" value="A6">A6</button>
		<button class="btn btn-success" value="A7">A7</button>
		<button class="btn btn-success" value="A8">A8</button>
		<button class="btn btn-success" value="A9">A9</button>
		<button class="btn btn-success" value="A10">A10</button>
		<button class="btn btn-success" value="A11">A11</button>
		<button class="btn btn-success" value="A12">A12</button>
		<button class="btn btn-success" value="A13">A13</button>
		<button class="btn btn-success" value="A14">A14</button>
		<button class="btn btn-success" value="A15">A15</button>

		</div>

		<div class="row seat-row" >
		<button class="btn btn-success" value="B1">B1</button>
		<button class="btn btn-success" value="B2">B2</button>
		<button class="btn btn-success" value="B3">B3</button>
		<button class="btn btn-success" value="B4">B4</button>
		<button class="btn btn-success" value="B5">B5</button>
		<button class="btn btn-success" value="B6">B6</button>
		<button class="btn btn-success" value="B7">B7</button>
		<button class="btn btn-success" value="B8">B8</button>
		<button class="btn btn-success" value="B9">B9</button>
		<button class="btn btn-success" value="B10">B10</button>
		<button class="btn btn-success" value="B11">B11</button>
		<button class="btn btn-success" value="B12">B12</button>
		<button class="btn btn-success" value="B13">B13</button>
		<button class="btn btn-success" value="B14">B14</button>
		</div>
		

		<div class="row seat-row" >
		<button class="btn btn-success" value="C1">C1</button>
		<button class="btn btn-success" value="C2">C2</button>
		<button class="btn btn-success" value="C3">C3</button>
		<button class="btn btn-success" value="C4">C4</button>
		<button class="btn btn-success" value="C5">C5</button>
		<button class="btn btn-success" value="C6">C6</button>
		<button class="btn btn-success" value="C7">C7</button>
		<button class="btn btn-success" value="C8">C8 </button>
		<button class="btn btn-success" value="C9">C9 </button>
		<button class="btn btn-success" value="C10">C10 </button>
		<button class="btn btn-success" value="C11">C11 </button>
		<button class="btn btn-success" value="C12">C12 </button>
		<button class="btn btn-success" value="C13">C13 </button>

		</div>

		<div class="row exit-row">
		<div class="row">
		<div class="col-md-2 pull-left"><button class="btn btn-danger btn-exit">E<br>X<br>I<br>T</button></div>
		<div class="col-md-2 pull-right"><button class="btn btn-danger btn-exit">E<br>X<br>I<br>T</button></div>
		</div>
			
		</div>


		<div class="row seat-row" >
		<button class="btn btn-success" value="D1">D1</button>
		<button class="btn btn-success" value="D2">D2</button>
		<button class="btn btn-success" value="D3">D3</button>
		<button class="btn btn-success" value="D4">D4</button>
		<button class="btn btn-success" value="D5">D5</button>
		<button class="btn btn-success" value="D6">D6</button>
		<button class="btn btn-success" value="D7">D7</button>
		<button class="btn btn-success" value="D8">D8</button>
		<button class="btn btn-success" value="D9">D9</button>
		<button class="btn btn-success" value="D10">D10</button>
		<button class="btn btn-success" value="D11">D11</button>
		<button class="btn btn-success" value="D12">D12</button>
		<button class="btn btn-success" value="D13">D13</button>
		<button class="btn btn-success" value="D14">D14</button>
		<button class="btn btn-success" value="D15">D15</button>

		</div>



		<div class="row seat-row" >
		<button class="btn btn-success" value="E1">E1</button>
		<button class="btn btn-success" value="E2">E2</button>
		<button class="btn btn-success" value="E3">E3</button>
		<button class="btn btn-success" value="E4">E4</button>
		<button class="btn btn-success" value="E5">E5</button>
		<button class="btn btn-success" value="E6">E6</button>
		<button class="btn btn-success" value="E7">E7</button>
		<button class="btn btn-success" value="E8">E8</button>
		<button class="btn btn-success" value="E9">E9</button>
		<button class="btn btn-success" value="E10">E10</button>
		<button class="btn btn-success" value="E11">E11</button>
		<button class="btn btn-success" value="E12">E12</button>
		<button class="btn btn-success" value="E13">E13</button>
		<button class="btn btn-success" value="E14">E14</button>
		

		</div>

		<div class="row seat-row" >
		<button class="btn btn-success" value="F1" id="122324"> F1</button>
		<button class="btn btn-success" value="F2"> F2</button>
		<button class="btn btn-success" value="F3"> F3</button>
		<button class="btn btn-success" value="F4"> F4</button>
		<button class="btn btn-success" value="F5"> F5</button>
		<button class="btn btn-success" value="F6"> F6</button>
		<button class="btn btn-success" value="F7"> F7</button>
		<button class="btn btn-success" value="F8"> F8</button>
		<button class="btn btn-success" value="F9"> F9</button>
		<button class="btn btn-success" value="F10"> F10</button>
		<button class="btn btn-success" value="F11"> F11</button>
		<button class="btn btn-success" value="F12"> F12</button>
		<button class="btn btn-success" value="F13"> F13</button>


		</div>

		<div class="row exit-row">
			<button class="btn btn-primary btn-block" >PERDE</button>
			
		</div>

	

<div class="row payment-row">
	  <form action="bilet.php?b=<?php echo $id;?>" method="post">
 		<div class="col-md-7"><input type="text" class="form-control pull-right" id="secimler" name="ticket" value=" " readonly></div> 
   	<div class="col-md-3"><input type="submit" disabled="true" value=" BİLETİ ONAYLA" id="btn-payment"  class="btn btn-danger btn-payment" onclick="seatTaken()"></button></div>
   	<div class="col-md-2"><input type="reset" onclick="sifirla()"  value="Sıfırla" class="btn btn-warning btn-reset"></input></div>
   	<input type="hidden" value="" name="ticketNum" id="ticketNum">
   	</form>
</div>

	

		</div>
		
		
		
		
	</div>
	</div>
	</div>	
	</div>

</div>

<script>

var sayi ;

$(document).ready(function() {

	
	sayi = 0;

        $('.btn-success').click(function() {

           document.getElementById("btn-payment").disabled=false;
           $(this).prop ('disabled', true);
           
           if (sayi >= 6) {
           	alert("Maksimum 6 Bilet seçilebilir.");
           	$(this).prop('disabled',false);
           	sayi = 6;
           }else {
           	sayi = sayi +1;
           	document.getElementById("secimler").value= $(this).val()+" "+document.getElementById("secimler").value;  // Tüm seçilmiş biletler ekrana yazılıyor.
           	
           }
           document.getElementById("ticketNum").value = sayi;
        });
    });


function sifirla(){ 

	document.getElementById("btn-payment").disabled=true;
	sayi = 0;

	var x = document.getElementsByClassName("btn-success");
	for (var i = 0; i < x.length; i++) {
		x[i].disabled= false;
		
		
	}
}




</script>


</body>
</html>