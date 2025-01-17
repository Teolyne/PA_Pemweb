<?php
require "../util/loginSession.php";
require "../util/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/user_page_style.css">
    <script src="../javascript/admin.js"></script>
    <title>Admin Landing Page</title>
</head>

<body>
    <nav class="nav-admin">
        <div class="show-more" onclick="toggleSubMenu()">=</div>
        <a href="UserPage.php" class="home">Home</a>
        <div class="welcome-text">Selamat Datang <?= $username ?></div>
        <div class="submenu" id="submenu">
            <p>
                <a href="javascript:void(0);" onclick="toggleDropdown('dropdown1')">Manajemen Katalog</a>
                <div class="dropdown" id="dropdown1">
                    <a href="../pages/tambah.php">Tambah Item</a>
                    <a href="../pages/edit_product.php">Ubah Data Item</a>
                    <a href="../util/delete_product.php">Hapus Item</a>
                </div>
            </p>
            <p>
                <a href="javascript:void(0);" onclick="toggleDropdown('dropdown2')">Manajemen Pesanan</a>
                <div class="dropdown" id="dropdown2">
                    <a href="#">Konfirmasi Pesanan</a>
                    <a href="#">Selesaikan Pesanan</a>
                    <a href="#">Lihat Detail Pesanan</a>
                </div>
            </p>
            <p>
                <a href="javascript:void(0);" onclick="toggleDropdown('dropdown3')">Lihat Kontak</a>
                <div class="dropdown" id="dropdown3">
                    <a href="#">Lihat Pesan dari User</a>
                    <a href="#">Hapus Pesan</a>
                </div>
            </p>
        </div>
    </nav>  
    <div class="isi">
    <h1>Ini Isi</h1>
    <h1>Ini Admin</h1>
<style>
    .isi {
        height: 100vh;
    }
</style>
</div>
    <footer>
        <div class="footer" id="setting">
            <div class="icon">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footern">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footerb">
            <img src="../asset/logo.png" alt="" style="width: 50px; height: 50px;">
                <p>Copyright 2023,Designed By Kelompok PA</p>
            </div>
        </div>
        </footer>
</body>

</html>
