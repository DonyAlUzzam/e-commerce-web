<?php
session_start();
include "koneksi.php";
if(isset($_POST["simpan"])!=""){
	include "koneksi.php";
	$blogname=$_POST["blogname"];
	$siteurl=$_POST["siteurl"];
	$description=$_POST["description"];
	$data=mysqli_query ($koneksi, "UPDATE options SET values_name='$blogname' where option_name='blogname' ") or die (mysql_error());
	$data=mysqli_query ($koneksi, "UPDATE options SET values_name='$siteurl' where option_name='siteurl' ") or die (mysql_error());
	$data=mysqli_query ($koneksi, "UPDATE options SET values_name='$description' where option_name='description' ") or die (mysql_error());
if ($data){
	echo "<script> alert ('Edit Option berhasil'); </script>" ;
	include "index.php";
	}
else {
	echo "Edit Option gagal";	
}
}
?>