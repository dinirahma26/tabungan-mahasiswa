<form class="" action="<?php echo site_url ('Mahasiswa/save') ?>" method="post">
 <label>Id Mahasiswa</label><br>
 <input type="text" name="id_mahasiswa" value=""><p></p>
 <label>Nama Mahasiswa</label><br>
 <input type="text" name="nama_mahasiswa" value=""><p></p>
 <label>Prodi</label><br>
 <input type="text" name="prodi" value=""><p></p>
 <label>Jenis Kelamin</label><br>
 <input type="text" name="jenis_kelamin" value=""><p></p>
 <label>Alamat</label><br>
 <input type="text" name="alamat" value=""><p></p>
 <label>Tanggal Lahir</label><br>
 <input type="date" name="tanggal_lahir" value=""><p></p>
 <button type="submit" name="button">Simpan</button>
 <a href="<?php echo site_url('Mahasiswa') ?>"><button type="button" 
name="button">Batal</button></a>
</form>