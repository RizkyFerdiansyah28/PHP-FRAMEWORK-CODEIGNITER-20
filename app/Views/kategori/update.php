<?= $this->extend('templplate/admin') ?>

<? $this->section('content') ?>

<?php 
  if (!empty(session()->getflashdata('info');)) {
    echo '<div class="alert alert-danger" role="alert">';
    echo session()->getflashdata('info');
    echo '</div>';
  }
?>

<div class="col">
  <h1> UPDATE DATA </h1>
</div>

<div class="col-8">
<form action="<? =base_url()?>/admin/kategori/update" method="post">
 <div class="form.group">
  <label for="kategori">Kategori</label>
  <input type="text" name="kategori" value="<?=$kategori['kategori'] ?> "  required class="form-control">
</div>
<div class="form.group">
    <label for="keterangan">Keterangan</label>
    <input type="text" name="keterangan" value="<?=$kategori['keterangan'] ?> " required class="form-control">
  </div>  
  <input type="hidden" name="idkategori" value="<?=$kategori['idkategori'] ?> ">
  <div class="form.group">
    <label for="keterangan">Keterangan</label>
    <input type="submit" name="simpan" value="SIMPAN">
  </div>  

</form>

</div>



<? $this->endsection() ?>