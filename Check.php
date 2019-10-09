<?php
if(!isset($_SESSION)){
    session_start();}
function checkmember()
{
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM member WHERE username='$_SESSION[username]'");
while($data = mysqli_fetch_array($sql)){
if($data['password']==$_SESSION['password'])
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

