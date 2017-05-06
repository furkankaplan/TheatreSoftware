
<?php include ("connect.php"); ?>



    <div class="row">
        

        <div class="col-md-9">
            <div class="row">
                <table class="dataTable-example table table-striped">
                <thead>
                    <tr>
                        <th>Slider Adı</th>
                        <th>Yazısı</th>
                        <th>Linki</th>
                        <th>Fotoğrafı</th>
                        <th>Yönet</th>
                    </tr>
                    </thead>

                    <tbody>


                      <?php 
                     $dizi = new Slider();
                     $result = $dizi -> getSliderAll();

                     foreach ($result as $elements) {
                        $id = $dizi -> getID($elements);
                        $slidename = $dizi -> getAdi($elements);
                        $slidelink = $dizi -> getLink($elements);
                        $slidephoto = $dizi -> getResmi($elements);
                        $slidewriting = $dizi -> getYazi($elements);

                        echo ' <tr>
                        <td>'.$slidename.'</td>
                        <td>'.$slidewriting.'</td>
                        <td>'.$slidelink.'</td>
                        <td>'.$slidephoto.'</td>
                        <td>
                        <a class="btn btn-warning btn-xs" href="slide-duzenlee.php?id='.$id.'" role="button">D</a>

                        <a class="btn btn-danger btn-xs" href="slide_sil.php?k='.$id.'" role="button">S</a></td>
                        </tr>';


                     }



                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
