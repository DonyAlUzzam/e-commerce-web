<?php
include "check.php";
if (!check())
{
echo "<script>alert('Anda tidak berhak mengakses halaman ini')</script>";
include"login.php";
}
else
{?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main Menu Admin</title>
<link rel="stylesheet" href="STYLE.CSS" />
</head>
<body class="twoColElsLtHdr">

<div id="container">
  <div id="header">
    <h1>Panel Admin</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <div id="main_menu"><h3>Main Menu</h3></div>
  <div id="isi_menu_kiri">
  <a href="user/index.php">* User Manager</a>
  <a href="post/index.php">* Menu Post</a>
  <a href="product/index.php">* Menu Product</a>
  <a href="category/index.php">* Menu Category</a>
  <a href="order/index.php">* Menu Order</a>
  <a href="option/index.php">* Menu Option</a>
  <a href="bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> Menu Utama</h3>
    <table width="200">
      <tr>
        <td align="center" valign="middle"><a href="bukutamu/index.php"><img src="bukutamu/images/bukutamu.png" width="75" height="72" /></a></td>
        <td align="center" valign="middle"><a href="category/index.php"><img src="category/images/category.png" width="78" height="72" /></a></td>
        <td align="center" valign="middle"><a href="option/index.php"><img src="option/images/options.png" width="73" height="75" /></a></td>
        <td align="center" valign="middle"><a href="order/index.php"><img src="order/images/order.png" width="74" height="74" /></a></td>
        <td align="center" valign="middle"><a href="post/index.php"><img src="post/images/post.png" width="76" height="63" /></a></td>
        <td align="center" valign="middle"><a href="product/index.php"><img src="product/images/product.png" width="70" height="69" /></a></td>
        <td align="center" valign="middle"><a href="user/index.php"><img src="user/images/user.png" width="70" height="58" /></a></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><a href="bukutamu/index.php">Buku Tamu</a></td>
        <td align="center" valign="middle"><a href="category/index.php">Category</a></td>
        <td align="center" valign="middle"><a href="option/index.php">Options</a></td>
        <td align="center" valign="middle"><a href="order/index.php">Order</a></td>
        <td align="center" valign="middle"><a href="post/index.php">Post</a></td>
        <td align="center" valign="middle"><a href="product/index.php">Product</a></td>
        <td align="center" valign="middle"><a href="user/index.php">User</a></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
<br class="clearfloat" />
   <div id="footer">
    <?php
    include"footer.php";
    ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
<?php } ?>