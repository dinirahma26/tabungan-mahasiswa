<form class="" action="<?php echo site_url ('Fkt/save') ?>" method="post">
 <label>Id FKT</label><br>
 <input type="text" name="id_fkt" value=""><p></p>
 <label>Id Mahasiswa</label><br>
 <input type="text" name="id_mahasiswa" value=""><p></p>
 <label>Prodi</label><br>
 <input type="text" name="prodi" value=""><p></p>
 <label>Angkatan</label><br>
 <input type="text" name="angkatan" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Fkt') ?>"><button type="button" 
name="button">Batal</button></a>
</form>