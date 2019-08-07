<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Nilai Mahasiswa
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
							<th>Jurusan Sekolah </th>
							<th>Jenis Kelamin</th>
                            <th>Usia</th>
							<th>Penghasilan</th>
							<th>Sekolah</th>
							<th>Daerah</th>
                            <th>Kelas</th>
							<th>Status Test</th>
                            <th>Pekerjaan</th>   
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $this->db->query('truncate table nilai_profil_mahasiswa');
                    $a=0; foreach ($hasil_nilai_mahasiswa as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
							<td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status_tes; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                        </tr>
                    <?php 
                    $q = "insert into nilai_profil_mahasiswa(nama,jurusan,jenis,usia,penghasilan,sekolah,daerah,kelas,status,pekerjaan) values('".$value->nama."','".$value->jurusan."','".$value->jenis."','".$value->usia."','".$value->penghasilan."','".$value->sekolah."','".$value->daerah."','".$value->kelas."','".$value->status_tes."','".$value->pekerjaan."')";
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