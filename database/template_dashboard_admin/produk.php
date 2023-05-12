<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pakaian"; //query ngambil data dari databes, * = semua data
   $rs = $dbh->query($sql);
?>
    <div class="container">
    <h1 class="mt-4">PRODUK</h1>
      <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                   <th>Id</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Stok</th
                    ><th>Harga</th>
                    <th>Tipe Pakaian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){ //untuk mengambil semua data untuk ditampilkan
                ?>
                    <tr>
                    <td><?=$nomor?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['ukuran']?></td>
                        <td><?=$row['warna']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['tipe_pakaian_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
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