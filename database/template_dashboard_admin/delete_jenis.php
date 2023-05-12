<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
$_iddel=$_GET['iddel'];
$sql="DELETE FROM tipe_pakaian WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:jenis.php');
?>