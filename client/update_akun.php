<?php
session_start(); 
include ('../admin/koneksi.php');
if (!isset($_SESSION["user_id"])) {
    header("location: login.php"); 
    exit;
}
$id_acc = $_GET['id_acc'] ?? null;

if (isset($_POST['update'])) {
    $username = $_POST['username_update'];
    $email = $_POST['email_update'];
   

    $update_query = "UPDATE account SET 
                        username = '$username', 
                        email = '$email'
                        
                    WHERE id_acc = $id_acc";

    if (mysqli_query($conn, $update_query)) {
       
        header("Location: account.php");
        exit();
    } else {
        echo "<script> alert('Gagal mengubah data.'); </script>";
    }
}
$query = "SELECT * FROM account WHERE id_acc = $id_acc";
$result = mysqli_query($conn, $query);
$account = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../element/NavbarLS.php'?>
    
    <br>
</head>

<style>
    .loginbox
    {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1280px;
        height: 850px;
        flex-shrink: 0;
        border-radius: 46px;
        background: #ADD8FF;
    }
    .loginbox2{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1064px;
        height: 800px;
        flex-shrink: 0;
        border-radius: 46px;
        background: #9CC4FF;
    }

    .loginbox3{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 550px;
        height: 750px;
        flex-shrink: 0;
        border-radius: 46px;
        background:#2B61EC;
    }  

</style>





<body style="background-image: repeating-linear-gradient(to right, rgba(71, 74, 255, 0.14), rgba(71, 74, 255, 0.14) 9px, transparent 9px, transparent);
background-size: 38px 38px;
background-color: #ffffff;">
    
<!-- Login -->
<!-- kalau sudah bisa,lebih baik jangan disentuh lagi aokwoakwokwa -->

<section>
  <div style="padding: 46px" class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="loginbox">
          <div class="loginbox2">
          <img src="../logo_revisi/EduLang.png" class="img-fluid" alt="SponTy" style="width: 380px;
    height: 200px;">            <div class="loginbox3">

              <form method="POST">
                <h2 class="mb-4" style="text-align: center; color: #ffff;
text-align: center;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 800;
line-height: normal;"><b>Edit Akun</b></h2>
                <div class="mb-3">
        <input value="<?php echo $account['username']; ?>" type="text" style="width: 414px; height: 53px; border-radius: 17px;" class="form-control custom-input" id="username" name="username_update" placeholder="Masukkan username Anda" required>
    </div>
    <div class="mb-3">
        <input value="<?php echo $account['email']; ?>" type="email" style="width: 414px; height: 53px; border-radius: 17px;" class="form-control custom-input" id="email" name="email_update" placeholder="Masukkan alamat email Anda" required>
    </div>
    <div class="mb-3">
        <input value="<?php echo $account['password']; ?>" type="password" style="width: 414px; height: 53px; border-radius: 17px;" class="form-control custom-input" id="password" name="password_update" placeholder="Masukkan password Anda" required>
    </div>
    <br>
    <button style="border-radius: 17px; width: 196px; height: 53px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-warning custom-btn m-2" name="update"><b>Update !</b></button>
    <button style="border-radius: 17px; width: 196px; height: 53px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-danger custom-btn" onclick="window.location.href='account.php';"><b>Batal</b></button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</body>

<br>
<br>
<br>

<footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
</html>