<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <section class="panel">
            <!--<header class="panel-heading">
            TAMBAH JENIS TRENING
            </header>-->
				<div class="col-md-12">
			    <div class="tab-pane active" >
				<?php echo $this->session->userdata('pesan'); ?>
                <?php echo form_open('centroid/tambah-proses',['class'=>'form-horizontal style-form']); ?>
					<table class="table table-bordered">
					<tr class="success"><th colspan="2">TAMBAH Centroid</th></tr>
					<tr><td width="150">Nama</td>
                            <td>
								<div class="col-sm-4">
                                  <input name="nama" type="text" id="no_induk" class="form-control" placeholder="Nama " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Centroid</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="centroid" type="text" id="no_induk" class="form-control" placeholder="centroid " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Jurusan</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="jurusan" type="text" id="no_induk" class="form-control" placeholder="Jurusan " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Jenis</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="jenis" type="text" id="no_induk" class="form-control" placeholder="Jenis " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Usia</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="usia" type="text" id="no_induk" class="form-control" placeholder="Usia " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Penghasilan</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="penghasilan" type="text" id="no_induk" class="form-control" placeholder="Penghasilan " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Sekolah</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="sekolah" type="text" id="no_induk" class="form-control" placeholder="Sekolah " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Daerah</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="daerah" type="text" id="no_induk" class="form-control" placeholder="Daerah" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Kelas</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="kelas" type="text" id="no_induk" class="form-control" placeholder="Kelas " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Status</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="status" type="text" id="no_induk" class="form-control" placeholder="Status " required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Pekerjaan</td>
                            <td>
                <div class="col-sm-2">
                                  <input name="pekerjaan" type="text" id="no_induk" class="form-control" placeholder="Pekerjaan " required />
                              </div>
                    </td>
          </tr>
					
					</table>
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('centroid','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
                              </div>
                    </div>
					<div style="margin-top: 20px;"></div>
                      <?php echo form_close(); ?>
				</div>
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