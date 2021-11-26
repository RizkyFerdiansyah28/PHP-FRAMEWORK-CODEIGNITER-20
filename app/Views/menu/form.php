<?= $this->extend('templplate/admin') ?>

<? $this->section('content') ?>

<div class="row">

<?= view_cell('App\Controllers\Admin\Menu::option') ?>

</div>

<div class="row">

<h1> UPLOAD IMAGE </h1>

<form action="<? =base_url('/admin/menn/insert')?>" method="post" enctype="multipart/form-data">
 : <input type="file" name="gambar" required>
   <be>
   <input type="submit" name="simpan" value="SIMPAN">

</form>
</div>

<? $this->endsection() ?>