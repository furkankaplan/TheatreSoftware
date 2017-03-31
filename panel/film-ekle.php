

<div class="container" >

<form action="gonder.php" method="POST" enctype='multipart/form-data'>
		<div class="row">
		<div class="col-md-4">
		<h4>Film Adı</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Film Adı" name="fname"  required>
		</div>
		</div>


		<div class="col-md-4">
		<h4>Oyuncular</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Oyuncular" name="fstars"  required>
		</div>
		</div>

		<div class="col-md-4">
		<h4>Özet</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Özet" name="fsummary"  required>
		</div>
		</div>

		
	</div>

	<div class="row">
		<div class="col-md-4">
		<h4>Seans Süresi</h4>
		<div class="input-group">
		<input type="number" class="form-control" placeholder="" name="seans" required>
		</div>
		</div>
		
		<div class="col-md-4">
		<h4>Afiş</h4>
		<div class="input-group">
		<input type="file" class="form-control" placeholder="Afiş" name="fposter"  required>
		</div>
		</div>

		<div class="col-md-4">
		<h4>Fragman Linki</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Fragman Linki" name="fmovieclip"  required>
		</div>
		</div>


	</div>


<div class="row">

<div class="col-md-2" style="margin-top: 20px;">
	
	<select name="gosterim_turu" class="form-control">
  		<option value="0">Vizyonda</option>
  		<option value="1">Gelecek Gösterim</option>
    </select>

</div>
</div>
<div class="row">

	<div class="col-md-4">
		<h4>Gösterim Tarihi</h4>
		<div class="input-group">
		<input type="date" class="form-control" placeholder="Fragman Linki" name="tarih"  required>
		</div>
		</div>
	

	
</div>

<div class="col-md-3"><input type="submit"  value=" Filmi Ekle" id="btn-payment"  class="btn btn-danger"></button></div>

</form>
</div>

</body>

