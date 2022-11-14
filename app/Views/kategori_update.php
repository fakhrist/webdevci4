<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Perubahan Kategori Buku</h1>

<form method="post" action="<?= site_url('kategori/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <div class="form-group">
    <label>Nama</label>    
    <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control"/>
  </div>
  <div class="bg-light clearfix">
    <button type="submit" class="btn btn-primary float-right">Save</button>
    <a href="<?= site_url('kategori/delete/'.$data['id']) ?>" onclick="return confirm('Yakin bro?')" class="btn btn-outline-danger float-right">
      <i class="fas fa-trash"></i> Delete</a>
  </div>

</form>

<?= $this->endSection('content'); ?>