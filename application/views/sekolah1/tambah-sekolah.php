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
                <?php echo form_open('Sekolah/tambah-proses',['class'=>'form-horizontal style-form']); ?>
					<table class="table table-bordered">
					<tr class="success"><th colspan="2">TAMBAH SEKOLAH</th></tr>
					<tr><td width="150">Nama Sekolah</td>
                            <td>
								<div class="col-sm-6">
                                  <input name="nama_sekolah" type="text" id="no_induk" class="form-control" placeholder="Nama Sekolah" required />
                              </div>
                    </td></tr>
					
					</table>
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('sekolah','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
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