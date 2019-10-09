<?php
session_start();
if($_POST['simpan']!="")
{
$title=$_POST['title'];
$content=$_POST['content'];
$type=$_POST['type'];
$status=$_POST['status'];
include "koneksi.php";
$data=mysqli_query ($koneksi,"UPDATE post SET title_post='$title', type_post='$type', content_post='$content', date_post=now(), author_post='$_SESSION[username]',  	status_post='$status' where id_post='$_SESSION[id]' ");
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>" ;
	include "index.php";
	}
else {
	echo "Anda gagal update";	
	include "index.php";
}
}
?>