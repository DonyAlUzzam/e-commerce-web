<?php
include"../koneksi.php";
$id=$_GET['id'];
$status='Approve';
$data=mysqli_query ($koneksi, "UPDATE pemesanan SET status_pemesan='$status' where id_pemesan='$id' ");
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>" ;
	include "index.php";
	}
else {
	echo "Anda gagal update";	

}