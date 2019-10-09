<?php
if(!isset($_SESSION)){
    session_start();
}
include "koneksi.php";
session_destroy();
include "index.php";
?>