<?php
include ('koneksi.php');
session_start();
session_destroy();
echo "<script>window.location='../client/beranda.php'</script>";

?>