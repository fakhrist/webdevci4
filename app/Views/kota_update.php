<form method="post" action="<?= site_url('kota/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama Provinsi</td>
      <td>
        <select name="nama_prov">
          <?php foreach($data_kategori as $daftar):?>
            <option value="<?= $daftar['id'] ?>" <?php if($daftar['id']==$data['provinsi_id']){echo "selected";} ?>>
                <?= $daftar['nama'] ?></option>
          <?php endforeach?>
        </select>                           
      </td>
    </tr>
    <tr>
      <td>Nama Kota</td>
      <td>
        <input type="text" name="nama_kota" value="<?= $data['city'] ?>" />                       
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <a href="<?= site_url('kota/delete/'.$data['id']) ?>" onclick="return confirm('Anda Yakin menghapus datanya?')">[ Delete ]</a>
        <button type="submit">Save</button>
        <a href="<?= site_url('kota/') ?>">
            <button>Cancel</button>
        </a> 
      </td>
    </tr>
  </table>
</form>