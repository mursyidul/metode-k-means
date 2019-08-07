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
            Data C2
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
							<th>Jurusan</th>
							<th>Jenis</th>
                            <th>Usia</th>
                            <th>Penghasilan</th>
                            <th>Sekolah</th>
                            <th>Daerah</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $this->db->query('truncate table c2');
                    $jurusan = '';
                    $jenis = '';
                    $usia = '';
                    $penghasilan = '';
                    $sekolah = '';
                    $daerah = '';
                    $kelas ='';
                    $status ='';
                    $pekerjaan ='';

                    $data_lama1 = $this->db->get('c2');  
                    $data_lama1 = $jurusan = $this->input->post('jurusan');
                    
                    $data_lama1 = $jenis = $this->input->post('jenis');
                   
                    $data_lama1 = $usia = $this->input->post('usia'); 
                  
                    $data_lama1 = $penghasilan = $this->input->post('penghasilan');
                  
                    $data_lama1 = $sekolah = $this->input->post('sekolah'); 
                  
                    $data_lama1 = $daerah = $this->input->post('daerah'); 
                    
                    $data_lama1 = $kelas = $this->input->post('kelas');
                    
                    $data_lama1 = $status  = $this->input->post('status'); 
                 
                    $data_lama1 = $pekerjaan  = $this->input->post('pekerjaan');
                               
                    $a=0; foreach ($centroid_c2 as $key => $value) { $a++; ?>
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
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            
                        </tr>
                    <?php 
                   
                    if ($jurusan and $value->jurusan && $jenis and $value->jenis && $usia and $value->usia && $penghasilan and $value->penghasilan && $sekolah and $value->sekolah && $daerah and $value->daerah && $kelas and $value->kelas && $status and $value->status && $pekerjaan and $value->pekerjaan) {
                        $this->load->view('new_centroid/centroid_baru');
                    } else {
                        $q = "insert into c2(jurusan,jenis,usia,penghasilan,sekolah,daerah,kelas,status,pekerjaan) values('".$value->jurusan."','".$value->jenis."','".$value->usia."','".$value->penghasilan."', '".$value->sekolah."','".$value->daerah."','".$value->kelas."','".$value->status."','".$value->pekerjaan."')";
                    $this->db->query($q);
                    }
                    
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