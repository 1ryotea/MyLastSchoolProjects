<?php
include ('koneksi.php');
if (isset($_POST['submittoko'])) {
    $namatoko = $_POST['namatoko'];
    $lokasitoko = $_POST['lokasitoko'];
    $desktoko = $_POST['desktoko'];
    $id_owner = $_POST['id_owner'];


    // Handle upload gambar toko jika diperlukan
    // Misalnya: $fototoko = $_FILES['fototoko']['name'];
    // Kemudian simpan gambar ke direktori dengan move_uploaded_file

    // Query untuk memasukkan data toko ke dalam database
    $sql = "INSERT INTO toko_user (nama_toko, alamat, deskripsi, id_owner) VALUES ('$namatoko', '$lokasitoko', '$desktoko','$id_owner')";

    if ($conn->query($sql) === TRUE) {
        echo "Toko berhasil didaftarkan.";
        header("Location: ../client/beranda_toko.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
