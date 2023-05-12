<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
  //..(1) untuk keluar dari folder admin, ,,(2) dari folder 4,buat sampe ke folder praktik3
?>

<?php 
   $sql = "SELECT * FROM pesanan"; //query ngambil data dari databes, * = semua data
   $rs = $dbh->query($sql);
?>
    <div class="container">
    <h1 class="mt-4">Pesanan</h1>
      <a class="btn btn-success" href="form_pesanan.php" role="button">Create Pesanan</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pakaian</th>
                    <th>Quantity</th>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){ //untuk mengambil semua data untuk ditampilkan
                ?>
                    <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row['tanggal']?></td>
                        <td><?=$row['pakaian_id']?></td>
                        <td><?=$row['quantity']?></td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </div>
<?php require_once "layout/footer.php"; ?>