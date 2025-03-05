<?php
// Langkah 1: Buat koneksi ke database
include ('koneksi.php');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Langkah 2: Tangani pengiriman data formulir
if (isset($_POST["daftaracc"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Langkah 3: Hash password sebelum menyimpannya
    

    // Langkah 3: Jalankan kueri SQL untuk memasukkan data
    $sql = "INSERT INTO account (username, email, password, role) VALUES ('$username', '$email', '$password', 'user')";

    if ($conn->query($sql) === TRUE) {
        echo "Akun berhasil didaftarkan. Silakan <a href='Login.php'>login</a>.";

        // Langkah 4: Arahkan ke halaman beranda_login.php
        header("Location: ../client/Login.php");
        exit(); // Pastikan kode berhenti di sini
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- $conn = mysqli_connect("localhost", "root", "", "p_pkl");
if (isset($_POST['simpan'])) {

    $Nama = htmlspecialchars($_POST['namalengkap']);
    $username = htmlspecialchars($_POST['usrnm']);
    $password = md5($_POST['psw']);
    $role = "user";
    
    $simpan = mysqli_query($conn, "INSERT INTO account (nama_lengkap, username, password, role) VALUES ('$Nama', '$username', '$password', '$role')"); -->

