<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pakaian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>
<br>

                            <table class="table table-striped">
                                    <tbody>
                                        <tr><td>ID</td><td><?=$row['id']?></td></tr>
                                        <tr>  <td>Nama</td><td><?=$row['nama']?></td></tr>
                                        <tr>   <td>Ukuran</td><td><?=$row['ukuran']?></td></tr>
                                        <tr>   <td>Warna</td><td><?=$row['warna']?></td></tr>
                                        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
                                        <tr>   <td>Harga</td><td><?=$row['harga']?></td></tr>
                                        <tr>   <td>Tipe Pakaian</td><td><?=$row['tipe_pakaian_id']?></td></tr>
                                    </tbody>
                            </table>
                            <p align="right"><a class="btn btn-dark m-3" href="produk.php">Kembali</a> </p>

<?php require_once "layout/footer.php"; ?>