<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_pakaian= $_POST['pakaian_id'];
   $_quantity = $_POST['quantity'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; // ? 1
   $ar_data[]=$_pakaian; // ? 2
   $ar_data[]=$_quantity;// 3

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,pakaian_id,quantity) VALUES (?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE pesanan SET tanggal=?,pakaian_id=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);
     }
  
     header('location:pesanan.php');
?>