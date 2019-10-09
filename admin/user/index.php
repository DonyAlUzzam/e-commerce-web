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
<title>Menu Admin</title>
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
  <a href="index.php">* User Manager</a>
  <a href="../post/index.php">* Menu Post</a>
  <a href="../product/index.php">* Menu Product</a>
  <a href="../category/index.php">* Menu Category</a>
  <a href="../order/index.php">* Menu Order</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3>User Manager</h3>
      <!-- end #mainContent -->
    <img src="images/user.png" width="51" height="40" /> <a href="new.php"><img src="images/new.png" width="136" height="27" /></a>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from admin order by id_admin DESC");
echo"<table width='100%' border='0'>
<tr>
<th>NO</th>
<th>Nama</th>
<th>Username</th>
<th>Email</th>
<th>Option</th>
</tr>";
$no=1;
while($data=mysqli_fetch_array($oke)){
echo"<tr><td width='15' id='view'>$no</td>
<td width='140' id='view'>$data[name_admin]</td>
<td width='140' id='view'>$data[username_admin]</td>
<td width='30' id='author'>$data[email_admin]</td>
<th id='action'width='110'>
<a href='edit.php?id=$data[id_admin]'><input type='button' value='Edit' /></a>
<a href='delete.php?id=$data[id_admin]'><input type='button' value='Delete' /></a>
</th></tr>";
$no++;
}
echo"</table>";
?> 
    <p>&nbsp;</p>
  </div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
   <div id="footer">
   <?php
  include"../footer.php";
  ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
<?php } ?>