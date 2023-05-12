<?php
require_once "layout/header.php";
require_once "layout/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){ //cek id kosong apa engga
        // edit
        $sql = "SELECT * FROM tipe_pakaian WHERE id=?"; //id yang diabil dari button
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>  
<div class="container m-4">       
<form method="POST" action="proses_jenis.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="id" name="id" type="text" class="form-control"
        value="<?=$row['id'];?>"> <!---ini buat edit/update,valuenya diisi,mau ditampilin di kolom mana -->
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tipe" class="col-4 col-form-label">Tipe</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tipe" name="tipe" type="text" class="form-control" 
        value="<?=$row['tipe']?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" 
      class="btn btn-primary" value="Update"/>
      <input type="hidden" name="idedit" value="<?=$_idedit;?>">
    </div>
  </div>
</form>
</div>  
<?php require_once "layout/footer.php"; ?>