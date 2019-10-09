<?php
session_start();
include "koneksi.php";
if(isset($_POST['simpan'])!="")
{
include "koneksi.php";
$id=$_SESSION['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$date=$_POST['date'];
$status=$_POST['status'];
$pesan=$_POST['pesan'];
$data=mysql_query ("UPDATE bukutamu SET name='$name',email='$email',website='$website',date='$date',status='$status',message='$pesan' where id_bukutamu='$id'") or die (mysql_error());
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>";
	include "index.php";
	}
else {
	echo "Anda gagal update";	
	include "index.php";
}
}
?>