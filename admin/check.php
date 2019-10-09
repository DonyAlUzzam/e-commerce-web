<?php
if(!isset($_SESSION)){
    session_start();}
function check()
{
include "../koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username_admin='$_SESSION[username]'");
while($data = mysqli_fetch_array($sql)){
if($data['password_admin']==$_SESSION['password'])
{
return TRUE;
exit();
}
else
{
return FALSE;
exit();
}
}
}
?>

