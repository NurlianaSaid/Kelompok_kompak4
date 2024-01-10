<?php 
error_reporting(0);
session_start();
require "../koneksi.php";
$sesiadmin = $_SESSION['owder']; //sesi login

if(!isset($sesiadmin)){
    header('location:index1.php'); //redirect atau location
}
$admin = mysqli_fetch_array(mysqli_query($koneksi, "select * from tb_admin where id_admin='$sesiadmin'"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal berita Mahasiswa</title>
   <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
</head>

<body>
    <div id="container"> <!-- kerangka web / bingkai -->
    <div class="header"> <!-- bagian header web -->
<h1> Admin - Portal Berita Mahasiswa</h1>
<p>Berita terkini dan terupdate dikalangan mahasiswa</p>
        </div>
        
        <div class="menu"> <!-- bagian menu -->
       <ul>
        <li><a href="home.php" title="home">Beranda</a></li>
        <li><a href="berita.php" title="home">Berita</a></li>
        <li><a href="logout.php" title="home">Logout</a></li>
       </ul>
</div>

        <div class="konten"> <!-- body web -->
            <div class="konten-kiri"> <!-- side bar left -->
         <h1>BERITA </h1>

         <!-- menampilkan berita -->
         <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Penulis</th>
                    <th>Tgl posting</th>
                    <th>Gambar</th>
                    <th>Action</th>
            </thead>
            <tbody>
                <?php 
                $sql = mysqli_query($koneksi,"select * from tb_berita, tb_kategori, tb_admin where tb_berita.id_kategori=tb_kategori.id_kategori and tb_berita.id_admin=tb_admin.id_admin");
                while($row=mysqli_fetch_assoc($sql))
                {
  
                ?>
                <tr>
               
                    <td><?= $row['judul'];?></td>
                    <td><?= $row['kategori'];?></td>
                    <td><?= $row['text_berita'];?></td>
                    <td><?= $row['username'];?></td>
                    <td><?= $row['tgl_posting'];?></td>
                    <td><img src="../gambar/<?= $row["gambar"];?>" width="50"></td>
                    

                    <td><a href="" title="edit">Edit</a>
                        <a href="" title="hapus">Hapus</a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
         </table>
            </div>
            
            <div class="konten-kanan"></div> <!-- side bar right -->
        </div>
        <?php require "../footer.php" ?>