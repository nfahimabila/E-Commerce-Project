<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM tipe_pakaian WHERE id=?"; //id diambil ketika dia klik view
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<br>

     <table class="table table-striped">
        <tbody>
            <tr><td>ID</td><td><?=$row['id']?></td></tr>
            <tr>  <td>Tipe</td><td><?=$row['tipe']?></td></tr>
        </tbody>
    </table>
     <p align="right"><a class="btn btn-dark m-3" href="jenis.php">Kembali</a></p> 
<?php require_once "layout/footer.php"; ?>