 <?php
session_start();
if(isset($_POST['submit'])!="")

{
include "koneksi.php";
$name=$_POST['name'];
$telpon=$_POST['telpon'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
// $name = $_SESSION['username'];


echo $telpon;
// cek id pembeli
$id = mysqli_query($koneksi, "SELECT id_member from member WHERE username='$name'");
$rs = mysqli_fetch_array($id);
$tes = ($rs['id_member']);
$user_id = $tes;
// echo intval($tes);

//memeriksa apakah form kosong  
if(($name==null)or($telpon==null)or($email==null)or($address==null)){
	echo("<script> alert('Maaf, Isi data dengan lengkap')</script>");
	include("product.php");exit;} 
		else{$auth=true;}  
//proses pengiriman  
if($auth){   
$query = "INSERT INTO pemesanan SET name_pemesan='$name', address_pemesan='$address', city_pemesan='$city', email_pemesan='$email', phone_pemesan='$telpon', date_pemesan=now(), status_pemesan='pending'";
mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
// $data=mysqli_query($koneksi,"INSERT INTO pemesanan values(id_pemesan,'name_pemesan','address_pemesan','city_pemesan','email_pemesan',phone_pemesan,date_pemesan,'status_pemesan'),('','$name','$address','$city','$email','$telpon',now(),'pending')") or die (mysqli_error($koneksi));
echo("<script> alert('Pemesanan anda sedang di proses. Terima Kasih')</script>"); 
echo"<meta content='0; url=index.php' http-equiv='refresh'>";
exit;  }
else{  
echo("<script> alert('Maaf, pemesanan gagal silahkan coba lagi')</script>"); 
echo"<meta content='0; url=keranjang.php'>";
exit;} 
} 

?> 