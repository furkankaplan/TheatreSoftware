<?php 

include("connect.php");

$id=$_GET["id"];

$slider_film = $db ->prepare("select * from slider_film where id=? ");
$slider_film -> execute(array($id));
$elements = $slider_film -> fetch(PDO::FETCH_ASSOC);

$slidename = $elements["slider_adi"];
$slidelink = $elements["slide_link"];
$slidephoto = $elements["slider_resmi"];
$slidewriting = $elements["slider_yazi"];
$id = $elements["id"];


 ?>



                 


<div class="container" >

<form action="slide-edit.php" method="POST">
		<div class="row">
		<div class="col-md-4">
		<h4>Slider Adı</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Slider Adı" name="slidename" value="<?php echo $slidename; ?>" required >
		</div>
		</div>


		<div class="col-md-8">
		<h4>Slider Resmi</h4>

		<input type="text" class="form-control" value="<?php  echo $slidephoto;?>">

       <div class="dropzone" data-width="900" data-height="500" data-ghost="false" data-resize="true" data-originalsize="false" data-image="../img/<?php echo $slidephoto;?>" style="width:400px; height:300px; " data-url="canvas.php">
<input type="file" name="thumb" />

</div>
<input type="hidden"  name="Resim" id="Resim" value="<?php echo $slidephoto;?>"  class="form-control"/>

    
		</div>




<div class="row">
		<div class="col-md-4">
		<h4>Slider Yazısı</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Yazınız" name="slidewriting"  value="<?php echo $slidewriting; ?>" required>
		</div>
		</div>
		</div>

	

	<div class="row">
		<div class="col-md-4">
		<h4>Slide Linki</h4>
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Link" name="slidelink" value="<?php echo $slidelink; ?>" required>
		</div>
		</div>
		
	</div>




<div class="col-md-6" style="margin-top: 20px;"><input type="submit"  value=" Slide Düzenle" id="btn-payment"  class="btn btn-danger pull-right"></button></div>
<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>
</div>


       <script>
$('.dropzone').html5imageupload({
onAfterProcessImage: function() {
$('#Resim').val($(this.element).data('name'));
},
onAfterCancel: function() {
$('#Resim').val('');
}
});
</script>
