<style>
    .jssorb05{position:absolute}.jssorb05 div,.jssorb05 div:hover,.jssorb05 .av{position:absolute;width:16px;height:16px;background:url('img/b05.png') no-repeat;overflow:hidden;cursor:pointer}.jssorb05 div{background-position:-7px -7px}.jssorb05 div:hover,.jssorb05 .av:hover{background-position:-37px -7px}.jssorb05 .av{background-position:-67px -7px}.jssorb05 .dn,.jssorb05 .dn:hover{background-position:-97px -7px}.jssora22l,.jssora22r{display:block;position:absolute;width:40px;height:58px;cursor:pointer;background:url('img/a22.png') center center no-repeat;overflow:hidden}.jssora22l{background-position:-10px -31px}.jssora22r{background-position:-70px -31px}.jssora22l:hover{background-position:-130px -31px}.jssora22r:hover{background-position:-190px -31px}.jssora22l.jssora22ldn{background-position:-250px -31px}.jssora22r.jssora22rdn{background-position:-310px -31px}.jssora22l.jssora22lds{background-position:-10px -31px;opacity:.3;pointer-events:none}.jssora22r.jssora22rds{background-position:-70px -31px;opacity:.3;pointer-events:none}
</style>
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <?php include_once "Classes.php";?>
<?php 

            include ("connect.php");

            $obj = new Slider();
            $dizi = $obj -> getSliderAll();
            foreach ($dizi as $elements) {
               $id = $obj -> getID($elements);
               $slidename = $obj -> getAdi($elements);
               $slide_yazi = $obj -> getYazi($elements);
                $slide_resmi = $obj -> getResmi($elements);
            
            echo ' <div data-p="225.00">
                
                <img data-u="image" src="img/'.$slide_resmi.'" alt="" />
                 <h1  class="wow slideInLeft" data-u="caption" data-t="7"
                            style="color:white;padding:30px;background:rgba(0,0,0,1);font-weight:bold; position: absolute;
margin-top: 20%; margin-left: 40%; margin-right:10%; margin-top: 25%" >'.$slide_yazi.' </h1> 
        </div>';
}


            ?>



       
		
		

		
		
		
		


    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
        <!-- bullet navigator item prototype -->
        <div data-u="prototype" style="width:16px;height:16px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->


<!--/slider -->