

<div class="container" >

<form action="gonderTiyatro.php" method="POST" enctype='multipart/form-data'>
		<div class="row">
		<div class="col-md-4">
		<h4>Tiyatro Adı</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Tiyatro Adı" name="fname"  required>
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
        <h4>Yonetmen</h4>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Yonetmen adı" name="tyonetmen" required>
        </div>
    </div>
    <br>
	<div class="col-md-4">
		<h4>Gösterim Tarihi</h4>
		<div class="input-group">
		<input type="date" class="form-control" placeholder="Tarih" name="tarih"  required>
		</div>
		</div>
	

	
</div>

<div class="col-md-3"><input type="submit"  value=" Tiyatro Ekle" id="btn-payment"  class="btn btn-danger"></button></div>

</form>
</div>

</body>

