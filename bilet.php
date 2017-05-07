<?php include_once "Classes.php";?>
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
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">	
	<link href="css/jasny-bootstrap.min.css" rel="stylesheet">	
    <link href="css/ayar.css" rel="stylesheet">

    <script>
    	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
		})


function kontrol(aForm){
	if((aForm.name.value=="" ) || (aForm.email.value=="") || (aForm.telNumber.value=="") || (aForm.surname.value=="")   )
	{
		
		alert("Hata","Lütfen boş alan bırakmayın");
		return false;
	}
	else{
		return true;
	}
}</script>

</head>

<body>

<?php 

include ("connect.php");

$id=@$_GET["b"];


$dizi = new Films();
$result = $dizi -> getFilmsByID($id); // dönen sql dizisi.
$isim = $dizi -> getFilmAdi($result);
$oyuncular = $dizi -> getOyuncular($result);

$ozet = $dizi -> getOzet($result);
$seans = $dizi -> getSeans($result);
$poster = $dizi -> getAfis($result);
$fragman = $dizi -> getFragman($result);
$tarih = $dizi -> getGosterimTarihi($result);

 ?>

<?php
	include ("navbar.php");
 ?>

<?php 
$deger = trim($_POST["ticket"]);
$ticketNums = $_POST["ticketNum"];





$ticketcosting = $ticketNums * 10

?>


<div class="row" style="margin:100px;">


<form action="form.php?y=<?php echo $id;?><?php echo isset($_GET["t"])?"&t=t":""; ?>" method="post" name="ticketform">
<div class="col-md-3">
<?php echo '<div class="panel panel-default">
	<div class="panel-heading"><h4>Oyun Bilgileri</h4></div>
    <div class="panel-body">
		<div class="row row-table">'.$isim.'</div>
		<div class="row row-table">Salon Numarası: 1</div>
		<div class="row row-table">'.$tarih.' </div>
		<div class="row row-table"><div class="col-md-6" style="padding-top: 5px;">Koltuk Sayısı </div> 
		<div class="col-md-6"><input type="text" readonly class="form-control ticketclass pull-right" id="idticket" name ="ticketNums" value="'.$ticketNums.'" ></div></div>
		<div class="row row-table">
			<div class="col-md-8"><input type="text" name="koltuknumarasi" class="seatnames" value="'.$deger.'" readonly></div>
			<div class="col-md-4"><input type="text" id= "money" value="'.$ticketcosting. '₺ " class="read-cost" name="ucret" readonly></div>
		</div>
		
		
  </div>
</div>'; ?>

</div>



<div class="col-md-9">

<div class="row">

<div class="panel panel-default">

<div class="panel-heading">
<h4>Bilet Tipini Seçiniz</h4>
</div>

<div class="panel-body">
<div class="row">
<div class="col-md-6">
<div class="form-group" >
 
  <select  class="form-control" id="sell1" onchange="ticketCost()" name="selectticket">
	<option value="Tam" id="fullTicket" selected="selected">Tam</option>
    <option value="Öğrenci" id="studentTicket" >Öğrenci</option>
    
   
  </select>
  </div>
</div>
</div>
</div>


</div>

</div>


<div class="row">
<form action="form.php" method="post">
<div class="panel panel-default">
	<div class="panel-heading"><h4>İletişim Bilgileri</h4></div>
    <div class="panel-body">
	<div class="row">
	<div class="col-md-4">
	<h5>Adınız</h5>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Adınız" name="name" >
		<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
		</div>
		</div>
		
		<div class="col-md-4">	
		<h5>Soyadınız</h5>
		<div class="input-group">	
		<input type="text" class="form-control" placeholder="Soyadınız" name="surname"  >
		<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
		</div>
		
		</div>
				
	</div>
		
	<div class="row">
	<div class="col-md-4">
	<h5>Telefon Numaranız</h5>
	<div class="input-group">
		<input type="text" class="form-control" data-mask="(999) 999 99 99" placeholder="___ ___ __ __" name="telNumber" >
		<span class="input-group-addon glyphicon glyphicon-earphone" id="basic-addon1"></span>
		</div>
		</div>
		
		<div class="col-md-4">	
		
		<h5>E-Posta Adresiniz</h5>
		<div class="input-group">
			
		<input type="email" class="form-control" placeholder="E-Mailiniz" name="email"  title="ZOrunlu">
		<span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1" ></span>
		</div>
		</div>
	</div>
	</div>
	

</div>

</form>

</div>


<div class="row">

<div class="panel panel-default">
	
	<div class="panel-heading"><h4>Ödeme Bilgileri</h4></div>
    
	<div class="panel-body" >	
	<div class="col-md-8">
	<div class="row">
	
	<h5>Kart Üzerindeki İsim</h5>
	
		<input type="text" class="form-control" placeholder="İsim" name="cardName">
		
		
		</div>
		
		
		<div class="row">
			
		<h5>Kart Numarası</h5>
		
		<input type="text" class="form-control" data-mask="9999-9999-9999-9999" placeholder="____ - ____ - ____ - ____" name="cardNumber">
		
		
		</div>
		
		
		<div class="row">
		<div class="col-md-5">
		<h5>Son Kullanma Tarihi</h5>
		</div>
		<div class="col-md-6">
		<h5>Güvenlik Numaranız</h5>
		</div>
		</div>

		<div class="row">
		
		
		<div class="col-md-3">
		<div class="form-group">
 
		<select class="form-control" id="date1">
		<option>01</option>
		<option>02</option>
		<option>03</option>
		<option>04</option>
		<option>05</option>
		<option>06</option>
		<option>07</option>
		<option>08</option>
		<option>09</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
    
    	</select>
		</div>
		</div>
		
	
		
		
		
		<div class="col-md-3">
		<div class="form-group">
 
		<select class="form-control" id="date2">
		<option>2017</option>
		<option>2018</option>
		<option>2019</option>
		<option>2020</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
		<option>2024</option>
		
		
		</select>
		</div>
		
		</div>
 			


		<div class="col-md-3">
		<div class="input-group">
		<input type="text" class="form-control" data-mask="999" name="secnum">
		<a  data-toggle="tooltip" data-placement="right" title="CVV2/CVC2/CID Nedir? Kartınızın arkasında yazılı olan 3 haneli koddur." class="input-group-addon glyphicon glyphicon-question-sign" id="basic-addon1"></a>
		</div>
		</div>
		
		</div>



		
		<div class="row">
		<input type="checkbox" name="vehicle1" value="sart"> Biletinial.com <a href=""  data-toggle="modal" data-target="#kullanim">Kullanım Şartlarını</a> okudum ve organizatörler tarafından belirlenen etkinlik alanı kurallarıyla birlikte kabul ediyorum.<br>
		<input type="checkbox" name="vehicle2" value="abone"> Biletinial.com tarafından gönderilecek abonelik bültenlerine abone olmak istiyorum.
		</div>
		
		
		
		</div>
		
		<div class="col-md-3">
		
		<img src="img/3dsecure.png"  alt=""/>
		<p style="margin:5px;">3D Secure, internet üzerinden kredi kartı ve banka kartıyla yapılan alışveriş işlemlerinin güvenliğinin artırılması için Visa ve MasterCard tarafından geliştirilmiş bir sistemdir. Bir sonraki aşamada bankanızın çalışma sistemine göre belirlediği güvenlik aşaması için yönlendirileceksiniz.</p>
		</div>
		
		
		<div class="col-md-3">
		<input type="submit" class=" form-control"  value="Ödeme Yap!">
		</form></div>
		
				
	</div>
	

	</div>
	
	

</div>



</div>




</div>

<div class="modal fade" id="kullanim" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-primary">
        <button type="button" class="close" style="color:white; font-size:40px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title " id="myModalLabel">Kullanım Şartları</h4>
      </div>
      <div class="modal-body">
        "Ödeme" butonuna bastığınızda açıklanan bilgi ve koşulları kabul etmiş sayılırsınız.</br>
</br>
</br>
Kredi kartı aracılığı ile gerçekleştirilen ödeme ilgili banka tarafından Interbilet sistemi aracılığı ile online olarak gerçekleştirilmektedir.</br>
</br></br>
Sistemimiz “Rabbit 128 bit SSL Sertifikası” ile güvenlik kapsamı içindedir. Ödeme sırasında kullanmış olduğunuz kredi kartınıza ait bilgiler sistemimiz üzerinde kaydedilmemektedir.</br>
</br></br>
Ödeme işlemine onay verdikten sonra lütfen sabırlı olunuz, işleminizin bankadan onayı zaman alabilir.</br>
</br></br>
Söz konusu sistem her hangi bir sorun nedeni ile işlemi gerçekleştiremiyorsa ödeme sayfası sonucunda ziyaretçimiz bu durumdan haberdar edilmektedir.</br>
</br></br>
Ödeme işlemi gerçekleştikten sonra siparişlerinizi iptal edilemez ya da değiştirilemez. Bu yüzden lütfen sepet içeriğinizi kontrol ettikten ve içeriğinden emin olduktan sonra işleminizi onaylayınız.</br>
</br></br>
Gününde ve saatinde kullanılmayan biletler geçersiz olup, bilet bedeli ve hizmet bedeli iadesi ve/veya değişiklik yapılması mümkün değildir. Gün ve saatinde kullanılmayan biletlerin iadesi için İnterbilet’ten talepte bulunulamaz.</br>
</br></br>
Etkinliğin herhangi bir şekilde iptal edilmesinden firmamız sorumlu değildir. Ancak etkinlik iptali ya da etkinlik tarihinin ertelemesi gibi bilgiler bilet satın alırken kayıt etmiş olduğunuz telefon numaranız veya e-posta adresiniz üzerinden sizlere duyurulacaktır.</br>
</br></br>
Satın alınan etkinliklerin içerik ve görselleri anlaşmış olduğumuz organizatör firmalarca tarafımıza iletilmekte olup, iletildiği şekli ile sizlere sunulmaktadır. Etkinliklere ait içerik farklılıklarından ve görsellere ait telif haklarından kaynaklı sorunlarda firmamızın sorumluluğu bulunmamaktadır. Ayrıca etkinliklerin beklenen kalitesi ile ilgili bir garanti verilmemektedir.</br>
</br></br>
Bilet satışlarıyla ilgili belirlenen hizmet bedelleri; bilet satışı yapılan organizatör ile yapılan sözleşmelerde belirlenmiştir. Bilet satın alınan etkinlikler için bilet değeri içinden veya bilet bedeli üzerine eklenecek şekilde hizmet bedeli alınmaktadır. Bilet satın alırken eğer varsa bilet bedeli üzerinden alınan bu bedelleri ödemeyi kabul etmiş sayılırsınız.</br>
</br></br>
Bilet satın alma işlemi sırasında adınız, adresiniz, telefon numaranız, e-posta adresiniz, irtibat tercihleriniz gibi çeşitli bilgileri toplayabiliriz. Onay vererek bizimle paylaşacağınız bu bilgiler, başka hiçbir kişi ya da şirketle paylaşılmayacak, sadece ilgi alanlarınıza yönelik haber ve etkinlikler sunmak, sizi sitemizdeki yeniliklerden ve etkinliklerden haberdar etmek için kullanılacaktır.</br>
</br></br>
Amacımız sizlere kaliteli ve güvenli hizmet sunabilmektir. Görüş ve önerilerinizi info@biletinial.com e-posta adresimiz üzerinden bize iletebilirsiniz.</br></br></br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kabul Ediyorum</button>
        
      </div>
    </div>
  </div>
</div>



<script>
	var ticketCost = function (){

		var cost = document.getElementById("sell1").value;

		if (cost =="Tam") {
			var lolticket = document.getElementById("idticket").value * 10;
			document.getElementById("money").value = lolticket;

		}

		else{
			var lolticket2 = document.getElementById("idticket").value * 8;
			document.getElementById("money").value = lolticket2;
		}
	}


</script>

</body>