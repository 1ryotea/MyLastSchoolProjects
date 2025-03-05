<?php
include ('koneksi.php');
 if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

 function hapusSemuaDataTokoUser($conn) {
    $sql = "DELETE FROM toko_user";
    if (mysqli_query($conn, $sql)) {
     } else {
        echo "Error: " . mysqli_error($conn);
    }
}

 
function hapusSemuaDataProdukPribadi($conn) {
    $sql = "SELECT id_produk, foto_produk FROM produk_pribadi";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id_produk = $row["id_produk"];
            $nama_file = $row["foto_produk"];
            
           
            $delete_sql = "DELETE FROM produk_pribadi WHERE id_produk = $id_produk";
            if (mysqli_query($conn, $delete_sql)) {
             
                $folder_foto = "../foto_client/";  
                $path_foto = $folder_foto . $nama_file;
                if (unlink($path_foto)) {
                 } else {
                    echo "Gagal menghapus file foto '$nama_file'.<br>";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
     }
}

 hapusSemuaDataTokoUser($conn);
hapusSemuaDataProdukPribadi($conn);

 mysqli_close($conn);

 header("Location: ../client/beranda.php");
exit;  
?>
