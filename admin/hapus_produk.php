<?php
include ('koneksi.php');
// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil ID produk dari URL
$id_produk = $_GET['id'];

// Query untuk menghapus produk dari tabel 'produk'
$sql_delete_produk = "DELETE FROM produk WHERE id_produk = $id_produk";

if (mysqli_query($conn, $sql_delete_produk)) {
    // Produk berhasil dihapus dari tabel 'produk'

    // Query untuk mendapatkan nama file gambar berdasarkan ID produk
    $sql_get_image = "SELECT foto_produk FROM produk WHERE id_produk = $id_produk";
    $result = mysqli_query($conn, $sql_get_image);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama_file_gambar = $row['foto_produk'];

        // Hapus gambar dari folder
        $lokasi_gambar = "../foto_produk/$nama_file_gambar";
        if (unlink($lokasi_gambar)) {
            // Gambar berhasil dihapus dari folder
            echo "Produk berhasil dihapus, dan gambar juga dihapus.";
        } else {
            echo "Produk berhasil dihapus, tetapi gagal menghapus gambar.";
        }
    } else {
        echo "Produk berhasil dihapus, tetapi tidak ada gambar yang terkait.";
    }
} else {
    echo "Gagal menghapus produk: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
