<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <section class="panel">
            <!--<header class="panel-heading">
            EDIT JENIS TRENING
            </header>-->
				<div class="col-md-12">
				<div class="tab-pane active" >
				<?php echo $this->session->userdata('pesan'); ?>
                <?php foreach ($mahasiswa as $key ) { ?>
                <?php echo form_open('mahasiswa/edit-proses/'.$key->id_mahasiswa,['class'=>'form-horizontal style-form']); ?>
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">EDIT MAHASISWA</th></tr>
					<tr><td width="150">Nama Mahasiswa</td>
                            <td>
							<div class="col-sm-6">
                                  <input name="nama" type="text" id="no_induk" class="form-control" value="<?php echo $key->nama; ?>" placeholder="Nama Mahasiswa" required />
                              </div>
                    </td></tr>
					<tr><td width="150">Usia Masuk</td>
                            <td>
							<div class="col-sm-2">
                                  <input name="usia_masuk" type="text" id="no_induk" class="form-control" value="<?php echo $key->usia_masuk; ?>" placeholder="Uisa Masuk" required />
                              </div>
                    </td></tr>
					<tr><td>Jenis Kelamin</td><td>
                            <?php echo editcombo('jeniskelamin','jenis_kelamin','col-sm-2','jenis_kelamin','id_jenis','','',$key->id_jenis); ?>
                    </td></tr>
					<tr><td>Jurusan Sekolah</td><td>
                            <?php echo editcombo('jurusansekolah','jurusan_sekolah','col-sm-2','jurusan_sekolah','id_jurusan','','',$key->id_jurusan); ?>
                    </td></tr>
					<tr><td>Kelas</td><td>
                            <?php echo editcombo('kelas1','kelas','col-sm-2','kelas','id_kelas','','',$key->id_kelas); ?>
                    </td></tr>
					<tr><td>Kota Asal</td><td>
                            <?php echo editcombo('kotaasal','kota_asal','col-sm-2','kota_asal','id_kota','','',$key->id_kota); ?>
                    </td></tr>
					<tr><td>Pekerjaan Mahasiswa</td><td>
                            <?php echo editcombo('pekerjaanmahasiswa','pekerjaan_mahasiswa','col-sm-2','pekerjaan_mahasiswa','id_pekerjaan','','',$key->id_pekerjaan); ?>
                    </td></tr>
					<tr><td>Penghasilan Orang Tua</td><td>
                            <?php echo editcombo('penghasilanortu','penghasilan_ortu','col-sm-2','penghasilan_ortu','id_penghasilan','','',$key->id_penghasilan); ?>
                    </td></tr>
					<tr><td>Sekolah</td><td>
                            <?php echo editcombo('sekolah1','sekolah','col-sm-2','sekolah','id_sekolah','','',$key->id_sekolah); ?>
                    </td></tr>
         <tr><td>Status</td><td>
                            <?php echo editcombo('status','status','col-sm-2','status','id_status','','',$key->id_status); ?>
                    </td></tr>
                    
				<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('mahasiswa','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
                              </div>
                   </div>
				   <div style="margin-top: 20px;"></div>
                      <?php echo form_close(); ?>
                <?php } ?>
				</div>
				</div>
            </section>
            </div><!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            CCopyright &copy; UNIVERSITAS MUHAMMADIYAH GRESIK , <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>