<form class="" action="<?php echo site_url('Fkt/update/'.$edit['id_fkt']) 
?>" method="post">
 <label>Id FKT</label><br>
 <input type="text" name="id_fkt" value="<?php echo 
$edit['id_fkt'] ?>"><p></p>
 <label>Id Mahasiswa</label><br>
 <input type="text" name="id_mahasiswa" value="<?php echo 
$edit['id_mahasiswa'] ?>"><p></p>
<label>Prodi</label><br>
 <input type="text" name="prodi" value="<?php echo 
$edit['prodi'] ?>"><p></p>
<label>Angkatan</label><br>
 <input type="text" name="angkatan" value="<?php echo 
$edit['angkatan'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('Fkt') ?>"><button type="button" 
name="button">Batal</button></a>
</form>