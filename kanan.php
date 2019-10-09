<center><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'ar,de,en,es,fr,hi,it,ja,ms,nl,pt,tl,tr,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</center>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Category</th></tr>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from category where status_category='public'");
$no=1;
while($data=mysqli_fetch_array($oke) and $no <= 15){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/icon-post.png'></td>
		<td><a href='category.php?cat=$data[category]'><b>$data[name_category]</b></a></td></tr>";
$no++;
}
?>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Recent Post</th></tr>
<?php
include "koneksi.php";
$oke=mysqli_query($koneksi, "select * from post where type_post='post'");
$no=1;
while($data=mysqli_fetch_array($oke) and $no <= 15){
echo "<tr id='sidebar-name'><td width='10%'><img src='images/icon-post.png'></td>
		<td><a href='post.php?id=$data[id_post]'><b>$data[title_post]</b></a></td></tr>";
$no++;
}
?>
</table>
<table border="0" width="100%" id="sidebar">
<tr><th id="title" colspan="2">Customer Service</th></tr>
<tr>
<td><a href="#"> <img border="0" height="50" width="100" src="./images/f2.jpg"/></td><td valign="center">&nbsp; M.Khairi</a></td>
</tr>
<tr>
<td><a href="#"> <img border="0" height="50" width="100" src="./images/cittra.jpeg"/></td><td valign="center">&nbsp; Citra</a></td>
</tr>
<tr>
</table>
