<a href="<?= site_url('kota/') ?>">[Editing Kota]</a>
<a href="<?= site_url('provinsi/insert') ?>">[Insert Provinsi]</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Wilayah</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          <td><?= $row['wilayah']; ?></td>
          <td>
            <a href="<?= site_url('provinsi/'.$row['id']) ?>" >Update</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>