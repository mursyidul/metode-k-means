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
            <button ><a class="fa fa-print" onclick="window.print()"> Print </a></button>
            <tr>
            <td colspan="3" align="center"> Purity =

			<?php 
                $a=0; foreach ($purty_measuer as $key => $value) { $a++; ?>
                <?php $c1a = $value->c1a; ?>
				<?php $c1b = $value->c1b; ?>
				<?php $c1c = $value->c1c; ?> 
				<?php $c1d = $value->c1d; ?>
				<?php $c1e = $value->c1e; ?> 
				<?php $c1f = $value->c1f; ?> 
				<?php $c1g = $value->c1g; ?>
				<?php $c1h = $value->c1h; ?>
				<?php $c1i = $value->c1i; ?>
				<?php $c2a = $value->c2a; ?>
				<?php $c2b = $value->c2b; ?>
				<?php $c2c = $value->c2c; ?>
				<?php $c2d = $value->c2d; ?>
				<?php $c2e = $value->c2e; ?>
				<?php $c2f = $value->c2f; ?>
				<?php $c2g = $value->c2g; ?>
				<?php $c2h = $value->c2h; ?>
				<?php $c2i = $value->c2i; ?>
				<?php $c3a = $value->c3a; ?>
				<?php $c3b = $value->c3b; ?>
				<?php $c3c = $value->c3c; ?>
				<?php $c3d = $value->c3d; ?>
				<?php $c3e = $value->c3e; ?>
				<?php $c3f = $value->c3f; ?>
				<?php $c3g = $value->c3g; ?>
				<?php $c3h = $value->c3h; ?>
				<?php $c3i = $value->c3i; ?>
				<?php $c4a = $value->c4a; ?>
				<?php $c4b = $value->c4b; ?>
				<?php $c4c = $value->c4c; ?>
				<?php $c4d = $value->c4d; ?>
				<?php $c4e = $value->c4e; ?>
				<?php $c4f = $value->c4f; ?>
				<?php $c4g = $value->c4g; ?>
				<?php $c4h = $value->c4h; ?>
				<?php $c4i = $value->c4i; ?>
				<?php $c5a = $value->c5a; ?>
				<?php $c5b = $value->c5b; ?>
				<?php $c5c = $value->c5c; ?>
				<?php $c5d = $value->c5d; ?>
				<?php $c5e = $value->c5e; ?>
				<?php $c5f = $value->c5f; ?>
				<?php $c5g = $value->c5g; ?>
				<?php $c5h = $value->c5h; ?>
				<?php $c5i = $value->c5i; ?>
                <?php 
                } ?>

                <?php echo $nilai_besar = ( $c1c + $c2c + $c3c + $c4c + $c5c )/ ($c1a + $c2a + $c3a + $c4a + $c5a + $c1b + $c2b + $c3b + $c4b + $c5b + $c1c + $c2c + $c3c + $c4c + $c5c + $c1d + $c2d + $c3d + $c4d + $c5d + $c1e + $c2e + $c3e + $c4e + $c5e + $c1f + $c2f + $c3f + $c4f + $c5f + $c1g + $c2g + $c3g + $c4g + $c5g + $c1h + $c2h + $c3h + $c4h + $c5h + $c1i + $c2i + $c3i + $c4i + $c5i); ?>


			</td>
                
            </tr>
            <div class="panel-body table-responsive" align="center">
            
            <table border="1" width="900" cellpadding="6">
            <header class="panel-heading">
            Cluster Satu
            </header>
            <tr>
                <td colspan="3" align="center">Hasil Cluster Satu </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center">Cluster Satu Terdiri Dari 
                <?php 
                $a=0; foreach ($c1 as $key => $value) { $a++; ?>
                    <?php echo $value->jumlah; ?> 
                <?php 
                } ?>
                 Profil Mahasiswa Yang Berasal Dari : </td>
                
            </tr>
            
            <tr>
                <td align="center">Jurusan Sekolah <br> 
                <?php 
                $a=0; foreach ($jurusan1 as $key => $value) { $a++; ?>
                    <?php echo $value->jurusan_sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?></td>
                <td align="center"> Jenis Kelamin  <br> 
                <?php 
                $a=0; foreach ($jenis1 as $key => $value) { $a++; ?>
                    <?php echo $value->jenis_kelamin; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Usia <br> 
                <?php 
                $a=0; foreach ($usia1 as $key => $value) { $a++; ?>
                    <?php echo $value->usia; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                            
            </tr>
                    
            <tr>
                <td align="center">Penghasilan Orang Tua <br> 
                <?php 
                $a=0; foreach ($penghasilan1 as $key => $value) { $a++; ?>
                    <?php echo $value->penghasilan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Sekolah <br> 
                <?php 
                $a=0; foreach ($sekolah1 as $key => $value) { $a++; ?>
                    <?php echo $value->sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Daerah Asal <br> 
                <?php 
                $a=0; foreach ($daerah1 as $key => $value) { $a++; ?>
                    <?php echo $value->daerah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
           <tr>
                <td align="center">Kelas <br> 
                <?php 
                $a=0; foreach ($kelas1 as $key => $value) { $a++; ?>
                    <?php echo $value->kelas; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Status Test <br> 
                <?php 
                $a=0; foreach ($status1 as $key => $value) { $a++; ?>
                    <?php echo $value->status; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Pekerjaan Mahasiswa <br> 
                <?php 
                $a=0; foreach ($pekerjaan1 as $key => $value) { $a++; ?>
                    <?php echo $value->pekerjaan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
          
           </table>

			<!-- cluster dua-->
			<br>
			<table border="1" width="900" cellpadding="6">
            <header class="panel-heading">
            Cluster Dua
            </header>
            <tr>
                <td colspan="3" align="center">Hasil Cluster Dua </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center">Cluster Dua Terdiri Dari 
                <?php 
                $a=0; foreach ($c2 as $key => $value) { $a++; ?>
                    <?php echo $value->jumlah; ?> 
                <?php 
                } ?>
                 Profil Mahasiswa Yang Berasal Dari : </td>
                
            </tr>
            
            <tr>
                <td align="center">Jurusan Sekolah <br> 
                <?php 
                $a=0; foreach ($jurusan2 as $key => $value) { $a++; ?>
                    <?php echo $value->jurusan_sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?></td>
                <td align="center"> Jenis Kelamin  <br> 
                <?php 
                $a=0; foreach ($jenis2 as $key => $value) { $a++; ?>
                    <?php echo $value->jenis_kelamin; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Usia <br> 
                <?php 
                $a=0; foreach ($usia2 as $key => $value) { $a++; ?>
                    <?php echo $value->usia; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                            
            </tr>
                    
            <tr>
                <td align="center">Penghasilan Orang Tua <br> 
                <?php 
                $a=0; foreach ($penghasilan2 as $key => $value) { $a++; ?>
                    <?php echo $value->penghasilan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Sekolah <br> 
                <?php 
                $a=0; foreach ($sekolah2 as $key => $value) { $a++; ?>
                    <?php echo $value->sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Daerah Asal <br> 
                <?php 
                $a=0; foreach ($daerah2 as $key => $value) { $a++; ?>
                    <?php echo $value->daerah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
           <tr>
                <td align="center">Kelas <br> 
                <?php 
                $a=0; foreach ($kelas2 as $key => $value) { $a++; ?>
                    <?php echo $value->kelas; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Status Test <br> 
                <?php 
                $a=0; foreach ($status2 as $key => $value) { $a++; ?>
                    <?php echo $value->status; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Pekerjaan Mahasiswa <br> 
                <?php 
                $a=0; foreach ($pekerjaan2 as $key => $value) { $a++; ?>
                    <?php echo $value->pekerjaan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
          
           </table>

			<!-- cluster Tiga-->
			<br>
			<table border="1" width="900" cellpadding="6">
            <header class="panel-heading">
            Cluster Tiga
            </header>
            <tr>
                <td colspan="3" align="center">Hasil Cluster Tiga </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center">Cluster Tiga Terdiri Dari 
                <?php 
                $a=0; foreach ($c3 as $key => $value) { $a++; ?>
                    <?php echo $value->jumlah; ?> 
                <?php 
                } ?>
                 Profil Mahasiswa Yang Berasal Dari : </td>
                
            </tr>
            
            <tr>
                <td align="center">Jurusan Sekolah <br> 
                <?php 
                $a=0; foreach ($jurusan3 as $key => $value) { $a++; ?>
                    <?php echo $value->jurusan_sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?></td>
                <td align="center"> Jenis Kelamin  <br> 
                <?php 
                $a=0; foreach ($jenis3 as $key => $value) { $a++; ?>
                    <?php echo $value->jenis_kelamin; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Usia <br> 
                <?php 
                $a=0; foreach ($usia3 as $key => $value) { $a++; ?>
                    <?php echo $value->usia; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                            
            </tr>
                    
            <tr>
                <td align="center">Penghasilan Orang Tua <br> 
                <?php 
                $a=0; foreach ($penghasilan3 as $key => $value) { $a++; ?>
                    <?php echo $value->penghasilan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Sekolah <br> 
                <?php 
                $a=0; foreach ($sekolah3 as $key => $value) { $a++; ?>
                    <?php echo $value->sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Daerah Asal <br> 
                <?php 
                $a=0; foreach ($daerah3 as $key => $value) { $a++; ?>
                    <?php echo $value->daerah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
           <tr>
                <td align="center">Kelas <br> 
                <?php 
                $a=0; foreach ($kelas3 as $key => $value) { $a++; ?>
                    <?php echo $value->kelas; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Status Test <br> 
                <?php 
                $a=0; foreach ($status3 as $key => $value) { $a++; ?>
                    <?php echo $value->status; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Pekerjaan Mahasiswa <br> 
                <?php 
                $a=0; foreach ($pekerjaan3 as $key => $value) { $a++; ?>
                    <?php echo $value->pekerjaan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
          
           </table>

			<!-- cluster Empat-->
			<br>
			<table border="1" width="900" cellpadding="6">
            <header class="panel-heading">
            Cluster Empat
            </header>
            <tr>
                <td colspan="3" align="center">Hasil Cluster Empat </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center">Cluster Empat Terdiri Dari 
                <?php 
                $a=0; foreach ($c4 as $key => $value) { $a++; ?>
                    <?php echo $value->jumlah; ?> 
                <?php 
                } ?>
                 Profil Mahasiswa Yang Berasal Dari : </td>
                
            </tr>
            
            <tr>
                <td align="center">Jurusan Sekolah <br> 
                <?php 
                $a=0; foreach ($jurusan4 as $key => $value) { $a++; ?>
                    <?php echo $value->jurusan_sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?></td>
                <td align="center"> Jenis Kelamin  <br> 
                <?php 
                $a=0; foreach ($jenis4 as $key => $value) { $a++; ?>
                    <?php echo $value->jenis_kelamin; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Usia <br> 
                <?php 
                $a=0; foreach ($usia4 as $key => $value) { $a++; ?>
                    <?php echo $value->usia; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                            
            </tr>
                    
            <tr>
                <td align="center">Penghasilan Orang Tua <br> 
                <?php 
                $a=0; foreach ($penghasilan4 as $key => $value) { $a++; ?>
                    <?php echo $value->penghasilan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Sekolah <br> 
                <?php 
                $a=0; foreach ($sekolah4 as $key => $value) { $a++; ?>
                    <?php echo $value->sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Daerah Asal <br> 
                <?php 
                $a=0; foreach ($daerah4 as $key => $value) { $a++; ?>
                    <?php echo $value->daerah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
           <tr>
                <td align="center">Kelas <br> 
                <?php 
                $a=0; foreach ($kelas4 as $key => $value) { $a++; ?>
                    <?php echo $value->kelas; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Status Test <br> 
                <?php 
                $a=0; foreach ($status4 as $key => $value) { $a++; ?>
                    <?php echo $value->status; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Pekerjaan Mahasiswa <br> 
                <?php 
                $a=0; foreach ($pekerjaan4 as $key => $value) { $a++; ?>
                    <?php echo $value->pekerjaan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
          
           </table>

			
			<!-- cluster Lima-->
			<br>
			<table border="1" width="900" cellpadding="6">
            <header class="panel-heading">
            Cluster Lima
            </header>
            <tr>
                <td colspan="3" align="center">Hasil Cluster Lima </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center">Cluster Lima Terdiri Dari 
                <?php 
                $a=0; foreach ($c5 as $key => $value) { $a++; ?>
                    <?php echo $value->jumlah; ?> 
                <?php 
                } ?>
                 Profil Mahasiswa Yang Berasal Dari : </td>
                
            </tr>
            
            <tr>
                <td align="center">Jurusan Sekolah <br> 
                <?php 
                $a=0; foreach ($jurusan5 as $key => $value) { $a++; ?>
                    <?php echo $value->jurusan_sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?></td>
                <td align="center"> Jenis Kelamin  <br> 
                <?php 
                $a=0; foreach ($jenis5 as $key => $value) { $a++; ?>
                    <?php echo $value->jenis_kelamin; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Usia <br> 
                <?php 
                $a=0; foreach ($usia5 as $key => $value) { $a++; ?>
                    <?php echo $value->usia; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                            
            </tr>
                    
            <tr>
                <td align="center">Penghasilan Orang Tua <br> 
                <?php 
                $a=0; foreach ($penghasilan5 as $key => $value) { $a++; ?>
                    <?php echo $value->penghasilan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Sekolah <br> 
                <?php 
                $a=0; foreach ($sekolah5 as $key => $value) { $a++; ?>
                    <?php echo $value->sekolah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Daerah Asal <br> 
                <?php 
                $a=0; foreach ($daerah5 as $key => $value) { $a++; ?>
                    <?php echo $value->daerah; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
           <tr>
                <td align="center">Kelas <br> 
                <?php 
                $a=0; foreach ($kelas5 as $key => $value) { $a++; ?>
                    <?php echo $value->kelas; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Status Test <br> 
                <?php 
                $a=0; foreach ($status5 as $key => $value) { $a++; ?>
                    <?php echo $value->status; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
                <td align="center">Pekerjaan Mahasiswa <br> 
                <?php 
                $a=0; foreach ($pekerjaan5 as $key => $value) { $a++; ?>
                    <?php echo $value->pekerjaan; ?> = <?php echo $value->jumlah; ?> <br>
                <?php 
                } ?>
                </td>
           </tr>
          
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