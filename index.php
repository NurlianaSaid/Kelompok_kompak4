
<?php 
// $conn = mysqli_connect("localhost","root","","berita_kita");
require "koneksi.php";
// var_dump($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal berita Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
 
</head>
<body>
    <div id="container"> <!-- kerangka web / bingkai -->

       <?php require "header.php" ?>

        <div class="konten"> <!-- body web -->
            <div class="konten-kiri"> <!-- side bar left -->
            <h2>BERITA TERBARU</h2>
            <!-- <hr> -->
            <?php
            $data = mysqli_query($koneksi, "select * from tb_berita, tb_admin where tb_berita.id_admin=tb_admin.id_admin 
            order by id_berita desc");
            while($row = mysqli_fetch_array($data)){
            
            ?>
            <div class="feedberita">
                <img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['judul'];?>" style="width:150px;height:150px;
                float:left;margin:10px;">
                <a href=""><h3><?= $row['judul'];?></h3></a>
                <hr>
                <p><?= substr($row['text_berita'],0,150);?>...<a href="">Baca Selengkapnya</a></p>
                <p>Diposting oleh : <br><?= $row['nama_lengkap'];?> , Tanggal : <?= $row['tgl_posting'];?></p>
            </div>
            <?php } ?>
            </div>
            <div class="konten-kanan"></div> <!-- side bar right -->
        </div>
        <?php require "footer.php" ?>