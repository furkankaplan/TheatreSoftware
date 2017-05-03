<?php include("Classes.php");?>
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



$dizi = new Films();
$result = $dizi -> getFilmsByID($id);

$isim = $dizi -> getFilmAdi($result);
$oyuncular = $dizi -> getOyuncular($result);
$ozet = $dizi -> getOyuncular($result);
$seans = $dizi -> getSeans($result);
$poster = $dizi -> getAfis($result);
$fragman = $dizi -> getFragman($result);
$tarih = $dizi -> getGosterimTarihi($result);
$id= $dizi -> getID($result);

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

  		echo '<div class="col-md-6 text-right" style="font-weight: bold">Film:</div>';
  		echo '<div class="col-md-6 text-left">'.$isim.'</div>';
        echo '<div class="col-md-6 text-right" style="font-weight: bold">Seans:</div>';
  		echo '<div class="col-md-6 text-left">'.$seans.'</div>';
  		?>
  		
		
		<div class="row seat-row" >
		
		<?php
		$adizi= new Seats();
		$result = $adizi -> getSeatsByLike("A");

		foreach ($result as $eleman) {

            echo $adizi -> writeSeats($eleman);
			# code...
		}

		?>
		</div>

		<div class="row seat-row" >

		<?php
        $adizi= new Seats();
        $result = $adizi -> getSeatsByLike("B");

        foreach ($result as $eleman) {

            echo $adizi -> writeSeats($eleman);
        }

		?>
		
		</div>
		

		<div class="row seat-row" >

        <?php
            $adizi= new Seats();
            $result = $adizi -> getSeatsByLike("C");

            foreach ($result as $eleman) {

                echo $adizi -> writeSeats($eleman);
            }
		?>

		</div>

		<div class="row exit-row">
		<div class="row">
		<div class="col-md-2 pull-left"><button class="btn btn-danger btn-exit">E<br>X<br>I<br>T</button></div>
		<div class="col-md-2 pull-right"><button class="btn btn-danger btn-exit">E<br>X<br>I<br>T</button></div>
		</div>
			
		</div>


		<div class="row seat-row" >
            <?php
            $adizi= new Seats();
            $result = $adizi -> getSeatsByLike("D");

            foreach ($result as $eleman) {

                echo $adizi -> writeSeats($eleman);
            }
            ?>

		</div>



		<div class="row seat-row" >
            <?php
            $adizi= new Seats();
            $result = $adizi -> getSeatsByLike("E");

            foreach ($result as $eleman) {

                echo $adizi -> writeSeats($eleman);
            }
            ?>
		
 
		</div>

		<div class="row seat-row" >
            <?php
            $adizi= new Seats();
            $result = $adizi -> getSeatsByLike("F");

            foreach ($result as $eleman) {

                echo $adizi -> writeSeats($eleman);
            }
            ?>


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