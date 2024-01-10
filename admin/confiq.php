<?php 
$conn = mysqli_query("localhost","root","","berita_kita");
if (!$conn) {
    die("Koneksi gagal ". mysqli_connect_error());
    
}
?>