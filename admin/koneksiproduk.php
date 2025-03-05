<?php
include ('koneksi.php');

$sql = "SELECT * FROM produk WHERE tipe = '$type'";

$result = mysqli_query($conn, $sql);


?>
