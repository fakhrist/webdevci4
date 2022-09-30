<form method="post" action="<?= site_url('provinsi/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama Provinsi</td>
      <td>
        <input type="text" name="nama" value="" />                            
      </td>
    </tr>
    <tr>
      <td>Wilayah</td>
      <td>
        <form>
            <input type="radio" id="WIB" name="zona_waktu" value="WIB">
            <label for="WIB">WIB</label></br>
            <input type="radio" id="WITA" name="zona_waktu" value="WITA">
            <label for="WITA">WITA</label></br>
            <input type="radio" id="WIT" name="zona_waktu" value="WIT">
            <label for="WIT">WIT</label></br>
        </form>                         
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>