<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Deneme Projesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jasny-bootstrap.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/jquery-3.2.0.slim.min.js"></script>
    <link href= "css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">    
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">  
     <link href="css/datatables.min.css" rel="stylesheet"> 
    <link href="css/ayar.css" rel="stylesheet">
  
</head>
<body>

<?php include ("connect.php"); ?>


<script>

$(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength : 25,
        responsive : true
    });

    
});

</script>
    <div class="row">
        

        <div class="col-md-9">
            <div class="row">
                <table class="dataTable-example table table-striped">
                <thead>
                    <tr>
                        <th>Tiyatro Adı</th>
                        <th>Gösterim Tarihi</th>
                        <th>Seans Süresi</th>
                        <th>Yönet</th>
                    </tr>
                    </thead>

                    <tbody>
                      <?php
                     $obj = new Tiyatrolar();
                     $dizi = $obj -> getTiyatrolar();

                     foreach ($dizi as $elements) {
                        $id = $obj -> getID($elements);
                        $tiyatro_adi=  $obj -> getTiyatroAdi($elements);
                        $seans = $obj -> getSeans($elements);
                        $gosterim_tarihi = $obj -> getGosterimTarihi($elements);

                        echo ' <tr>
                        <td>'.$tiyatro_adi.'</td>
                        <td>'.$gosterim_tarihi.'</td>
                        <td>'.$seans.'</td>
                        <td>
                        <a class="btn btn-warning btn-xs" href="tiyatrolar.php?x=tiyatroduzenle&id='.$id.'" role="button">D</a>

                        <a class="btn btn-danger btn-xs" href="tiyatro_sil.php?k='.$id.'" role="button">S</a></td>
                        </tr>';


                     }



                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>