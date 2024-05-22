<form class="" action="<?php echo site_url('Mahasiswa/update/'.$edit['id_mahasiswa']) 
?>" method="post">
 <label>Id Mahasiswa</label><br>
 <input type="text" name="id_mahasiswa" value="<?php echo 
$edit['id_mahasiswa'] ?>"><p></p>
 <label>Nama Mahasiswa</label><br>
 <input type="text" name="nama_mahasiswa" value="<?php echo 
$edit['nama_mahasiswa'] ?>"><p></p>
<label>Prodi</label><br>
 <input type="text" name="prodi" value="<?php echo 
$edit['prodi'] ?>"><p></p>
<label>Jenis Kelamin</label><br>
 <input type="text" name="jenis_kelamin" value="<?php echo 
$edit['jenis_kelamin'] ?>"><p></p>
 <label>Alamat</label><br>
 <input type="text" name="alamat" value="<?php echo 
$edit['alamat'] ?>"><p></p>
 <label>Tanggal Lahir</label><br>
 <input type="date" name="tanggal_lahir" id="" value="<?php echo 
$edit['tanggal_lahir'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Mahasiswa') ?>"><button type="button" 
name="button">Batal</button></a>
</form>