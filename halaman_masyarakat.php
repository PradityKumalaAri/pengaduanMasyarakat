<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;

        case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;
 
        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;

        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
    }
} else {
?> <h2>Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat Kota Tulungagung</h2>
    <br><br>

    Anda Login sebagai : <h2><b><?php echo $_SESSION['nama'];
                            }
                                ?>