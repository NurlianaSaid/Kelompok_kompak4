<?php 
include '../koneksi.php'; //include file koneksi
include "../fungsi/fungsi.php"; //include file fungsi

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampildata</title>
</head>
<body>
    <table border="1" width="800px" align="center">
        <thead>
            <tr>
                <th colspan="6"><h3>Data User</h3></th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Mulai Kerja</th>
                <th>Selesai Kerja</th>
                <th>Lama Kerja</th>
                <th>Honor</th>
                
            </tr>
     </thead>   
     <tbody>
        <?php
        $data = mysqli_query($koneksi, "select * from tb_user");
        while($row = mysqli_fetch_array($data)){
        ?>
        
        <tr>
            <td><?= $row['id_user'];?></td>
            <td><?= ucwords($row['nama']);?></td> <!-- membuat nama menjadi kapital pada setiap kata depan  -->
            <td><?= format_tgl1($row['tgl_selesaikerja']);?></td>
            <td><?= format_tgl2($row['tgl_mulaikerja']);?></td>
            <td><?= $row['lamakerja'];?></td>
            <td><?= nominal($row['honor']);?></td> <!--ubah jadi format nominal-->
            
        </tr>
        <?php } ?>
</tbody>
</table>
</body>
</html>