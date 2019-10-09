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
<title>Edit Detail</title>
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
  <a href="../link/index.php">* Menu Link</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> Menu Utama</h3>
	<img src="images/bukutamu.png" width="51" height="40" /><a href="index.php"><img src="images/view.png"></a>
    <?php
include "koneksi.php";
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$oke=mysql_query("select * from bukutamu where id_bukutamu='$id'");
while($data=mysql_fetch_array($oke)){
echo"
<form action='edit2.php' method='post'>
<table width='100%'>
  <tr>
    <th colspan='3' id='title'>Detail Buku Tamu</th>
  </tr>
  <tr>
    <td width='17%' id='judul'>Nama</td>
    <td width='2%'>:</td>
    <td width='81%'><label>
      <input type='text' name='name' size='60%' value='$data[name]'/>
    </label></td>
  </tr>
  <tr>
    <td id='judul'>Email</td>
    <td>:</td>
    <td><label>
      <input type='text' name='email' size='60%' value='$data[email]'/>
    </label></td>
  </tr>
  <tr>
    <td id='judul'>Website</td>
    <td>:</td>
    <td><label>
      <input type='text' name='website' size='60%' value='$data[website]'/>
    </label></td>
  </tr>
  <tr>
    <td id='judul'>Tanggal</td>
    <td>:</td>
    <td><label>
      <input type='text' name='date' size='60%' value='$data[date]'/>
    </label></td>
  </tr>
  <tr>
    <td id='judul'>Status</td>
    <td>:</td>
    <td><p>
      <label>
        <input type='radio' name='status' value='wait'/>
        wait</label>
      <br />
      <label>
        <input type='radio' name='status' value='approve'/>
        approve</label>
      <br />
    </p></td>
  </tr>
  <tr>
    <td id='judul'>Pesan</td>
    <td>:</td>
    <td><label>
      <textarea name='pesan' cols='45' rows='5'> $data[message]</textarea>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
      <input type='submit' name='simpan' value='Simpan' />
      <input type='reset' name='reset' value='Reset' />
    </label></td>
  </tr>

</table>
</form>";
}
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