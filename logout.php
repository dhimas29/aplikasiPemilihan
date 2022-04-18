<?php
include('header.php');
?>

<?php
session_start();
session_destroy();
echo "<script> window.location.assign('index.php'); </script>";
include('footer.php');
