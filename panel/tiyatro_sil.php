<?php

include ("connect.php");
include_once ("../Classes.php");

$tiyatro_id = $_GET["k"];

$obj = new Tiyatrolar();

if ($obj -> deleteTiyatrolar($tiyatro_id)) {
    echo "Silindi";?>
    <script>
        setTimeout(function(){ window.location.href='tiyatro-index.php'; }, 3000);
    </script>
    <?php

} else {
    echo "Silinemedi";
}

?>