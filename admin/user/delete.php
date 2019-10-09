<?php 
include ("koneksi.php");
$oke =mysqli_query($koneksi, "delete from admin where id_admin=$_REQUEST[id]");
if ($oke){ 
echo "<script> alert ('Data telah dihapus'); </script>";
include"index.php";
}
else{
echo"<script> alert ('Data Gagal dihapus'); </script>";
include"index.php";
}
?>