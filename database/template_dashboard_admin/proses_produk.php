<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_ukuran = $_POST['ukuran'];
   $_warna = $_POST['warna'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_tipe_pakaian_id = $_POST['tipe_pakaian_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1
   $ar_data[]=$_ukuran; // ? 2
   $ar_data[]=$_warna;// 3
   $ar_data[]=$_stok;// 3
   $ar_data[]=$_harga;// 4
   $ar_data[]=$_tipe_pakaian_id;// 5

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pakaian (nama,ukuran,warna,stok,harga,tipe_pakaian_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE pakaian SET nama=?,ukuran=?,warna=?,stok=?,harga=?,tipe_pakaian_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:produk.php');
?>