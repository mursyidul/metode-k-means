<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
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
             
            foreach($centroid->result_array() as $c)
              {
                $c1a = $c['c1a'];
                $c1b = $c['c1b'];
                $c1c = $c['c1c'];
                $c1d = $c['c1d'];
                $c1e = $c['c1e'];
                $c1f = $c['c1f'];
                $c1g = $c['c1g'];
                $c1h = $c['c1h'];
                $c1i = $c['c1i'];
                
                $c2a = $c['c2a'];
                $c2b = $c['c2b'];
                $c2c = $c['c2c'];
                $c2d = $c['c2d'];
                $c2e = $c['c2e'];
                $c2f = $c['c2f'];
                $c2g = $c['c2g'];
                $c2h = $c['c2h'];
                $c2i = $c['c2i'];
                
                $c3a = $c['c3a'];
                $c3b = $c['c3b'];
                $c3c = $c['c3c'];
                $c3d = $c['c3d'];
                $c3e = $c['c3e'];
                $c3f = $c['c3f'];
                $c3g = $c['c3g'];
                $c3h = $c['c3h'];
                $c3i = $c['c3i'];

                $c4a = $c['c4a'];
                $c4b = $c['c4b'];
                $c4c = $c['c4c'];
                $c4d = $c['c4d'];
                $c4e = $c['c4e'];
                $c4f = $c['c4f'];
                $c4g = $c['c4g'];
                $c4h = $c['c4h'];
                $c4i = $c['c4i'];

                $c5a = $c['c5a'];
                $c5b = $c['c5b'];
                $c5c = $c['c5c'];
                $c5d = $c['c5d'];
                $c5e = $c['c5e'];
                $c5f = $c['c5f'];
                $c5g = $c['c5g'];
                $c5h = $c['c5h'];
                $c5i = $c['c5i'];

              }

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
              
              
              $this->db->query('truncate table perhitungan_centroid');// truncate berfungsi untuk mengkosongkan data di suatu tabel
              
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