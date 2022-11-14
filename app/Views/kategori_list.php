<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Daftar Kategori Buku</h1>

<a href="<?= site_url('kategori/insert') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />
<table class="table table-striped" id="dataTable">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          <td nowrap>
            <a href="<?= site_url('kategori/'.$row['id']) ?>" class="btn btn-info"><i class="fas fa-edit"></i> Update</a>
            <a href="<?= site_url('kategori/delete/'.$row['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin bro?')"><i class="fas fa-trash"></i> Delete</a>
          </td>          
        </tr>
      <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection('content'); ?>