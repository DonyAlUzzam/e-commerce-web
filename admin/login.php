<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Admin</title>
<link rel="stylesheet" type="text/css" href="STYLE.CSS">
</head>
<body id="admin"> 
<center>
<form action="checklogin.php" method="POST">
  <table width="251" id='login'>
    <tr>
      <td colspan="2">LOGIN ADMIN</td>
    </tr>
    <tr>
      <td width="86">Username</td>
      <td width="149">
        <input type="text" name="username" id="user" />
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
        <input type="password" name="password" id="user" />
      </td>
    </tr>
    <tr>
    <td colspan="2" align="center"><label>
        <input type="submit" name="button" id="button" value="Login" />
        <input type="reset" name="button2" id="button2" value="Reset" />
      </label></td>
    </tr>
  </table>
</form></center>
</body>
</html>