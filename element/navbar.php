
<?php
include ('../admin/koneksi.php');
?>
<!doctype html>
<html lang="en">
  <head>  <title>EduLang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Logo_revisi/EduLang1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
<style>
 .input-field {
    border: none;
    width: 0;
    max-width: 30cm;
    padding: 10px;
    animation: expandInput 2s forwards ease;
}

@keyframes expandInput {
    from {
        width: 0;
    }
    to {
        width: 30cm;
    }
}

  .gg-search {
    box-sizing: border-box;
    position: relative;
    display: block;
    transform: scale(var(--ggs,1));
    width: 16px;
    height: 16px;
    border: 2px solid;
    border-radius: 100%;
    margin-left: -4px;
    margin-top: -4px
}
.gg-search::after {
    content: "";
    display: block;
    box-sizing: border-box;
    position: absolute;
    border-radius: 3px;
    width: 2px;
    height: 8px;
    background: currentColor;
    transform: rotate(-45deg);
    top: 10px;
    left: 12px
}

p{
  font-family:Poppins;
}
h1{
  font-family:Poppins;
}
h2{
  font-family:Poppins;
}
h3{
  font-family:Poppins;
}
h4{
  font-family:Poppins;
}
h5{
  font-family:Poppins;
}
</style>

<script>
        // Tambahkan kelas 'expand' ke input field setelah halaman dimuat
        window.addEventListener('load', function() {
            const inputField = document.querySelector('.input-field');
            inputField.classList.add('expand');
        });
    </script>
<nav class="navbar navbar-expand-lg" style="background-color:  #3330A3; z-index:4;">
  <div class="container-fluid" >
    <a class="navbar-brand" href="../client/beranda.php">
                <img src="../Logo_revisi2/SPOTY_L.png" alt="Bootstrap" width="200" height="50">
              </a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
       
        <li class="nav-item">
        <form class="d-flex" style="border-radius:16px;background:#BFE3FF;" role="search" action="../client/edulang_search.php">           
        <input class="form-control me-2 input-field" type="text" placeholder="Search" aria-label="Search" name="keyword">            
        <button class="btn btn-outline-success" style="border: none; background: none; border-left: 1px;"type="submit"><i class="gg-search"></i></button>   
          </form>
        </li>
        </ul>
        <div>
        <div class="dropdown text-center">
  <img src="../element/market.png" alt="" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 60px; width: 60px;">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
$tokos=$_SESSION['user_id'];
$sql = "SELECT * FROM toko_user WHERE id_owner='$tokos'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $namaToko = $row["nama_toko"];
    echo '<p class="text-center"> <b>' . $namaToko . '</b>  </p>';
    echo '<a class="dropdown-item text-center" href="beranda_toko.php" style="background-color: green; color: white;">Buka toko anda</a>';
} else {
    echo '<p class="text-center">Anda belum memiliki toko</p>';
    echo '<a class="dropdown-item text-center" href="daftartoko.php" style="background-color: green; color: white;">Buat Toko</a>';
}
?></div>
  </div>

  <?php
  

  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    echo '    
    </div>
    <div class="dropdown">
        <img src="../element/acc_logo.png" alt="" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:50px; width:80px;">
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="../client/account.php">My Account</a>
            <a class="dropdown-item" href="../admin/logout.php">Log Out</a>
        </div>
    </div>';
} else {
    echo '
    <button class="btn btn-secondary me-md-2" type="button" style="font-family: Poppins;" onclick="window.location.href=\'daftar.php\';">Sign Up</button>
    <button class="btn btn-secondary" type="button" style="font-family: Poppins;" onclick="window.location.href=\'Login.php\';">Login</button>';
}
?>

</div>
        </div>
      
    </div>
  </div>
</nav>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </head>   