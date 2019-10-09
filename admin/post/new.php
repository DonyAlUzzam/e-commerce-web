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
<title>New Post</title>
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
    <h3> Post Manager</h3>
    <img src="images/post.png" width="51" height="40" /> <a href="index.php"><img src="images/view.png" width="136" height="27" /></a> 
    <form action="new.php" method="post" name="newpost">
<table width="100%" border="0" id="table1">
  <tr>
    <th colspan="2" id="title">Add New Post</th>
  </tr>
  <tr>
    <td width="20%" id="judul"><strong>Post title</strong></td>
    <td>:
    <input type="text" name="title" maxlength="100" size="85" /></td>
  </tr>
  <tr>
    <td id="judul"><strong>Post content</strong></td>
    <td>:</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="content" cols="85%" rows="20"></textarea></td>
  </tr>
  <tr>
  <td id="judul"><strong>Post Type</strong></td>
  <td><label>
            <input type="radio" name="type" value="post" id="type_post_0">
            Post</label>
         &nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="type" value="page" id="type_post_1">
            Page</label>
  </td>
  </tr>
  <tr>
  <td id="judul"><strong>Post Status</strong></td>
  <td><label>
            <input type="radio" name="status" value="public" id="post_status_0">
            Public</label>
          &nbsp;
          <label>
            <input type="radio" name="status" value="draft" id="post_status_1">
            Draft</label>
  </td>
  </tr>
  <tr>
  <td colspan="2"><br /><center>
      <input type="submit" name="simpan" value="Simpan">
      <input type="reset" name="reset" value="Reset">
      </center></td>
  </tr>
</table>
</form>
    
    
  </div>
<br class="clearfloat" />
   <div id="footer">
   <center><p>&copy; Powered 2013 All right reserved</p></center>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>

<?php
if (isset($_POST['simpan']) !="" and $_POST['title']!="")
{
include "koneksi.php";
$title=$_POST['title'];
$content=$_POST['content'];
$type=$_POST['type'];
$status=$_POST['status'];
$data=mysqli_query ($koneksi, "INSERT INTO post VALUES (0,'$title','$type','$content',now(),'gng','$status') ");
	
if ($data){
	echo "<script> alert ('Your Post Succes'); </script>" ;
	}
else {
	echo "<script> alert ('Failed to Post'); </script>";	
}
}
?>
<?php } ?>