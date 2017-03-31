<?php
session_start();
ob_start();
session_destroy();
header("location:mrzpanelgiris.php");
?>