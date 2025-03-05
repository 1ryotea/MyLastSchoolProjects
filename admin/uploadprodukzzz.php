<?php
include ('koneksi.php');
session_start(); // Memulai sesi

if (!isset($_SESSION["user_id"])) {
    // Jika tidak ada sesi atau belum login, arahkan ke halaman login
    header("location: login.php"); // Ganti dengan halaman login kamu
    exit;
}

if (isset($_FILES["foto_product"]) && $_FILES["foto_product"]["error"] == 0) {
    $target_dir = "../foto_produk_client/"; // Lokasi penyimpanan gambar
    $target_file = $target_dir . basename($_FILES["foto_product"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar
    $check = getimagesize($_FILES["foto_product"]["tmp_name"]);
    if ($check === false) {
        echo "File yang diupload bukan gambar.";
        $uploadOk = 0;
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Batasi jenis file yang diizinkan (contoh: jpg, jpeg, png)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Maaf, hanya file JPG, JPEG, dan PNG yang diizinkan.";
        $uploadOk = 0;
    }

    // Ambil data dari form HTML
    $nama_produk = $_POST["nama_produk"];
    $deskripsi_produk = $_POST["deskripsi"];
    $nominal = $_POST["nominal"];
    $lokasi = $_POST["lokasi"];
    $tipe = $_POST["tipe"]; // Tambahkan ini untuk mengambil nilai "lokasi"

    // Cek apakah upload berhasil
    if ($uploadOk == 0) {
        echo "Upload produk gagal.";
    } else {
        // Jika semua cek berhasil, maka simpan gambar ke folder uploads
        if (move_uploaded_file($_FILES["foto_product"]["tmp_name"], $target_file)) {
            // Simpan data produk ke tabel 'produk_pribadi'
            $sql = "INSERT INTO produk_pribadi (judul_produk, harga, lokasi, foto_produk, tipe)
                    VALUES ('$nama_produk', '$nominal', '$lokasi', '$target_file','$tipe')"; // Tambahkan '$lokasi' di sini

            if (mysqli_query($conn, $sql)) {
                // Redirect ke halaman beranda_toko.php setelah berhasil mengupload produk
                header("location: ../client/beranda_toko.php");
                exit;
            } else {
                echo "Terjadi kesalahan dalam menyimpan data produk: " . mysqli_error($conn);
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload gambar.";
        }
    }
} else {
    echo "File gambar tidak diunggah dengan benar.";
}
?>
