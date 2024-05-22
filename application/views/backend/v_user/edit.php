<form class="" action="<?php echo site_url('User/update/'.$edit['id_user']) 
?>" method="post">
 <label>Id User</label><br>
 <input type="text" name="id_user" value="<?php echo 
$edit['id_user'] ?>"><p></p>
 <label>Username</label><br>
 <input type="text" name="username" value="<?php echo 
$edit['username'] ?>"><p></p>
<label>Password</label><br>
 <input type="text" name="password" value="<?php echo 
$edit['password'] ?>"><p></p>
 <button type="submit" name="button">Perbaharui</button>
 <a href="<?php echo site_url('User') ?>"><button type="button" 
name="button">Batal</button></a>
</form>