<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Toko Online Kelompok</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>

<meta name="google-translate-customization" content="6c4781192c95003-97d5158c26efcbe4-gf498eccff66c2cbc-13"></meta>
</head>

<body class="distro">

<div id="container">
  <div id="header">
<?php
include "header.php";
?>
  <!-- end #header --></div>
<div   id="sidebar1">
<?php 
include "kiri.php";
?>
  <!-- end #sidebar1 --></div>
  <div id="sidebar2">
<?php 
include "kanan.php";
?>
  <!-- end #sidebar2 --></div>
  <div id="mainContent">
<?php
include "tarik.php";
?>
  <marquee> Selamat Datang Di Web Toko Online CyberChrome</marquee>

<table width="100%" border="0">
<tr><td colspan="4"><div id="view-product">View Product</div></td></tr>
<tr>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from product");
$no=0;
while($data=mysqli_fetch_array($oke) and $no<=11){
echo "<td width='25%' id='bgproduct'><img src='admin/product/upload/$data[picture_product]' width='120' height='100'>
<br><b id='name-product'>$data[name_product]</b>
<br><b id='harga'>$data[price_product]</b>
<br><a href='product-detail.php?code=$data[code_product]'><img src='images/detail.png'></a></td>";
$no++;
if($no % 4==0){
echo"<tr>";
}
}
?>
</table>
</div>
   <div id="footer">
<?php
include "footer.php";
?>
</div>
</div>
</body>
</html>