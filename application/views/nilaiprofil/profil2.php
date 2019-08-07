<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
        <header class="panel-heading">
            CENTROID AWAL
        </header>
        <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
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
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                    $a=0; foreach ($centroid1 as $key => $value) { $a++; ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
                            <td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('nilai_profil1/edit/'.$value->id_centroid1,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Centroid']); ?>

                            
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                    <?php 
                    
                    $a=0; foreach ($centroid2 as $key => $value) { $a++; ?>
                        <tr>
                            <td>2</td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
                            <td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('nilai_profil1/edit2/'.$value->id_centroid2,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Centroid']); ?>

                            
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                    <?php 
                    
                    $a=0; foreach ($centroid3 as $key => $value) { $a++; ?>
                        <tr>
                            <td>3</td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
                            <td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('nilai_profil1/edit3/'.$value->id_centroid3,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Centroid']); ?>

                            
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                    <?php 
                    
                    $a=0; foreach ($centroid4 as $key => $value) { $a++; ?>
                        <tr>
                            <td>4</td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
                            <td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('nilai_profil1/edit4/'.$value->id_centroid4,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Centroid']); ?>

                            
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>


                    <?php 
                    
                    $a=0; foreach ($centroid5 as $key => $value) { $a++; ?>
                        <tr>
                            <td>5</td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
                            <td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('nilai_profil1/edit5/'.$value->id_centroid5,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Centroid']); ?>

                            
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                        
                    
                    
                    </tbody>
                </table>
                </div>


			<?php error_reporting(0); ?> 
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            
            <?php echo anchor('Proses_lanjut',"Proses Lanjut",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Awal
            </header>
			<div id="body">
                <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-admin">
                    <tr align="center"><td rowspan="2">No Profil Mahasiswa</td><td rowspan="2">Nama</td>
              <td colspan="3">Centroid 1</td><td colspan="3">Centroid 2</td><td colspan="3">Centroid 3</td><td colspan="3">Centroid 4</td><td colspan="3">Centroid 5</td>
              </tr>
             <tr align="center">
               <!--<td>1</td><td>1</td><td>18</td><td>1</td><td>1</td><td>2</td><td>1</td><td>1</td><td>1</td>
              <td>3</td><td>2</td><td>18</td><td>1</td><td>2</td><td>2</td><td>1</td><td>2</td><td>1</td>
              <td>3</td><td>1</td><td>21</td><td>2</td><td>3</td><td>1</td><td>1</td><td>3</td><td>2</td>-->
              </tr>

				<?php 
              $c1a = "";
              $c1b = "";
              $c1c = "";
              $c1d = "";
              $c1e = "";
              $c1f = "";
              $c1g = "";
              $c1h = "";
              $c1i = "";

              $c2a = "";
              $c2b = "";
              $c2c = "";
              $c2d = "";
              $c2e = "";
              $c2f = "";
              $c2g = "";
              $c2h = "";
              $c2i = "";

              $c3a = "";
              $c3b = "";
              $c3c = "";
              $c3d = "";
              $c3e = "";
              $c3f = "";
              $c3g = "";
              $c3h = "";
              $c3i = "";
              
              $c4a = "";
              $c4b = "";
              $c4c = "";
              $c4d = "";
              $c4e = "";
              $c4f = "";
              $c4g = "";
              $c4h = "";
              $c4i = "";
              
              $c5a = "";
              $c5b = "";
              $c5c = "";
              $c5d = "";
              $c5e = "";
              $c5f = "";
              $c5g = "";
              $c5h = "";
              $c5i = "";


              foreach($centroid1 as $wer => $c)
              {
                $c1a = $c->jurusan;
                $c1b = $c->jenis;
                $c1c = $c->usia;
                $c1d = $c->penghasilan;
                $c1e = $c->sekolah;
                $c1f = $c->daerah;
                $c1g = $c->kelas;
                $c1h = $c->status;
                $c1i = $c->pekerjaan;

              }

              foreach($centroid2 as $wer => $c)
              {
                $c2a = $c->jurusan;
                $c2b = $c->jenis;
                $c2c = $c->usia;
                $c2d = $c->penghasilan;
                $c2e = $c->sekolah;
                $c2f = $c->daerah;
                $c2g = $c->kelas;
                $c2h = $c->status;
                $c2i = $c->pekerjaan;

              }

              foreach($centroid3 as $wer => $c)
              {
                $c3a = $c->jurusan;
                $c3b = $c->jenis;
                $c3c = $c->usia;
                $c3d = $c->penghasilan;
                $c3e = $c->sekolah;
                $c3f = $c->daerah;
                $c3g = $c->kelas;
                $c3h = $c->status;
                $c3i = $c->pekerjaan;

              }

              foreach($centroid4 as $wer => $c)
              {
                $c4a = $c->jurusan;
                $c4b = $c->jenis;
                $c4c = $c->usia;
                $c4d = $c->penghasilan;
                $c4e = $c->sekolah;
                $c4f = $c->daerah;
                $c4g = $c->kelas;
                $c4h = $c->status;
                $c4i = $c->pekerjaan;

              }

              foreach($centroid5 as $wer => $c)
              {
                $c5a = $c->jurusan;
                $c5b = $c->jenis;
                $c5c = $c->usia;
                $c5d = $c->penghasilan;
                $c5e = $c->sekolah;
                $c5f = $c->daerah;
                $c5g = $c->kelas;
                $c5h = $c->status;
                $c5i = $c->pekerjaan;

              }

              
              $c1a_b = "";
              $c1b_b = "";
              $c1c_b = "";
			  $c1d_b = "";
              $c1e_b = "";
              $c1f_b = "";
			  $c1g_b = "";
              $c1h_b = "";
              $c1i_b = "";
              
              $c2a_b = "";
              $c2b_b = "";
              $c2c_b = "";
			  $c2d_b = "";
              $c2e_b = "";
              $c2f_b = "";
			  $c2g_b = "";
              $c2h_b = "";
              $c2i_b = "";
              
              $c3a_b = "";
              $c3b_b = "";
              $c3c_b = "";
			  $c3d_b = "";
              $c3e_b = "";
              $c3f_b = "";
			  $c3g_b = "";
              $c3h_b = "";
              $c3i_b = "";

              $c4a_b = "";
              $c4b_b = "";
              $c4c_b = "";
              $c4d_b = "";
              $c4e_b = "";
              $c4f_b = "";
              $c4g_b = "";
              $c4h_b = "";
              $c4i_b = "";
              
              $c5a_b = "";
              $c5b_b = "";
              $c5c_b = "";
              $c5d_b = "";
              $c5e_b = "";
              $c5f_b = "";
              $c5g_b = "";
              $c5h_b = "";
              $c5i_b = "";

              $hc1=0;
              $hc2=0;
              $hc3=0;
              $hc4=0;
              $hc5=0;

              
              $no=0;
              $arr_c1 = array();
              $arr_c2 = array();
              $arr_c3 = array();
			  $arr_c4 = array();
			  $arr_c5 = array();
              
              $arr_c1_temp = array();
              $arr_c2_temp = array();
              $arr_c3_temp = array();
              $arr_c4_temp = array();
              $arr_c5_temp = array();
              $arr_c6_temp = array();
              $arr_c7_temp = array();
              $arr_c8_temp = array();
              $arr_c9_temp = array();
              
              $this->db->query('truncate table centroid_temp'); // truncate berfungsi untuk mengkosongkan data di suatu tabel
              $this->db->query('truncate table hasil_centroid');
              $this->db->query('truncate table perhitungan_centroid'); // result_array berfungsi untuk menghasilkan array murni
              foreach($nilai_profil->result_array() as $s){ ?> 
              <tr><td><?php echo $s['id_nilai_profil_mahasiswa']; ?></td><td><?php echo $s['nama']; ?></td>
              
              <td colspan="3"><?php 
                $hc1 = sqrt(pow(($s['jurusan']-$c1a),2)+pow(($s['jenis']-$c1b),2)+pow(($s['usia']-$c1c),2)+pow(($s['penghasilan']-$c1d),2)+pow(($s['sekolah']-$c1e),2)+pow(($s['daerah']-$c1f),2)+pow(($s['kelas']-$c1g),2)+pow(($s['status']-$c1h),2)+pow(($s['pekerjaan']-$c1i),2));
                echo $hc1; // sqrt berfungsi untuk menghitung akar kuadrat  
						   // pow berfungsi untuk pemangkatan matematika bawaan php contoh : pow (12,2) sama dengan 12 kuadrat
              ?></td>
              <td colspan="3"><?php 
                $hc2 = sqrt(pow(($s['jurusan']-$c2a),2)+pow(($s['jenis']-$c2b),2)+pow(($s['usia']-$c2c),2)+pow(($s['penghasilan']-$c2d),2)+pow(($s['sekolah']-$c2e),2)+pow(($s['daerah']-$c2f),2)+pow(($s['kelas']-$c2g),2)+pow(($s['status']-$c2h),2)+pow(($s['pekerjaan']-$c2i),2));
                echo $hc2;
              ?></td>
              <td colspan="3"><?php 
                $hc3 = sqrt(pow(($s['jurusan']-$c3a),2)+pow(($s['jenis']-$c3b),2)+pow(($s['usia']-$c3c),2)+pow(($s['penghasilan']-$c3d),2)+pow(($s['sekolah']-$c3e),2)+pow(($s['daerah']-$c3f),2)+pow(($s['kelas']-$c3g),2)+pow(($s['status']-$c3h),2)+pow(($s['pekerjaan']-$c3i),2));
                echo $hc3;
              ?></td>
              <td colspan="3"><?php 
                $hc4 = sqrt(pow(($s['jurusan']-$c4a),2)+pow(($s['jenis']-$c4b),2)+pow(($s['usia']-$c4c),2)+pow(($s['penghasilan']-$c4d),2)+pow(($s['sekolah']-$c4e),2)+pow(($s['daerah']-$c4f),2)+pow(($s['kelas']-$c4g),2)+pow(($s['status']-$c4h),2)+pow(($s['pekerjaan']-$c4i),2));
                echo $hc4;
              ?></td>
              <td colspan="3"><?php 
                $hc5 = sqrt(pow(($s['jurusan']-$c5a),2)+pow(($s['jenis']-$c5b),2)+pow(($s['usia']-$c5c),2)+pow(($s['penghasilan']-$c5d),2)+pow(($s['sekolah']-$c5e),2)+pow(($s['daerah']-$c5f),2)+pow(($s['kelas']-$c5g),2)+pow(($s['status']-$c5h),2)+pow(($s['pekerjaan']-$c5i),2));
                echo $hc5;
              ?></td>
              <?php 


     

             
              
             
              
              
              $arr_c1_temp[$no] = $s['jurusan_sekolah'];
              $arr_c2_temp[$no] = $s['jenis_kelamin'];
              $arr_c3_temp[$no] = $s['usia_masuk'];
			  $arr_c4_temp[$no] = $s['penghasilan_ortu'];
			  $arr_c5_temp[$no] = $s['sekolah'];
			  $arr_c6_temp[$no] = $s['kota_asal'];
			  $arr_c7_temp[$no] = $s['kelas'];
			  $arr_c8_temp[$no] = $s['gelombang'];
			  $arr_c9_temp[$no] = $s['pekerjaan_mahasiswa'];
              
             
             
			   ?> 
              
			 
              </tr> 
			   
			 
              <?php
              
             

              $q1 = "insert into perhitungan_centroid(no,nama,c1,c2,c3,c4,c5) values('".$s['id_nilai_profil_mahasiswa']."','".$s['nama']."','".$hc1."','".$hc2."','".$hc3."','".$hc4."','".$hc5."')";
              $this->db->query($q1);
              
              $no++;             
              
              
              
             
              
              
              
             } ?>
                </table>
                </div>
				</div>
            </section>
            </div><!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; PT. BARITO SARANA KARYA, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>