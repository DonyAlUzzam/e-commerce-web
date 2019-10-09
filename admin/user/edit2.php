<?php
if(isset($_POST['simpan'])!="")
{
session_start();
include "koneksi.php";
$id=$_SESSION['id'];
$password=$_SESSION['password'];
$name=$_POST['name'];
$username=$_POST['username'];
$oldpassword=sha1($_POST['oldpassword']);
$newpassword=sha1($_POST['newpassword']);
$address=$_POST['address'];
$email=$_POST['email'];
$telpon=$_POST['phone'];
if ($oldpassword != $password){
	echo "<script> alert ('Anda Gagal Update'); </script>";	
	include "index.php";
}
else {
$data=mysqli_query ($koneksi, "UPDATE admin SET name_admin='$name', address_admin='$address', email_admin='$email', phone_admin='$telpon', username_admin='$username', password_admin='$newpassword'  where id_admin=$id ") or die (mysql_error());
echo "<script> alert ('Data Telah Tersimpan, Mohon Login Ulang'); </script>" ;
include "index.php";	
}
}
?>