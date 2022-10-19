<form method="post" action="<?= site_url('kota/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama Provinsi</td>
      <td> : 
        <select name="provinsi">
          <?php foreach($data_prov as $daftar):?>
          <option value="<?= $daftar['id'] ?>"><?= $daftar['nama'] ?></option>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Nama Kota</td>
      <td> : 
        <input type="text" name="nama_kota" value="" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Simpan</button>
      </td>
    </tr>
  </table>
</form>