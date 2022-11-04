<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Kota</th>
        <th>Provinsi</th>
        <th>Wilayah</th>
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
      <?php endforeach ?>
    </tbody>
</table>