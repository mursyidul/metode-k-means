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
                <?php foreach ($puskesmas as $key => $value) { ?>
                <?php echo form_open('puskesmas/edit-proses/'.$value->no_puskesmas,['class'=>'form-horizontal style-form']); ?>
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">EDIT PUSKESMAS</th></tr>
					<tr><td width="150">Nama Puskesmas</td>
                            <td>
							<div class="col-sm-6">
                                  <input name="nama_puskesmas" type="text" id="no_induk" class="form-control" value="<?php echo $value->nama_puskesmas; ?>" placeholder="Nama Puskesmas" required />
                              </div>
                    </td></tr>
					<tr><td width="150">Jumlah Pasien</td>
                            <td>
							<div class="col-sm-6">
                                  <input name="jumlah_pasien_total" type="text" id="no_induk" class="form-control" value="<?php echo $value->jumlah_pasien_total; ?>" placeholder="Jumlah Pasien" required />
                              </div>
                    </td></tr>
					<tr><td width="150">Ketersedian Obat</td>
                            <td>
							<div class="col-sm-6">
                                  <input name="ketersedian_obat_total" type="text" id="no_induk" class="form-control" value="<?php echo $value->ketersedian_obat_total; ?>" placeholder="Ketersedian Obat" required />
                              </div>
                    </td></tr>
					<tr><td width="150">Jumlah Fasilitas</td>
                            <td>
							<div class="col-sm-6">
                                  <input name="jumlah_fasilitas_total" type="text" id="no_induk" class="form-control" value="<?php echo $value->jumlah_fasilitas_total; ?>" placeholder="Jumlah Fasilitas" required />
                              </div>
                    </td></tr>
					<!--<tr><td width="150">Gaji</td>
                            <td>
							<div class="col-sm-6">
                                  <input name="gaji" type="number" id="nama" class="form-control" value="<?php echo $value->gaji; ?>" placeholder="Gaji Pokok Bagian" required />
                            </div>
                    </td></tr>-->
				</table>
				<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('puskesmas','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
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
            CCopyright &copy; PT. BARITO SARANA KARYA , <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>