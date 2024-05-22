<form class="" action="<?php echo site_url('Tabungan/update/'.$edit['id_tabungan']) 
?>" method="post">
 <label>Id Tabungan</label><br>
 <input type="text" name="id_tabungan" value="<?php echo 
$edit['id_tabungan'] ?>"><p></p>
 <label>Id Mahasiswa</label><br>
 <input type="text" name="id_mahasiswa" value="<?php echo 
$edit['id_mahasiswa'] ?>"><p></p>
<label>Nama Mahasiswa</label><br>
 <input type="text" name="nama_mahasiswa" value="<?php echo 
$edit['nama_mahasiswa'] ?>"><p></p>
<label>Tanggal</label><br>
 <input type="date" name="tanggal" value="<?php echo 
$edit['tanggal'] ?>"><p></p>
<label>Setoran</label><br>
 <input type="text" name="setoran" value="<?php echo 
$edit['setoran'] ?>"><p></p>
 <label>Penarikan</label><br>
 <input type="text" name="penarikan" value="<?php echo 
$edit['penarikan'] ?>"><p></p>
<label>Saldo</label><br>
 <input type="text" name="saldo" value="<?php echo 
$edit['saldo'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Tabungan') ?>"><button type="button" 
name="button">Batal</button></a>
</form>