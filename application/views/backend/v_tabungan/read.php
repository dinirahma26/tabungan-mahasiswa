                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tabungan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <a href="<?php echo site_url('Tabungan/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Tabungan</th>
                                            <th>Id Mahasiswa</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Tanggal</th>
                                            <th>Setoran</th>
                                            <th>Penarikan</th>
                                            <th>Saldo</th>
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
 <td><?php echo $row['id_tabungan'] ?></td>
 <td><?php echo $row['id_mahasiswa'] ?></td>
 <td><?php echo $row['nama_mahasiswa'] ?></td>
 <td><?php echo $row['tanggal'] ?></td>
 <td><?php echo $row['setoran'] ?></td>
 <td><?php echo $row['penarikan'] ?></td>
 <td><?php echo $row['saldo'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Tabungan/edit/'.$row['id_tabungan'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Tabungan/delete/'.$row['id_mahasiswa'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['id_mahasiswa'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>  