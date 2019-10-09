<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Filtering Product</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.6.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);}); 
</script>
</head>

<body class="distro">

<div id="container">
  <div id="header">
<?php
include "header.php";
?>
  <!-- end #header --></div>
  <div id="sidebar1">
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

<table width="100%" border="0">
<tr><td colspan="4"><div id="view-product">Hasil Pencarian Product</div></td></tr>
<tr>
<?php
include "koneksi.php";
$cari=$_POST['cari'];
$oke=mysqli_query($koneksi, "select * from product where name_product like '%$cari%' ");
$no=0;
while($data=mysqli_fetch_array($oke)){
echo "<td width='25%' id='bgproduct'><img src='admin/product/upload/$data[picture_product]' width='120' height='100'>
<br><b id='name-product'>$data[name_product]</b>
<br><b id='harga'>$data[price_product]</b>
<br><a href='product-detail.php?code=$data[code_product]'><img src='images/detail.png'></a></td>";
$no++;
if($no % 4==0){
echo"<tr>";
}
}
if($no==0){
	echo " <tr><td><center>Product dengan kategori ($cari) Belum Tersedia</center><td></tr>";
?>
</table>
<table width="100%" border="0">
<tr><td colspan="4"><div id="view-product">Recent Product</div></td></tr>
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
}
?>
</table>
<table width="100%" border="0">
<tr><td><div id="view-product">Recent Post</div></td></tr>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from post where type_post='post'");
$no=1;
while($data=mysqli_fetch_array($oke) and $no <=3){
echo "<tr><td id='judul'><a href='post.php?id=$data[id_post]'><b id='judul'>$data[title_post]</b></a></td></tr>";
echo"<tr><td><div id='date'><img src='images/calendar.png'>$data[date_post] by $data[author_post]</div></td></tr>";
$isi_berita = htmlentities(strip_tags($data['content_post'])); // membuat paragraf pada isi berita dan mengabaikan tag html
$isi = substr($isi_berita,0,150); 
$isi = substr($isi_berita,0,strrpos($isi," "));
echo"<tr><td>$isi....<br>
	<a href='post.php?id=$data[id_post]'> <img src='images/readmore.png' border='0' style='margin-top:8px' /></td></tr>";
$no++;
}
?>
</table>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
   <div id="footer">
<?php
include "footer.php";
?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>