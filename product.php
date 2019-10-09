<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<tr><td colspan="4"><div id="view-product">View Product</div></td></tr>
<tr>
<?php
include "koneksi.php";
$oke=mysql_query("select * from product");
$no=0;
while($data=mysql_fetch_array($oke)){
echo "<td width='25%' id='bgproduct'><img src='admin/product/upload/$data[picture_product]' width='120' height='100'>
<br><b>$data[name_product]</b>
<br><b>$data[price_product]</b>
<br><a href='product-detail.php?code=$data[code_product]'><img src='images/detail.png'></a></td>";
$no++;
if($no % 4==0){
echo"<tr>";
}
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