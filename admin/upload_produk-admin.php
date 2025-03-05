<?php
include ('koneksi.php');

session_start();

if (isset($_FILES["foto_product-admin"]) && $_FILES["foto_product-admin"]["error"] == 0) {
    $target_dir = "../foto_produk/";
    $target_file = $target_dir . basename($_FILES["foto_product-admin"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["foto_product-admin"]["tmp_name"]);
    if ($check === false) {
        echo "File yang diupload bukan gambar.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Maaf, hanya file JPG, JPEG, dan PNG yang diizinkan.";
        $uploadOk = 0;
    }

    $nama_produk = $_POST["nama_produk-admin"];
    $deskripsi_produk = $_POST["deskripsi_produk-admin"];
    $nominal = $_POST["nominal-admin"];
    $tipe = $_POST["tipe-admin"];
    $lokasi = $_POST["lokasi"]; // Ambil nilai dari input teks "lokasi"

    if ($uploadOk == 0) {
        echo "Upload produk gagal.";
    } else {
        if (move_uploaded_file($_FILES["foto_product-admin"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO produk (judul_produk, harga, deskripsi_produk, foto_produk, tipe, lokasi) 
                    VALUES ('$nama_produk', '$nominal', '$deskripsi_produk', '$target_file', '$tipe', '$lokasi')";

            if (mysqli_query($conn, $sql)) {
                header("location: ../admin/index.php");
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
