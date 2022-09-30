<a href="<?= site_url('provinsi/insert') ?>">Insert</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Wilayah</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          <td><?= $row['wilayah']; ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>