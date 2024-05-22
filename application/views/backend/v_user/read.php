                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <a href="<?php echo site_url('User/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
                                        <tr>
                                            <th>No</th>
                                            <th>Id User</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <tr>
                                    <?php
 $no=1;
 //$read yang diambil dari control function index
 foreach ($read->result_array() as $row) {
 ?>
 <tr>
 <td><?php echo $no ?></td>
 <td><?php echo $row['id_user'] ?></td>
 <td><?php echo $row['username'] ?></td>
 <td><?php echo $row['password'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('User/edit/'.$row['id_user'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('User/delete/'.$row['id_user'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['password'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>  