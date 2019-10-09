<center><?php
//menentukan hari
$a_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $a_hari[date("N")];

//menentukan tanggal
$tanggal = date ("j");

//menentukan bulan
$a_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $a_bulan[date("n")];

//menentukan tahun
$tahun = date("Y");

//dan untuk menampilkan nya dengan format contoh Jumat, 22 Februari 2013
echo $hari . ", " . $tanggal ." ". $bulan ." ". $tahun;

?></center>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan='2'>Page</th></tr>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from post where type_post='page'");
while($data=mysqli_fetch_array($oke)){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/icon-page.png'></td>
		<td><a href='page.php?id=$data[id_post]'><b>$data[title_post]</b></a></td></tr>";
}
?>
</table>

<table border="0" width="100%" id="sidebar">
<tr><th id="title">KERANJANG</th></tr>
<tr><td><a href='keranjang.php'>
Lihat Keranjang</a></td></tr>
</table>

</table>
</table>
<form method="post" action="ceklogin.php">
<table border="0" width="100%" id="sidebar">
<tr><th id="title">LOGIN</th></tr>
<tr><td>
Username</td></tr>
<tr><td><input type='text' name='username'></td></tr>
<tr><td>Password</td>
</tr>
<tr><td><input type='password' name='password'></td></tr>
<tr><td align='center'><input type='submit' value='LOGIN'></td></tr></table></form>

<table border="0" width="100%" id="sidebar">
<tr><th id="title">LOGOUT</th></tr>
<tr></tr><tr><td align='center'><a href='logout.php'><input type='submit' Value='LOGOUT' ></a></td></tr>
</table>