                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <a href="<?php echo site_url('Mahasiswa/create') ?>"><button type="button" 
name="button" title="untuk menambah data">Tambah</button></a>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Mahasiswa</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Prodi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tanggal lahir</th>
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
 <td><?php echo $row['id_mahasiswa'] ?></td>
 <td><?php echo $row['nama_mahasiswa'] ?></td>
 <td><?php echo $row['prodi'] ?></td>
 <td><?php echo $row['jenis_kelamin'] ?></td>
 <td><?php echo $row['alamat'] ?></td>
 <td><?php echo $row['tanggal_lahir'] ?></td>
 <td>
 <!--memanggil halaman edit atau edit.php-->
 <a href="<?php echo site_url('Mahasiswa/edit/'.$row['id_mahasiswa'])?>" 
title="tombol utk merubah data">Ubah</a> |
 <!--memanggil aksi delete-->
 <a href="<?php echo site_url('Mahasiswa/delete/'.$row['nama_mahasiswa'])?>" 
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
$row['nama_mahasiswa'];?>')">Hapus</a>
 </td>
 </tr>
 <?php
 $no++;
 }
 ?>  