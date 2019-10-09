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
<title>Menu Post</title>
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
  <a href="index.php">* Menu Post</a>
  <a href="../product/index.php">* Menu Product</a>
  <a href="../category/index.php">* Menu Category</a>
  <a href="../order/index.php">* Menu Order</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> Post Manager</h3>
    <img src="images/post.png" width="51" height="40" /> <a href="new.php"><img src="images/new.png" width="136" height="27" /></a> 
    <?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from post order by id_post DESC");
echo"<table border='0' width='100%' id='table1'>
<tr>
<th>NO</th><th>Title</th><th>Type</th><th>Status</th><th>Action</th>
</tr>";
$no=1;
while($data=mysqli_fetch_array($oke)){
echo"<tr><td width='5%' id='view'>$no</td>
<td width='65%' id='view'>$data[title_post]<div id='author'>Submitted on $data[date_post] By $data[author_post]</div></td>
<td width='5%'>$data[type_post]</td>
<td width='5%'>$data[status_post]</td>
<th id='action' width='20%'>
<a href='edit.php?id=$data[id_post]'><input type='button' value='Edit' /></a>
<a href='delete.php?id=$data[id_post]'><input type='button' value='Delete' /></a>
</th></tr>";
$no++;
}
echo"</table>";
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