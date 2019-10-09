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
<title>Menu Setting</title>
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
  <a href="../order/index.php">* Menu Order</a>
  <a href="index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> Option Manager</h3>
	<img src="images/options.png" width="51" height="40" />
    <form action="edit.php" method="post" name="option">
<table width="100%" border="0" id="table1">
    <?php
include "../../KONEKSI.php";
$oke=mysqli_query($koneksi, "select * from options where option_name='blogname' ");
while($data=mysqli_fetch_array($oke)){
echo"<tr>
    <th colspan='2' id='title'>Edit Options</th>
  </tr>
  <tr>
    <td width='85' id='judul'><strong>Site title</strong></td>
    <td width='325'>:
    &nbsp;<input type='text' name='blogname' maxlength='200' size='60' value='$data[values_name]'>
    </td>
  </tr>";
}
$oke=mysqli_query($koneksi,"select * from options where option_name='siteurl'");
while($data=mysqli_fetch_array($oke)){
echo"<tr>
    <td  id='judul'><strong>Site address</strong></td>
    <td>:
    &nbsp;<input type='text' name='siteurl' maxlength='200' size='60' value='$data[values_name]'>
    </td>
  </tr>";
}
$oke=mysqli_query($koneksi, "select * from options where option_name='description'");
while($data=mysqli_fetch_array($oke)){
echo"<tr>
    <td  id='judul'><strong>Description</strong></td>
    <td>:
    &nbsp;<textarea cols='45' rows='15' name='description'>$data[values_name]</textarea>
      </td>
  </tr>";
}
?>
  <tr>
  <td colspan="2"><center><input type='submit' name='simpan' value='Simpan'>
    <input type='reset' name='reset' value='Reset'>
  </center></td>
  </tr>
</table>
</form>
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