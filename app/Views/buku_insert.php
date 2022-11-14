<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Tambah Data Buku</h1>

<form method="post" action="<?= site_url('buku/insert') ?>">
  <?= csrf_field() ?>
  <div class="form-group">
    <label>Kategori</label>    
    <select name="kategori_id" class="form-control">
      <?php foreach($data_kategori as $kategori):?>
      <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
      <?php endforeach?>
    </select>
  </div>
  <div class="form-group">
    <label>Judul Buku</label>    
    <input type="text" name="judul" value=""  class="form-control"/>
  </div>
  <div class="form-group">
    <label>Stock Buku</label>    
    <input type="number" name="stock" value=""  class="form-control"/>
  </div>
  <div class="bg-light clearfix">
    <button type="submit" class="btn btn-primary float-right">Save</button>
  </div>

</form>


<?= $this->endSection('content'); ?>