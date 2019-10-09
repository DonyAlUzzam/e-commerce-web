<?php
echo"<center><table width='100%' border='0' id='footer'> 
      <tr>
        <th width='25%'>Support</th>
        <th width='25%'>Informasi</th>
        <th width='25%'>Category</th>
        <th width='25%'>Join in facebook</th>
      </tr>
      <tr  id='like'>
        <td>	
    Buat Toko<br>
    Fitur Toko<br>
    Demo Toko Online<br>
    Paket & Harga<br>
    Toko Online Gratis<br>
    Cara Buat Toko<br>
    Manual & Support<br>
</td>
        <td>    
	Tentang Kami<br>
    Contact US<br>
    Semua Product<br>
    Panduan Belanja<br></td>
        <td>    
	"; ?>
	<?php
	include "koneksi.php";
	$oke=mysqli_query($koneksi, "select * from category where status_category='public'");
	$no=1;
	while($data=mysqli_fetch_array($oke) and $no <= 15){
	echo "<img src='images/icon-post.png'> &nbsp; <a href='category.php?cat=$data[category]'>$data[name_category]</a><br>";
	$no++;
	}	
	?>
	<?php 
	echo "<td>
<div class='fb-like' data-href='https://www.facebook.com/pages/KampoengWebId/301098046626242?ref=hl' data-width='180' data-colorscheme='dark' data-show-faces='true' data-send='false'></div></td>
      </tr>
    </table>
    <p>&copy; M.khairi Usman</p></center>";
?>