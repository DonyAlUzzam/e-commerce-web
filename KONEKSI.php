<?php
$koneksi=mysqli_connect('localhost','root','');
if (!$koneksi)
{print "koneksi tidak berhasil bost, di cobo meneh ae. smngat2 bost";
}
mysqli_select_db($koneksi, "distro");
?>