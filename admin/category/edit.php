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
<title>Edit Category</title>
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
  <a href="index.php">* Menu Category</a>
  <a href="../order/index.php">* Menu Order</a>
  <a href="../link/index.php">* Menu Link</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3>Category Manager</h3>
	<img src="images/category.png" width="51" height="40" /> <a href="index.php"><img src="images/view.png" width="153" height="27" /></a>
<form action="edit2.php" method="post" name="editcategory">
<table width="70%" border="0" id="table1">
<?php
include "koneksi.php";
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$oke=mysqli_query($koneksi, "select * from category where id_category=$id");
while($data=mysqli_fetch_array($oke)){
echo"
  <tr>
    <th colspan='3' id='title' >Edit Category</th>
  </tr>
  <tr>
    <td width='30%' id='judul'>Category name</td>
    <td width='70%'>: 
      <input type='text' name='category' maxlength='50' size='60' value='$data[name_category]'>
    </td>
  </tr>
  <tr>
    <td width='85' id='judul'><strong>Status</strong></td>
    <td width='247'>:  <label>
          <input type='radio' name='status' value='public'>
          Public</label>
      <label>
        <input type='radio' name='status' value='draft'>
        Draft</label>
        <br />
      </td>
  </tr>
      <tr>
      <td colspan='2'>
      <center><br>
      <input type='submit' name='simpan' value='Simpan'>
      <input type='submit' name='reset' value='Reset'>
      </center>
      </td>
      </tr>";
	  }
?>
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
<?php
if (isset($_POST['simpan'])!="")
{
include "koneksi.php";
$name=$_POST['name'];
$status=$_POST['status'];
$data=mysql_query ("INSERT into category VALUES (0,'$name','$status')") or die (mysql_error());
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>" ;
	}
else {
	echo "Anda gagal update";	
}
}
?>
<?php } ?>