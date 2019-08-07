<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
			<?php error_reporting(0); ?> 
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('jenistrening/tambah',"<i class='fa fa-plus'></i> Proses Iterasi Selanjutnya",['class'=>'btn btn-sm btn-success']); ?>
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
              <td colspan="3">Centroid 1</td><td colspan="3">Centroid 2</td><td colspan="3">Centroid 3</td><td colspan="3">Centroid 4</td><td colspan="3">Centroid 5</td><td rowspan="2">C1</td><td rowspan="2">C2</td><td rowspan="2">C3</td><td rowspan="2">C4</td><td rowspan="2">C5</td>
              </tr>
             <tr align="center">
               <!--<td>1</td><td>1</td><td>18</td><td>1</td><td>1</td><td>2</td><td>1</td><td>1</td><td>1</td>
              <td>3</td><td>2</td><td>18</td><td>1</td><td>2</td><td>2</td><td>1</td><td>2</td><td>1</td>
              <td>3</td><td>1</td><td>21</td><td>2</td><td>3</td><td>1</td><td>1</td><td>3</td><td>2</td>-->
              </tr>
				<?php 
              $c1a = 1;
              $c1b = 1;
              $c1c = 18;
			  $c1d = 1;
              $c1e = 1;
              $c1f = 2;
			  $c1g = 1;
              $c1h = 1;
              $c1i = 1;

              $c2a = 2;
              $c2b = 2;
              $c2c = 19;
              $c2d = 1;
              $c2e = 2;
              $c2f = 1;
              $c2g = 2;
              $c2h = 1;
              $c2i = 1;

              $c3a = 3;
              $c3b = 1;
              $c3c = 20;
              $c3d = 1;
              $c3e = 3;
              $c3f = 1;
              $c3g = 2;
              $c3h = 1;
              $c3i = 2;
              
              $c4a = 3;
              $c4b = 2;
              $c4c = 18;
			  $c4d = 1;
              $c4e = 2;
              $c4f = 2;
			  $c4g = 1;
              $c4h = 2;
              $c4i = 1;
              
              $c5a = 3;
              $c5b = 1;
              $c5c = 21;
			  $c5d = 2;
              $c5e = 3;
              $c5f = 1;
			  $c5g = 1;
              $c5h = 3;
              $c5i = 2;
              
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
              $this->db->query('truncate table hasil_centroid'); // result_array berfungsi untuk menghasilkan array murni
              foreach($nilai_profil->result_array() as $s){ ?> 
              <tr><td><?php echo $s['id_nilai_profil']; ?></td><td><?php echo $s['nama']; ?></td>
              
              <td colspan="3"><?php 
                $hc1 = sqrt(pow(($s['jurusan_sekolah']-$c1a),2)+pow(($s['jenis_kelamin']-$c1b),2)+pow(($s['usia_masuk']-$c1c),2)+pow(($s['penghasilan_ortu']-$c1d),2)+pow(($s['sekolah']-$c1e),2)+pow(($s['kota_asal']-$c1f),2)+pow(($s['kelas']-$c1g),2)+pow(($s['gelombang']-$c1h),2)+pow(($s['pekerjaan_mahasiswa']-$c1i),2));
                echo $hc1; // sqrt berfungsi untuk menghitung akar kuadrat  
						   // pow berfungsi untuk pemangkatan matematika bawaan php contoh : pow (12,2) sama dengan 12 kuadrat
              ?></td>
              <td colspan="3"><?php 
                $hc2 = sqrt(pow(($s['jurusan_sekolah']-$c2a),2)+pow(($s['jenis_kelamin']-$c2b),2)+pow(($s['usia_masuk']-$c2c),2)+pow(($s['penghasilan_ortu']-$c2d),2)+pow(($s['sekolah']-$c2e),2)+pow(($s['kota_asal']-$c2f),2)+pow(($s['kelas']-$c2g),2)+pow(($s['gelombang']-$c2h),2)+pow(($s['pekerjaan_mahasiswa']-$c2i),2));
                echo $hc2;
              ?></td>
              <td colspan="3"><?php 
                $hc3 = sqrt(pow(($s['jurusan_sekolah']-$c3a),2)+pow(($s['jenis_kelamin']-$c3b),2)+pow(($s['usia_masuk']-$c3c),2)+pow(($s['penghasilan_ortu']-$c3d),2)+pow(($s['sekolah']-$c3e),2)+pow(($s['kota_asal']-$c3f),2)+pow(($s['kelas']-$c3g),2)+pow(($s['gelombang']-$c3h),2)+pow(($s['pekerjaan_mahasiswa']-$c3i),2));
                echo $hc3;
              ?></td>
              <td colspan="3"><?php 
                $hc4 = sqrt(pow(($s['jurusan_sekolah']-$c4a),2)+pow(($s['jenis_kelamin']-$c4b),2)+pow(($s['usia_masuk']-$c4c),2)+pow(($s['penghasilan_ortu']-$c4d),2)+pow(($s['sekolah']-$c4e),2)+pow(($s['kota_asal']-$c4f),2)+pow(($s['kelas']-$c4g),2)+pow(($s['gelombang']-$c4h),2)+pow(($s['pekerjaan_mahasiswa']-$c4i),2));
                echo $hc4;
              ?></td>
              <td colspan="3"><?php 
                $hc5 = sqrt(pow(($s['jurusan_sekolah']-$c5a),2)+pow(($s['jenis_kelamin']-$c5b),2)+pow(($s['usia_masuk']-$c5c),2)+pow(($s['penghasilan_ortu']-$c5d),2)+pow(($s['sekolah']-$c5e),2)+pow(($s['kota_asal']-$c5f),2)+pow(($s['kelas']-$c5g),2)+pow(($s['gelombang']-$c5h),2)+pow(($s['pekerjaan_mahasiswa']-$c5i),2));
                echo $hc5;
              ?></td>
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
                    $arr_c1[$no] = '0';
                  }
                 } 
                }
              }
              else
              {
                $arr_c1[$no] = '0';
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
                    $arr_c2[$no] = '0';
                  }
                 
				 }
                }
              }
              else
              {
                $arr_c2[$no] = '0';
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
                    $arr_c3[$no] = '0';
                  }
                 } 
                }
              }
              else
              {
                $arr_c3[$no] = '0';
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
                    $arr_c4[$no] = '0';
                  }
                 } 
                }
              }
              else
              {
                $arr_c4[$no] = '0';
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
                    $arr_c5[$no] = '0';
                  }
                 } 
                }
              }
              else
              {
                $arr_c5[$no] = '0';
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
              //centroid baru 1.a
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c1_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1a_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.b
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c2_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1b_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.c
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c3_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1c_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.d
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c4_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1d_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.e
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c5_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1e_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.f
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c6_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1f_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.g
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c7_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1g_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.h
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c8_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1h_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              
              //centroid baru 1.i
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++) // count untuk menghitung array
              {
                $arr[$i] = $arr_c9_temp[$i] *$arr_c1[$i];
                if($arr_c1[$i]==1)
                {
                  $jum++;
                }
              }
              $c1i_b = array_sum($arr)/$jum; // array_sum untuk menghitung seruluhnya
              

               //centroid baru 2.a
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c1_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2a_b = array_sum($arr)/$jum;

              //centroid baru 2.b
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c2_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2b_b = array_sum($arr)/$jum;

              //centroid baru 2.c
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c3_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2c_b = array_sum($arr)/$jum;

              //centroid baru 2.d
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c4_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2d_b = array_sum($arr)/$jum;

              //centroid baru 2.e
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c5_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2e_b = array_sum($arr)/$jum;

              //centroid baru 2.f
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c6_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2f_b = array_sum($arr)/$jum;

              //centroid baru 2.g
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c7_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2g_b = array_sum($arr)/$jum;

              //centroid baru 2.h
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c8_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2h_b = array_sum($arr)/$jum;

              //centroid baru 2.i
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c9_temp[$i]*$arr_c2[$i];
                if($arr_c2[$i]==1)
                {
                  $jum++;
                }
              }
              $c2i_b = array_sum($arr)/$jum;

              //centroid baru 3.a
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c1_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3a_b = array_sum($arr)/$jum;

              //centroid baru 3.b
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c2_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3b_b = array_sum($arr)/$jum;

              //centroid baru 3.c
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c3_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3c_b = array_sum($arr)/$jum;

              //centroid baru 3.d
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c4_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3d_b = array_sum($arr)/$jum;

              //centroid baru 3.e
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c5_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3e_b = array_sum($arr)/$jum;

              //centroid baru 3.f
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c6_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3f_b = array_sum($arr)/$jum;

              //centroid baru 3.g
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c7_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3g_b = array_sum($arr)/$jum;

              //centroid baru 3.h
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c8_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3h_b = array_sum($arr)/$jum;

              //centroid baru 3.i
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c9_temp[$i]*$arr_c3[$i];
                if($arr_c3[$i]==1)
                {
                  $jum++;
                }
              }
              $c3i_b = array_sum($arr)/$jum;

             
              //centroid baru 4.a
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c1_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4a_b = array_sum($arr)/$jum;

               //centroid baru 4.b
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c2_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4b_b = array_sum($arr)/$jum;

              //centroid baru 4.c
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c3_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4c_b = array_sum($arr)/$jum;

              //centroid baru 4.d
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c4_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4d_b = array_sum($arr)/$jum;

              //centroid baru 4.e
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c5_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4e_b = array_sum($arr)/$jum;

              //centroid baru 4.f
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c6_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4f_b = array_sum($arr)/$jum;

              //centroid baru 4.g
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c7_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4g_b = array_sum($arr)/$jum;

              //centroid baru 4.h
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c8_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4h_b = array_sum($arr)/$jum;

              //centroid baru 4.i
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c9_temp[$i]*$arr_c4[$i];
                if($arr_c4[$i]==1)
                {
                  $jum++;
                }
              }
              $c4i_b = array_sum($arr)/$jum;

              //centroid baru 5.a
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c1_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5a_b = array_sum($arr)/$jum;

              //centroid baru 5.b
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c2_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5b_b = array_sum($arr)/$jum;

              //centroid baru 5.c
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c3_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5c_b = array_sum($arr)/$jum;

              //centroid baru 5.d
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c4_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5d_b = array_sum($arr)/$jum;

              //centroid baru 5.e
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c5_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5e_b = array_sum($arr)/$jum;

              //centroid baru 5.f
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c6_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5f_b = array_sum($arr)/$jum;

              //centroid baru 5.g
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c7_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5g_b = array_sum($arr)/$jum;

              //centroid baru 5.h
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c8_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5h_b = array_sum($arr)/$jum;

              //centroid baru 5.i
              $jum = 0;
              $arr = array();
              for($i=0;$i<count($arr_c1);$i++)
              {
                $arr[$i] = $arr_c9_temp[$i]*$arr_c5[$i];
                if($arr_c5[$i]==1)
                {
                  $jum++;
                }
              }
              $c5i_b = array_sum($arr)/$jum;
            
              
              
              $q = "insert into hasil_centroid(c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i,c4a,c4b,c4c,c4d,c4e,c4f,c4g,c4h,c4i,c5a,c5b,c5c,c5d,c5e,c5f,c5g,c5h,c5i) values('".$c1a_b."','".$c1b_b."','".$c1c_b."','".$c1d_b."','".$c1e_b."','".$c1f_b."','".$c1g_b."','".$c1h_b."','".$c1i_b."','".$c2a_b."','".$c2b_b."','".$c2c_b."','".$c2d_b."','".$c2e_b."','".$c2f_b."','".$c2g_b."','".$c2h_b."','".$c2i_b."','".$c3a_b."','".
              $c3b_b."','".$c3c_b."','".$c3d_b."','".$c3e_b."','".$c3f_b."','".$c3g_b."','".$c3h_b."','".$c3i_b."','".$c4a_b."','".
              $c4b_b."','".$c4c_b."','".$c4d_b."','".$c4e_b."','".$c4f_b."','".$c4g_b."','".$c4h_b."','".$c4i_b."','".$c5a_b."','".
              $c5b_b."','".$c5c_b."','".$c5d_b."','".$c5e_b."','".$c5f_b."','".$c5g_b."','".$c5h_b."','".$c5i_b."')";
              $this->db->query($q);
              
              
              
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