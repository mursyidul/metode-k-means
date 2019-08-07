<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('Mahasiswa/tambah',"<i class='fa fa-plus'></i> Tambah Mahasiswa Baru",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Mahasiswa
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
							<th>Usia Masuk</th>
							<th>Jenis Kelamin</th>
							<th>Jurusan Sekolah</th>
							<th>Kelas</th>
							<th>Daerah Asal</th>
							<th>Pekerjaan Mahasiswa</th>
							<th>Penghasilan Ortu</th>
							<th>Sekolah</th>
                            <th>Status</th>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $this->db->query('truncate table hasil_mahasiswa');
                    $a=0; foreach ($mahasiswa as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->usia_masuk; ?></td>
                            <td><?php echo $value->jenis_kelamin; ?></td>
                            <td><?php echo $value->jurusan_sekolah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->kota_asal; ?></td>
                            <td><?php echo $value->pekerjaan_mahasiswa; ?></td>
                            <td><?php echo $value->penghasilan_ortu; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                           <?php echo anchor('mahasiswa/edit/'.$value->id_mahasiswa,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Mahasiswa']); ?>

                            <?php echo anchor('mahasiswa/hapus/'.$value->id_mahasiswa,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus?')", 'data-toggle'=>'tooltip','title'=>'Hapus Mahasiswa', 'data-placement'=>'bottom']); ?>
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php 
                     $q = "insert into hasil_mahasiswa(nama,usia,jenis,jurusan,kelas,daerah,pekerjaan,penghasilan,sekolah,status) values('".$value->nama ."','".$value->usia_masuk ."','".$value->jenis_kelamin ."','".$value->jurusan_sekolah ."','".$value->kelas."',
                     '".$value->kota_asal."','".$value->pekerjaan_mahasiswa ."','".$value->penghasilan_ortu ."','".$value->sekolah ."','".$value->status ."')";
                    $this->db->query($q);
                    } ?>
                    </tbody>
                </table>
                </div>
            </section>
            </div><!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; UNIVERSITAS MUHAMMADIYAH GRESIK, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>