<form class="" action="<?php echo site_url ('Tabungan/save') ?>" method="post">
 <label>Id Tabungan</label><br>
 <input type="text" name="id_tabungan" value=""><p></p>
 <label>Id Mahasiswa</label><br>
 <input type="text" name="id_mahasiswa" value=""><p></p>
 <label>Nama Mahasiswa</label><br>
 <input type="text" name="nama_mahasiswa" value=""><p></p>
 <label>Tanggal</label><br>
 <input type="date" name="tanggal" value=""><p></p>
 <label>Setoran</label><br>
 <input type="text" name="setoran" value=""><p></p>
 <label>Penarikan</label><br>
 <input type="text" name="penarikan" value=""><p></p>
 <label>Saldo</label><br>
 <input type="text" name="saldo" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Tabungan') ?>"><button type="button" 
name="button">Batal</button></a>
</form>