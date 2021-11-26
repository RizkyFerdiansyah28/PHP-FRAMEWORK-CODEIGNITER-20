<?= $this->extend('templplate/admin') ?>

<? $this->section('content') ?>
<div class="col">
<?php 
  if (!empty(session()->getflashdata('info');)) {
    echo '<div class="alert alert-danger" role="alert">';
    echo session()->getflashdata('info');
    echo '</div>';
  }
?>
</div>
<div class="col">
  <h3> INSERT DATA </h3>
</div>

<div class="col-8">
<form action="<? =base_url('/admin/kategori/insert')?>" method="post">
 <div class="form.group">
  <label for="kategori">Kategori</label>
  <input type="text" name="kategori" required class="form-control">
</div>
<div class="form.group">
    <label for="keterangan">Keterangan</label>
    <input type="text" name="keterangan" required class="form-control">
  </div>  
  <div class="form.group">
    <label for="keterangan">Keterangan</label>
    <input type="submit" name="simpan" value="SIMPAN">
  </div>  

</form>

</div>

<? $this->endsection() ?>