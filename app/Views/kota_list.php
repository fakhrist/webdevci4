<a href="<?= site_url('provinsi/') ?>">[Editing Provinsi]</a>
<a href="<?= site_url('kota/insert') ?>">[Insert Kota]</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Provinsi</th>
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
          <td><?= $row['city']; ?></td>
          <td><?= $row['prov']; ?></td>
          <td><?= $row['wilayah']; ?></td>
          <td nowrap>
            <a href="<?= site_url('kota/'.$row['id']) ?>" >Update</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>

<br />
<a href="<?= site_url('kota_export_xls') ?>">Export Excel</a>
<a href="<?= site_url('kota_export_pdf') ?>">Export PDF</a>