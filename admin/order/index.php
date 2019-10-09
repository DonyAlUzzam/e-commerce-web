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
<title>Menu Order</title>
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
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> Order Manager</h3>
    <img src="images/order.png" width="55" height="44" /> 
    
    <?php
include "../../koneksi.php";
$oke=mysqli_query($koneksi, "select * from pemesanan order by id_pemesan DESC");
echo"<table border='0' width='100%' id='table1' class='scroll'>
<tr>
<th width='5%'>NO</th><th width='25%'>Nama</th><th width='15%'>Telpon</th><th width='15%'>Status</th><th width='22%'>Action</th>
</tr>";
$no=1;
while($data=mysqli_fetch_array($oke)){
echo"<tr><td>$no</td>. 
<td>$data[name_pemesan]<div id='author'>Submitted on $data[date_pemesan]</div></td>
<td>$data[phone_pemesan]</td>
<td>$data[status_pemesan]</td>
<th id='action'>
<a href='detail.php?id=$data[id_pemesan]'><input type='button' value='Detail' /></a>
<a href='konfirmasi.php?id=$data[id_pemesan]'><input type='button' value='konfirmasi' name='konfirmasi'>
</th></tr>";?>
<?php
$no++;
}
echo"</table>";
if($no==1){
	echo"<center>Data Masih Kosong</center>";
	}
?>
    
  </div>
<br class="clearfloat" />
<div id="footer">
<?php
  include"../footer.php";?>
   <!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>
<?php } ?>