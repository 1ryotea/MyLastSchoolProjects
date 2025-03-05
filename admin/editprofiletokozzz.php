<?php
include ('koneksi.php');
if(isset($_POST['submittokobaru'])){
    // Mendapatkan data dari formulir
    $namaTokoBaru = $_POST['namatokobaru'];
    $lokasiTokoBaru = $_POST['lokasitokobaru'];
    $deskripsiTokoBaru = $_POST['desktokobaru'];

    // Query SQL untuk mengupdate data toko
    $updateQuery = "UPDATE toko_user SET nama_toko='$namaTokoBaru', alamat='$lokasiTokoBaru', deskripsi='$deskripsiTokoBaru'";

    // Jalankan query update (tanpa kondisi WHERE)
    if ($conn->query($updateQuery) === TRUE) {
        // Data toko berhasil diubah
        header('Location: ../client/beranda_toko.php');

    } else {
        // Kesalahan dalam mengubah profil toko
        echo "Terjadi kesalahan dalam mengubah profil toko: " . $conn->error;
    }
}
?>
