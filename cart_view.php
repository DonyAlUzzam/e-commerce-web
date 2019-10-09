<link rel="stylesheet" type="text/css" href="style.css" />

<center><h2>Keranjang Belanja anda</h2><br></center>
<table align=='center' width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Jumlah Harga</th>
        <th>Aksi</th>
    </tr>
    <?php
    $total = 0;
    include"KONEKSI.php";
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "select product.id_product, product.name_product, product.price_product from product where product.id_product = '$key'");
            $rs = mysqli_fetch_array($query);

            $jumlah_harga = $rs['price_product'] * $val;
            $total += $jumlah_harga;
            ?>
            <tr>
                <td><?php echo $rs['id_product']; ?></td>
                <td><?php echo $rs['name_product']; ?></td>
                <td><?php echo number_format($rs['price_product'],3); ?></td>
                <td><?php echo number_format($val); ?></td>
                <td valign='left'><?php echo number_format($jumlah_harga,3); ?></td>
                <td><a href="cart.php?act=plus&amp;product_id=<?php echo $key; ?>&amp;ref=index.php">+</a> | <a href="cart.php?act=min&amp;product_id=<?php echo $key; ?>&amp;ref=index.php">-</a> | <a href="cart.php?act=del&amp;product_id=<?php echo $key; ?>&amp;ref=index.php">Hapus</a></td>
            </tr>
            <?php
            mysqli_free_result($query);
        }
    }
    ?>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td ><?php echo number_format($total,3); ?></td>
        <td><a href="cart.php?act=clear&amp;ref=index.php">Clear</a></td>
    </tr>

    <tr>
        <td align='right' colspan="6">
            <hr/><br><br>
            <a  class='hijau' href="index.php">Lanjutkan Belanja</a>
        </td>
    </tr>
</table>
<center><form method="POST"><input type='submit' name='checkout' value='CHECKOUT' class='hijau'></form></center>
<?php
if(isset($_POST['checkout'])!=""){
echo"<form action='order.php' method='post' name='order'>
      <table width='100%' border='0' bgcolor='#D9FFB3'>
        <tr>
          <th colspan='3' id='view-product'>Form Pemesanan Barang</th>
        </tr>
        <tr>
          <td width='30%'>Nama</td>
          <td width='5%'>:</td>
          <td width='65%'><label>
            <input type='text' name='name' maxlength='100' size='40'>
            </label></td>
        </tr>
        <tr>
          <td>Telpon/HP</td>
          <td>:</td>
          <td><input type='text' name='telpon' maxlength='12' size='20'></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type='text' name='email' maxlength='100' size='40'></td>
        </tr>
		<tr>
          <td>Kota</td>
          <td>:</td>
          <td><input type='text' name='city' maxlength='30' size='20'></td>
        </tr>
        <tr>
          <td>Alamat lengkap</td>
          <td>:</td>
          <td><label>
            <textarea name='address' cols='35' rows='3'></textarea>
            </label></td>
        </tr>
        <tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input type='submit' name='submit' value='Kirim'>
            <input type='reset' name='reset' value='Reset'>
            </label></td>
        </tr><tr></tr><tr></tr></tr>
      </table>
</form>";

echo"
<table border='0'>
<tr><td>Note :</td><td>Silahkan hubungi penjual untuk melanjutkan transaksi anda.</td></tr>
<tr><td colspan='2'>Terima Kasih sudah Belanja di Toko Kami</td></tr>
<tr><td>Admin :</td><td>Citra Puspita Rinda & M. Khairi Usman</td></tr>
<tr><td>No HP :</td><td>081275741388<br>082183761349</td></tr>
</table>";
}
?>
