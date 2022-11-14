<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Penambahan Kategori Buku</h1>

<form method="post" action="<?= site_url('kategori/insert') ?>">
  <?= csrf_field() ?>
  <div class="form-group">
    <label>Nama Kategori</label>    
    <input type="text" name="nama" value=""  class="form-control"/>
  </div>
  <div class="bg-light clearfix">
    <button type="submit" class="btn btn-primary float-right">Save</button>
  </div>

</form>

<?= $this->endSection('content'); ?>