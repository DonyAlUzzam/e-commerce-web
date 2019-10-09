<?php
include "../check.php";
if (!check())
{
echo "<script>alert('Anda tidak berhak mengakses halaman ini')</script>";
echo"Silakan <a href='../login.php'>Login Kembali</a>";
}
else
{?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Produk</title>
<link rel="stylesheet" href="../STYLE.CSS" />
<!-- TinyMCE -->
<script type="text/javascript" src="../TINYMCE/JSCRIPTS/TINY_MCE/tiny_mce_src.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		// Theme options
theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|",
theme_advanced_buttons2 :
"styleselect,formatselect,fontselect,fontsizeselect,forecolor,backcolor",
theme_advanced_buttons3 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",
		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
	
	function convLinkVC(strUrl, node, on_save) {
            strUrl=strUrl.replace("../","");
            return strUrl;
       } 
	
	function ajaxLoad() {
	var ed = tinyMCE.get('elm');

	// Do you ajax call here, window.setTimeout fakes ajax call
	ed.setProgressState(1); // Show progress
	window.setTimeout(function() {
		ed.setProgressState(0); // Hide progress
		ed.setContent('HTML content that got passed from server.');
	}, 3000);
}

function ajaxSave() {
	var ed = tinyMCE.get('elm');

	// Do you ajax call here, window.setTimeout fakes ajax call
	ed.setProgressState(1); // Show progress
	window.setTimeout(function() {
		ed.setProgressState(0); // Hide progress				
	}, 3000);
}

</script>
<!-- /TinyMCE -->
</head>
<body class="twoColElsLtHdr">

<div id="container">
  <div id="header">
    <h1>Panel Admin</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <div id="main_menu"><h3>Main Menu</h3></div>
  <div id="isi_menu_kiri">
  <a href="../user/index.php">* User Manager</a>
  <a href="index.php">* Menu Post</a>
  <a href="../product/index.php">* Menu Product</a>
  <a href="../category/index.php">* Menu Category</a>
  <a href="../order/index.php">* Menu Order</a>
  <a href="../link/index.php">* Menu Link</a>
  <a href="../option/index.php">* Menu Option</a>
  <a href="../bukutamu/index.php">* Menu Buku Tamu</a>
  <a href="../logout.php">* logout</a>
   </div>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h3> New Product</h3>
    <img src="images/product.png" width="51" height="40" /><a href="../category/new.php"><img src="images/category.png" width="153" height="27" /></a><a href="index.php"><img src="images/view.png" width="136" height="27" /></a>
    <form action="new.php" method="post" name="newproduct" enctype="multipart/form-data">
  <table width="100%" border="0" id="table1">
    <tr>
      <th colspan="2" id="title">Add New Product</th>
    </tr>
    <tr>
      <td id="judul">Code Product</td>
      <td>: 
        <input type="text" name="code" maxlength="10" size="85" /></td>
    </tr>
    <tr>
      <td width="140" id="judul">Product name</td>
        <td colspan="2">: 
          <input type="text" name="name_product" maxlength="100" size="85" /></td>
    </tr>
    <tr>
        <td id="judul">Description</td>
        <td>:</td></tr>
    <tr>
      <td colspan="2"><textarea name="description" cols="85" rows="5"></textarea></td>
    </tr>
    <tr>
    <td id="judul">Category</td>
        <td>: 
          <select name="category">
		<?php
		include"koneksi.php";
		$oke=mysqli_query($koneksi, "select * from category order by name_category asc");
		while($data=mysqli_fetch_array($oke)){
		echo"<option value='$data[name_category]'>-- $data[name_category] --";
		}
		?>
		</option></select>
		</td>
      </tr>
     <tr>
      <td id="judul">Size</td>
      <td>: 
        <input type="text" name="size" maxlength="10" size="25" /></td>
    </tr>
    <tr>
      <td id="judul">Price</td>
      <td>: 
        <input type="text" name="price" maxlength="10" size="25" /></td>
    </tr>
    <tr>
      <td id="judul">Warna</td>
      <td>: 
        <input type="text" name="color" maxlength="10" size="25" /></td>
    </tr>
    <tr>
      <td id="judul">Stock</td>
      <td>
            <label>
              :
              <input type="radio" name="stock" value="ada" id="stock_0" />
              Ada</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label>
              <input type="radio" name="stock" value="kosong" id="stock_1" />
              Kosong</label>
          </td>
    </tr>
    <tr>
      <td id="judul">Status</td>
      <td>
            <label>
              :
              <input type="radio" name="status" value="public" id="status_0" />
              Public</label>
            &nbsp;
            <label>
              <input type="radio" name="status" value="draft" id="status_1" />
              Draft</label>
          </td>
    </tr>
    <tr>
      <td id="judul">Picture</td>
      <td>:
        <input name="picture" type="file" size="25"/></td>
    </tr>
    <tr>
          <td colspan="2"><br /><center>
            <input type="submit" name="simpan" value="Simpan" />
            <input type="reset" name="reset" value="Reset" />
          </center></td>
        </tr>
  </table>
  </form> 
  </div>
<br class="clearfloat" />
   <div id="footer">
   <?php
  include"../footer.php";
  ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>

<?php
if (isset($_POST['simpan']) !="")
{
//simpan kedatabases//
include "koneksi.php";
$code=$_POST['code'];
$name=$_POST['name_product'];
$description=$_POST['description'];
$category=$_POST['category'];
$size=$_POST['size'];
$price=$_POST['price'];
$color=$_POST['color'];
$status=$_POST['status'];
$stock=$_POST['stock'];
$foto = $_FILES['picture']['name'];
$tmp = $_FILES['picture']['tmp_name'];
$fotobaru = date('dmYHis').$foto;	
$path = "upload/".$fotobaru;
$author = $_SESSION['username'];
// Proses upload
if(move_uploaded_file($tmp, $path)){
$query = "INSERT INTO product SET code_product='$code', name_product='$name', category_product='$category', description_product='$description', price_product='$price', size_product='$size', color_product='$color', status_product='$status', date_product=now(), stock_product='$stock', picture_product='$fotobaru',
author_product='$author'";
$data = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
// $data=mysqli_query ($koneksi, "INSERT INTO product VALUES ('','$code','$name','$category','$description','$price','$size','$color','$status',now(),'$stock','$fotobaru','$_SESSION[username]') ") or die(mysqli_error($koneksi));
if ($data){
	echo "<script> alert ('Data Telah Tersimpan'); </script>" ;
	}
else {
	echo "<script> alert ('Data gagal Tersimpan'); </script>";	
}
}
}
?>
<?php } ?>