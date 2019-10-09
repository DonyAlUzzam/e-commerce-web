<?php
if(!isset($_SESSION)){
    session_start();
}
include "../koneksi.php";
$username=$_POST['username'];
$password=sha1($_POST['password']);
$sql=mysqli_query($koneksi, "SELECT * FROM admin WHERE username_admin='$username'");
$num = mysqli_num_rows($sql);
$data=mysqli_fetch_array($sql);
if ($num==0) {
	print "<script>alert('Username Salah')</script>"; 
	include"login.php";
	}
else{
	if($data['password_admin']==$password)
		{
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		print "<script>alert('Login Berhasil')</script>"; 
		include"index.php";
		}
	else {
		print "<script>alert('Password Salah')</script>"; 
		include"login.php";
		}
	}

?>