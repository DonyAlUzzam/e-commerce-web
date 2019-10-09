<?php
session_start();
if(isset($_POST['simpan'])!="")
{
//menyimpan gambar keserver//

//simpan kedatabases//
include "koneksi.php";
$id=$_SESSION['id'];
$code=$_POST['code'];
$name_product=$_POST['name_product'];
$description=$_POST['description'];
$category=$_POST['category'];
$size=$_POST['size'];
$price=$_POST['price'];
$color=$_POST['color'];
$status=$_POST['status'];
$stock=$_POST['stock'];
$foto = $_FILES['picture'];
$namafoto = $foto['name'];
$tmpfoto = $foto['tmp_name'];
$data=mysqli_query ($koneksi, "UPDATE product SET code_product='$code', name_product='$name_product', category_product='$category', description_product='$description', price_product='$price',  	size_product='$size', color_product='$color', status_product='$status', stock_product='$stock',  	picture_product='$namafoto', author_product='$_SESSION[username]' where id_product='$id' ") or die (mysql_error());
$pindah = move_uploaded_file($tmpfoto, "Upload/".$namafoto);
}
else{
$data=mysqli_query ($koneksi, "UPDATE product SET code_product='$code', name_product='$name_product', category_product='$category', description_product='$description', price_product='$price',  	size_product='$size', color_product='$color', status_product='$status', stock_product='$stock', author_product='$_SESSION[username]' where id_product='$id' ") or die (mysql_error());
}
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>" ;
	include "index.php";
	}
else {
	echo "Anda gagal update";	

}
?>