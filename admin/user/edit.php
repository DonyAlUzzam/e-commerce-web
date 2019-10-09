<?php
include "../check.php";
if (!check())
{
echo "<script>alert('Anda tidak berhak mengakses halaman ini')</script>";
echo"Silakan <a href='../login.php'>Login Kembali</a>";
}
else
{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Admin</title>
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
  <a href="../link/index.php">* Menu Link</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> User Manager</h3>
      <!-- end #mainContent -->
    <img src="images/user.png" width="51" height="40" /> <a href="index.php"><img src="images/view.png" width="136" height="27" /></a>

<?php
include "koneksi.php";
$_SESSION['id']=$_REQUEST['id'];
$id=$_SESSION['id'];
$oke=mysqli_query($koneksi, "select * from admin where id_admin=$id");
while($data=mysqli_fetch_array($oke)){
echo"
<form action='edit2.php' method='post' name='edituser'><table width='100%' border='0' id='table1'>
  <tr>
    <th colspan='2' id='title'>Add User</th>
  </tr>
  <tr>
    <td width='25%' id='judul'>Name</td>
    <td width='75%'>:
    <label>
        <input name='name' type='text' size='55' maxlength='100' value='$data[name_admin]'>
      </label>
    </td>
  </tr>
  <tr>
    <td id='judul'>Email</td>
    <td>:
      <label>
        <input name='email' type='text' size='55' maxlength='100' value='$data[email_admin]'>
      </label></td>
    </tr>
  <tr>
    <td id='judul'>Telpon</td>
    <td>:
      <label>
        <input name='phone' type='text' size='30' maxlength='12' value='$data[phone_admin]'>
        &nbsp; <em>max 12</em></em></label></td>
    </tr>
  <tr>
    <td id='judul'>Alamat</td>
    <td>:</td>
    </tr>
  <tr>
  	<td>&nbsp;</td>
    <td><label>
      <textarea name='address' cols='43' rows='5'>$data[address_admin]</textarea>
    </label></td>
    </tr>
    <tr>
  	<td id='judul'><span id='option'>Username for login</span></td>
    <td><label>
    <input name='username' type='text' size='23' maxlength='50' value='$data[username_admin]'>
    </label></td>
    </tr>
<tr>
    <td id='judul'><span id='option'>Old Password</span></td>
    <td><label>
    <input name='oldpassword' type='password' size='23' maxlength='50' >
    </label></td>
    </tr>
    <tr>
  	<td id='judul'><span id='option'>New Password</span></td>
    <td><label>
    <input name='newpassword' type='password' size='23' maxlength='50' >
    </label></td>
    </tr>
    <tr>
        <td colspan='2'><br /><center>
          <label>
            <input type='submit' name='simpan' value='Simpan'>
            <input type='reset' name='reset' value='Reset'>
          </label></center>
        </td>
      </tr>
</table>
</form>";
}
?>
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