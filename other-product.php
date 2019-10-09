<table width="100%" border="0">
<tr><td colspan="4"><div id="view-product">View Product</div></td></tr>
<tr>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from product");
$no=0;
while($data=mysqli_fetch_array($oke) and $no<=7){
echo "<td width='25%' id='bgproduct'><img src='admin/product/upload/$data[picture_product]' width='120' height='100'>
<br><b id='name-product'>$data[name_product]</b>
<br><b id='harga'>$data[price_product]</b>
<br><a href='product-detail.php?code=$data[code_product]'><img src='images/detail.png'></a></td>";
$no++;
if($no % 4==0){
echo"<tr>";
}
}
?>
</table>