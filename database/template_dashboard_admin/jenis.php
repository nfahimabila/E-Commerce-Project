<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
 //..(1) untuk keluar dari folder admin, ,,(2) dari folder 4,buat sampe ke folder praktik3
?>


<?php 
   $sql = "SELECT * FROM tipe_pakaian"; //query ngambil data dari databes, * = semua data
   $rs = $dbh->query($sql);
?>
    <div class="container">
    <h1 class="mt-4">Jenis Produk</h1>
      <a class="btn btn-success" href="form_jenis.php" role="button">Create Jenis Produk</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>Id</th>
                    <th>Tipe</th>
                    <th>Action</th>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){ //untuk mengambil semua data untuk ditampilkan
                ?>
                    <tr>
                    <td><?=$nomor?></td>
                        <td><?=$row['tipe']?></td>
                        <td>
<a class="btn btn-primary" href="view_jenis.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_jenis.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="delete_jenis.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['tipe']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
        </div>
        <?php require_once "layout/footer.php"; ?>
