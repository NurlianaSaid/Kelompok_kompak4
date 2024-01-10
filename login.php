<?php 

include "koneksi.php";
// include "../fungsi/fungsi.php"; //include file fungsi

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal berita Mahasiswa</title>
    <style>
        #container{ /*style untuk bingkai*/
            width:90%;
            min-height:600px;
            margin:20px auto;
            border:#CCC solid 1px;
            background:#003366;
            padding:10px;
        }
        #container .header{/*style untuk header*/
            /* width:100%; */
            height:100px;
            /* border:#CCC solid 1px; */
            background:#003399;
            font-size:14px;
            color:white;
            /* padding:10px; */
            /* position: relative; */
            
        }
        #container .menu{ /*style untuk menu*/
            height:50px;
            background:#888;
            font-size:14px;
            color:white;
        }
        #container .menu ul{  /*style untuk bagian tombol menu*/
            list-style:none;
          margin: 0;
          padding:0;

        }
        #container .menu ul li a{
            width:100px;
            height:30px;
            float:left;
            padding-top:8px;
            margin:5px;
            color:white;
            text-align:center;
            font-size:14px;
            background:#003399;
            text-decoration:none;
        }
        #container .menu ul li a:hover{ /*style untuk tombol saat didekatkan berubah warna*/
            font-size:16px;
            background: #000;
            
        }
        #container .konten{
            min-height:400px;
            background:#ccc;
        }
        #container .konten .konten-kiri{
            width:70%;
            min-height:400px;
            border:#fff solid 1px;
            float:left;
            background:#f5f5f5;
        }
        #container .konten .konten-kanan{
            width:28%;
            min-height:400px;
            float:right;
            background:#f5f5f5;
        }
        #container .footer{
            text-align:center;
            color:white;
            font-size:12px;
            height:80px;
            padding-top:15px;
        }
        .feedberita{
         padding:10px ;
         border:#ccc solid 1px;
         border-radius:10px;
         background:#CCC;
         height:auto;
        }
    </style>
</head>
<body>
    <div id="container"> <!-- kerangka web / bingkai -->
        <div class="header"> <!-- bagian header web -->
<h1> Portal Berita Mahasiswa</h1>
<p>Berita terkini dan terupdate dikalangan mahasiswa</p>
        </div>
        <div class="menu"> <!-- bagian menu -->
       <ul>
        <li><a href="index.php" title="home">Beranda</a></li>
        <li><a href="" title="home">Berita</a></li>
        <li><a href="" title="home">Kontak Kami</a></li>
        <li><a href="" title="home">Login anggota</a></li>
        <li><a href="" title="home">Login Admin</a></li>
       </ul>
        </div>
        <div class="konten"> <!-- body web -->
            <div class="konten-kiri"> <!-- side bar left -->
            <h2>LOGIN ADMIN</h2>
          <form action="" method="post">
            <input type="text" name="user" placeholder="Masukkan User Admin" size="50" required></input>
            <input type="password" name="pass" placeholder="Masukkan Password Admin" size="50" required></input>
            <button type="" ></button>
          </form>
            </div>
            <div class="konten-kanan"></div> <!-- side bar right -->
        </div>
        <div style="clear:both;"></div>
    <div class="footer"> <!-- footer -->
    <p>Copyright Nurliana 2023 - All Right Revensed</p>
    </div>
    <div style="clear:both;"></div>
    </div>
</body>
</html>