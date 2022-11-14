<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Perubahan Data Buku</h1>

<form method="post" action="<?= site_url('buku/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table class="table table-striped">
    <tr>
      <td>Kategori</td>
      <td>
        <select name="kategori_id" class="form-control">
          <?php foreach($data_kategori as $kategori):?>
          <?php if($kategori['id'] == $data['kategori_id']):?>
            <option value="<?= $kategori['id'] ?>" selected><?= $kategori['nama'] ?></option>
          <?php else:?>
            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
          <?php endif?>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Judul</td>
      <td>
        <input type="text" name="judul" value="<?= $data['judul'] ?>"  class="form-control" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan=2>
        <div class="clearfix">
          <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i> Save</button>
          <a href="<?= site_url('buku/delete/'.$data['id']) ?>"  onclick="return confirm('Yakin bro?')" class="btn btn-outline-danger float-right">
            <i class="fas fa-trash"></i> Delete</a>
        </div>
      </td>
    </tr>
  </table>
</form>

<?= $this->endSection('content'); ?>