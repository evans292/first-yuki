<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;
    }
}
else
{
    ?>
    Selamat Datang di Aplikasi Pengaduan Masyarakat  Layanan Yang Menampung Saran Maupun Kritikan Dari Masyarakat Untuk Kemajuan Dan Kenyamanan Bersama
    <br></br>
    Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama'];
}
?>