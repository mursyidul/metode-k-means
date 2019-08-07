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
                <?php foreach ($centroid5 as $key => $value) { ?>
                <?php echo form_open('Nilai_profil1/edit-proses5/'.$value->id_centroid5,['class'=>'form-horizontal style-form']); ?>
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">Edit Centroid</th></tr>
					
          <tr><td width="150">Jurusan</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="jurusan" type="text" id="no_induk" class="form-control" value="<?php echo $value->jurusan; ?>" placeholder="Jurusan" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Jenis</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="jenis" type="text" id="no_induk" class="form-control" value="<?php echo $value->jenis; ?>" placeholder="Jenis" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Usia</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="usia" type="text" id="no_induk" class="form-control" value="<?php echo $value->usia; ?>" placeholder="Usia" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Penghasilan</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="penghasilan" type="text" id="no_induk" class="form-control" value="<?php echo $value->penghasilan; ?>" placeholder="Penghasilan" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Sekolah</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="sekolah" type="text" id="no_induk" class="form-control" value="<?php echo $value->sekolah; ?>" placeholder="Sekolah" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Daerah</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="daerah" type="text" id="no_induk" class="form-control" value="<?php echo $value->daerah; ?>" placeholder="Daerah" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Kelas</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="kelas" type="text" id="no_induk" class="form-control" value="<?php echo $value->kelas; ?>" placeholder="Kelas" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Status</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="status" type="text" id="no_induk" class="form-control" value="<?php echo $value->status; ?>" placeholder="Status" required />
                              </div>
                    </td>
          </tr>
          <tr><td width="150">Pekerjaan</td>
                            <td>
              <div class="col-sm-2">
                                  <input name="pekerjaan" type="text" id="no_induk" class="form-control" value="<?php echo $value->pekerjaan; ?>" placeholder="Pekerjaan" required />
                              </div>
                    </td>
          </tr>
				</table>
				<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('Nilai_profil1','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
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