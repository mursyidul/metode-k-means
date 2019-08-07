<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
			<?php error_reporting(0); ?> 
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            
            <?php echo anchor('Centroid_akhir',"centroid",['class'=>'btn btn-sm btn-success']); ?>
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
              <td rowspan="2">C1</td><td rowspan="2">C2</td><td rowspan="2">C3</td><td rowspan="2">C4</td><td rowspan="2">C5</td>
              </tr>
             <tr align="center">
               <!--<td>1</td><td>1</td><td>18</td><td>1</td><td>1</td><td>2</td><td>1</td><td>1</td><td>1</td>
              <td>3</td><td>2</td><td>18</td><td>1</td><td>2</td><td>2</td><td>1</td><td>2</td><td>1</td>
              <td>3</td><td>1</td><td>21</td><td>2</td><td>3</td><td>1</td><td>1</td><td>3</td><td>2</td>-->
              </tr>
				<?php 
             

              $hc1="";
              $hc2="";
              $hc3="";
              $hc4="";
              $hc5="";

              
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
              
              foreach($nilai_profil->result_array() as $s){ ?> 
              <tr>
              <td><?php echo $s['no']; ?></td>
              <td><?php echo $s['nama']; ?></td>
              <?php $hc1 = $s['c1']; ?>
              <?php $hc2 = $s['c2']; ?>
              <?php $hc3 = $s['c3']; ?>
              <?php $hc4 = $s['c4']; ?>
              <?php $hc5 = $s['c5']; ?>

              
              <?php 
              
              if($hc1<=$hc2)
              {
                if($hc1<=$hc3)
                {
                  if($hc1<=$hc4)
                {
                    if($hc1<=$hc5)
                  {
                    $arr_c1[$no] = 1;
                  }
                    else
                  {
                    $arr_c1[$no] = '';
                  }
                 } 
                }
              }
             
              else
              {
                $arr_c1[$no] = '';
              }
 
 // spasi
              if($hc2<=$hc1)
              {
                if($hc2<=$hc3)
                {
                  if($hc2<=$hc4)
                {
                    if($hc2<=$hc5)
                  {
                    $arr_c2[$no] = 1;
                  }
                    else
                  {
                    $arr_c2[$no] = '';
                  }
                 
				      }
                }
              }
              else
              {
                $arr_c2[$no] = '';
              }
     //spasi  
              if($hc3<=$hc1)
              {
                if($hc3<=$hc2)
                {
                  if($hc3<=$hc4)
                {
                    if($hc3<=$hc5)
                  {
                    $arr_c3[$no] = 1;
                  }
                    else
                  {
                    $arr_c3[$no] = '';
                  }
                 } 
                }
              }
             
              else
              {
                $arr_c3[$no] = '';
              }

               //spasi  
              if($hc4<=$hc1)
              {
                if($hc4<=$hc2)
                {
                  if($hc4<=$hc3)
                {
                    if($hc4<=$hc5)
                  {
                    $arr_c4[$no] = 1;
                  }
                    else
                  {
                    $arr_c4[$no] = '';
                  }
                 } 
                }
              }
              
              else
              {
                $arr_c4[$no] = '';
              }
              
               //spasi  
              if($hc5<=$hc1)
              {
                if($hc5<=$hc2)
                {
                  if($hc5<=$hc3)
                {
                    if($hc5<=$hc4)
                  {
                    $arr_c5[$no] = 1;
                  }
                    else
                  {
                    $arr_c5[$no] = '';
                  }
                 } 
                }
              }
              
              else
              {
                $arr_c5[$no] = '';
              }
              
              
              $arr_c1_temp[$no] = $s['jurusan_sekolah'];
              $arr_c2_temp[$no] = $s['jenis_kelamin'];
              $arr_c3_temp[$no] = $s['usia_masuk'];
			  $arr_c4_temp[$no] = $s['penghasilan_ortu'];
			  $arr_c5_temp[$no] = $s['sekolah'];
			  $arr_c6_temp[$no] = $s['kota_asal'];
			  $arr_c7_temp[$no] = $s['kelas'];
			  $arr_c8_temp[$no] = $s['gelombang'];
			  $arr_c9_temp[$no] = $s['pekerjaan_mahasiswa'];
              
              $warna1="";
              $warna2="";
              $warna3="";
              $warna4="";
              $warna5="";
             
			   ?> 
              <?php if($arr_c1[$no]==1){$warna1='#FFFF00';} else{$warna1='#ccc';} ?><td bgcolor="<?php echo $warna1; ?>"><?php echo $arr_c1[$no] ;?></td>
              <?php if($arr_c2[$no]==1){$warna2='#FFFF00';} else{$warna2='#ccc';} ?><td bgcolor="<?php echo $warna2; ?>"><?php echo $arr_c2[$no] ;?></td>
              <?php if($arr_c3[$no]==1){$warna3='#FFFF00';} else{$warna3='#ccc';} ?><td bgcolor="<?php echo $warna3; ?>"><?php echo $arr_c3[$no] ;?></td>
              <?php if($arr_c4[$no]==1){$warna4='#FFFF00';} else{$warna4='#ccc';} ?><td bgcolor="<?php echo $warna4; ?>"><?php echo $arr_c4[$no] ;?></td>
              <?php if($arr_c5[$no]==1){$warna5='#FFFF00';} else{$warna5='#ccc';} ?><td bgcolor="<?php echo $warna5; ?>"><?php echo $arr_c5[$no] ;?></td>
			 
              </tr> 
			   
			         
              <?php
              
                $q = "insert into centroid_temp(iterasi,c1,c2,c3,c4,c5) values(1,'".$arr_c1[$no]."','".$arr_c2[$no]."','".$arr_c3[$no]."','".$arr_c4[$no]."','".$arr_c5[$no]."')";
              $this->db->query($q);
              
              
              
              
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