<?php
include "../check.php";
if (!check())
{
echo "<script>alert('Anda tidak berhak mengakses halaman ini')</script>";
echo"Silakan <a href='../login.php'>Login Kembali</a>";
}
else
{?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail Order</title>
<link rel="stylesheet" href="../STYLE.CSS" />
</head>
<body class="twoColElsLtHdr">

<div id="container">
  <div id="header">
    <h1>Panel Admin</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <div id="main_menu"><h3>Main Menu</h3></div>
  <div id="isi_menu_kiri">
  <a href="../user/index.php">* User Manager</a>
  <a href="../post/index.php">* Menu Post</a>
  <a href="../product/index.php">* Menu Product</a>
  <a href="../category/index.php">* Menu Category</a>
  <a href="index.php">* Menu Order</a>
  <a href="../link/index.php">* Menu Link</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3>Detail Pemesanan</h3>
	<img src="images/order.png" width="55" height="44" /> 
    <?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from pemesanan where id_pemesan='$_REQUEST[id]'");
$data=mysqli_fetch_array($oke);
echo"
<table width='100%'>
  <tr>
    <th colspan='3' id='title'>Detail Pemesan</th>
  </tr>
  <tr>
    <td width='20%' id='judul'>Nama</td>
    <td width='2%'>:</td>
    <td width='78%'>$data[name_pemesan]</td>
  </tr>
  <tr>
    <td  id='judul'>Alamat</td>
    <td>:</td>
    <td>$data[address_pemesan]</td>
  </tr>
  <tr>
    <td  id='judul'>Kota</td>
    <td>:</td>
    <td>$data[city_pemesan]</td>
  </tr>
  
  <tr>
    <td  id='judul'>Email</td>
    <td>:</td>
    <td>$data[email_pemesan]</td>
  </tr>
  <tr>
    <td  id='judul'>Telpon</td>
    <td>:</td>
    <td>$data[phone_pemesan]</td>
  </tr>
  <tr>
    <td  id='judul'>Tanggal</td>
    <td>:</td>
    <td>$data[date_pemesan]</td>
  </tr>
  <tr>
    <td  id='judul'>Status</td>
    <td>:</td>
    <td>$data[status_pemesan]</td>
  </tr>
  
  <tr>
    <td colspan='3'><center><a href='index.php'><img src='images/back.png'/></a></center></td>
  </tr>
</table>";
?>
</div>
<br class="clearfloat" />
   <div id="footer">
   <?php
  include"../footer.php";
  ?>
   <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
<?php } ?>