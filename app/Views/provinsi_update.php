<form method="post" action="<?= site_url('provinsi/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama Provinsi</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" />                            
      </td>
    </tr>
    <tr>
      <td>Wilayah</td>
      <td>
        <form>
            <input type="radio" id="WIB" name="zona_waktu" value="WIB" 
                  <?php if($data['wilayah']=="WIB"){echo "Checked";} ?> >
            <label for="WIB">WIB</label></br>
            <input type="radio" id="WITA" name="zona_waktu" value="WITA" 
                  <?php if($data['wilayah']=="WITA"){echo "Checked";} ?> >
            <label for="WITA">WITA</label></br>
            <input type="radio" id="WIT" name="zona_waktu" value="WIT"
                  <?php if($data['wilayah']=="WIT"){echo "Checked";} ?> >
            <label for="WIT">WIT</label></br>
        </form>                         
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <a href="<?= site_url('provinsi/delete/'.$data['id']) ?>" onclick="return confirm('Anda Yakin menghapus datanya?')">[ Delete ]</a>
        <button type="submit">Save</button>
        <a href="<?= site_url('provinsi/')?>"><button>Cancel</button></a> 
      </td>
    </tr>
  </table>
</form>