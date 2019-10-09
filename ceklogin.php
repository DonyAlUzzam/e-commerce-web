<?php
if(!isset($_SESSION)){
	session_start();
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
}
include "koneksi.php";
$username=$_POST['username'];
$password=sha1($_POST['password']);
$sql=mysqli_query($koneksi, "SELECT * FROM member WHERE username='$username'");
$num = mysqli_num_rows($sql);
$data=mysqli_fetch_array($sql);


if ($num==0) {
	print "<script>alert('Username Salah')</script>"; 
	header("location:index.php");
	}
else{
	if($data['password']==$password)
		{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		print "<script>alert('Login Berhasil')</script>"; 
		header("location:index.php?id=$data[id_member]");
		}
	else {
		print "<script>alert('Password Salah')</script>"; 
		include"index.php";
		}
	}

?>