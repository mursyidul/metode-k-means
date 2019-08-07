<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('nilai_profil_lanjut',"PROSES ITERASI SELANJUTNYA",['class'=>'btn btn-sm btn-success']); ?>
          
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data CENTROID BARU
            </header>
                <div class="panel-body table-responsive">
                <table id="" class="table table-hover">
                    <thead>
                        <tr>
                        	<th>Centroid</th>
                            <th>jurusan</th>
                            <th>jenis</th>
                            <th>usia</th>
                            <th>penghasilan</th>
                            <th>sekolah</th>
                            <th>daerah</th>
                            <th>kelas</th>
                            <th>status</th>
                            <th>pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 

                   // $this->db->query('truncate table hasil_centroid');
                    $a=0; foreach ($centroid_baru as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->jurusan1; ?></td>
                            <td><?php echo $value->jenis1; ?></td>
                            <td><?php echo $value->usia1; ?></td>
                            <td><?php echo $value->penghasilan1; ?></td>
                            <td><?php echo $value->sekolah1; ?></td>
                            <td><?php echo $value->daerah1; ?></td>
                            <td><?php echo $value->kelas1; ?></td>
                            <td><?php echo $value->status1; ?></td>
                            <td><?php echo $value->pekerjaan1; ?></td>
                        </tr>
                        <tr>
                        	<td>2</td>
                            <td><?php echo $value->jurusan2; ?></td>
                            <td><?php echo $value->jenis2; ?></td>
                            <td><?php echo $value->usia2; ?></td>
                            <td><?php echo $value->penghasilan2; ?></td>
                            <td><?php echo $value->sekolah2; ?></td>
                            <td><?php echo $value->daerah2; ?></td>
                            <td><?php echo $value->kelas2; ?></td>
                            <td><?php echo $value->status2; ?></td>
                            <td><?php echo $value->pekerjaan2; ?></td>
                        </tr>
                        <tr>
                        	<td>3</td>
                            <td><?php echo $value->jurusan3; ?></td>
                            <td><?php echo $value->jenis3; ?></td>
                            <td><?php echo $value->usia3; ?></td>
                            <td><?php echo $value->penghasilan3; ?></td>
                            <td><?php echo $value->sekolah3; ?></td>
                            <td><?php echo $value->daerah3; ?></td>
                            <td><?php echo $value->kelas3; ?></td>
                            <td><?php echo $value->status3; ?></td>
                            <td><?php echo $value->pekerjaan3; ?></td>
                        </tr>
                        <tr>
                        	<td>4</td>
                            <td><?php echo $value->jurusan4; ?></td>
                            <td><?php echo $value->jenis4; ?></td>
                            <td><?php echo $value->usia4; ?></td>
                            <td><?php echo $value->penghasilan4; ?></td>
                            <td><?php echo $value->sekolah4; ?></td>
                            <td><?php echo $value->daerah4; ?></td>
                            <td><?php echo $value->kelas4; ?></td>
                            <td><?php echo $value->status4; ?></td>
                            <td><?php echo $value->pekerjaan4; ?></td>
                        </tr>
                        <tr>
                        	<td>5</td>
                            <td><?php echo $value->jurusan5; ?></td>
                            <td><?php echo $value->jenis5; ?></td>
                            <td><?php echo $value->usia5; ?></td>
                            <td><?php echo $value->penghasilan5; ?></td>
                            <td><?php echo $value->sekolah5; ?></td>
                            <td><?php echo $value->daerah5; ?></td>
                            <td><?php echo $value->kelas5; ?></td>
                            <td><?php echo $value->status5; ?></td>
                            <td><?php echo $value->pekerjaan5; ?></td>                            
                        </tr>
                    <?php 
                  
                                           
                    

                     
                        $q = "insert into hasil_centroid(c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i,c4a,c4b,c4c,c4d,c4e,c4f,c4g,c4h,c4i,c5a,c5b,c5c,c5d,c5e,c5f,c5g,c5h,c5i) values('".$value->jurusan1."','".$value->jenis1."','".$value->usia1."','".$value->penghasilan1."','".$value->sekolah1."','".$value->daerah1."','".$value->kelas1."','".$value->status1."','".$value->pekerjaan1."','".$value->jurusan2."','".$value->jenis2."','".$value->usia2."','".$value->penghasilan2."','".$value->sekolah2."','".$value->daerah2."','".$value->kelas2."','".$value->status2."','".$value->pekerjaan2."','".$value->jurusan3."','".$value->jenis3."','".$value->usia3."','".$value->penghasilan3."','".$value->sekolah3."','".$value->daerah3."','".$value->kelas3."','".$value->status3."','".$value->pekerjaan3."','".$value->jurusan4."','".$value->jenis4."','".$value->usia4."','".$value->penghasilan4."','".$value->sekolah4."','".$value->daerah4."','".$value->kelas4."','".$value->status4."','".$value->pekerjaan4."','".$value->jurusan5."','".$value->jenis5."','".$value->usia5."','".$value->penghasilan5."','".$value->sekolah5."','".$value->daerah5."','".$value->kelas5."','".$value->status5."','".$value->pekerjaan5."')";
                    $this->db->query($q);
                    } 
                    ?>



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