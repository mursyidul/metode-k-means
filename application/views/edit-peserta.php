<?php $this->load->view('head'); ?>
<!-- file bootstrap css yang digunakan-->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <section class="panel">
			<div class="col-md-12">
			<div class="tab-pane active" >
                <?php echo $this->session->userdata('pesan'); ?>
                <?php foreach ($peserta as $key => $value) { ?>
                <?php echo form_open('peserta/edit-proses/'.$value->nik,['class'=>'form-horizontal style-form']); ?>
			<table class="table table-bordered">
			<tr class="success"><th colspan="2">EDIT PESERTA</th></tr>
                            <tr><td width="150">Nama Peserta</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="nama" type="text" id="no_induk" class="form-control" value="<?php echo $value->nama; ?>" placeholder="Nama Peserta" required />
                            </div>
                            </td></tr>
							<tr><td>Tempat Lahir</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="tempat" type="text" id="tempat" class="form-control" value="<?php echo $value->tempat; ?>" placeholder="Tempat Lahir" required />
                              </div> 
							</td>
							</tr>
							<tr><td width="150">Tanggal Lahir</td>
                            <td>
                                <div class="col-sm-6">
								<div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" id="dtp_input2" value="<?php echo $value->tgl_lahir; ?>" placeholder="Tanggal Lahir" required style="width:150px" />
								</div>	
								</div>	
                            </td></tr>
							<tr><td>Alamat</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" required><?php echo $value->alamat; ?></textarea>
                              </div>
							</td></tr>
							<tr><td>Jenis Kelamin</td>
                           <td value="<?php echo $value->jenis_kelamin; ?>">
                                <div class="col-sm-4"  ><div class="col-sm-0"  >
								<select class="form-control" name="jenis_kelamin" >
									<option   >Pilih Jenis Kelamin</option>
								    <option value="Laki-Laki">Laki-Laki</option>
								    <option value="Perempuan">Perempuan</option>
								</select>
                                </div>
                                </div>
                           </td></tr>
							<tr><td width="150">Lulusan</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="lulusan" type="text" id="no_induk" class="form-control" value="<?php echo $value->lulusan; ?>" placeholder="Lulusan" required />
                            </div>
                            </td></tr>
							<tr><td width="150">Jenis Trening</td>
                            <td>
								<div class="col-sm-12">
                                <select class="form-control" name="jenistrening" >
                                  <?php
                                  $jenistrening = $this->db->get('jenistrening');
                                  foreach ($jenistrening->result() as $key => $bag) { ?>
                                    <option value="<?php echo $bag->jenistrening; ?>" <?php if($value->jenistreining == $bag->jenistrening){echo "selected";} ?>><?php echo $bag->jenistrening; ?></option>;
                                  <?php } ?>
                                </select>
                              </div>
                            </td></tr>
							<tr><td>Perusahaan</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="perusahaan" placeholder="Perusahaan" required><?php echo $value->perusahaan; ?></textarea>
                              </div>
							</td></tr>
							<tr><td>Bulan</td>
                            <td>
                                <div class="col-sm-4">
								<select class="form-control" name="bulan" value="<?php echo $value->bulan; ?>">
									<option>Pilih Bulan</option>
								    <option value="januari">Januari</option>
								    <option value="februari">Februari</option>
								    <option value="maret">Maret</option>
								    <option value="april">April</option>
								    <option value="mei">Mei</option>
								    <option value="juni">Juni</option>
								    <option value="juli">Juli</option>
								    <option value="agustus">Agustus</option>
								    <option value="september">September</option>
								    <option value="oktober">Oktober</option>
								    <option value="september">September</option>
								    <option value="oktober">Oktober</option>
								    <option value="november">November</option>
								    <option value="desember">Desember</option>
								</select>
                                </div>
                           </td></tr>
						   
							
			</table>
			
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('peserta','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
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
            Copyright &copy; PT. BARITO SARANA KARYA, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>
<!-- jQuery Version 1.11.0 -->
 <script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 
 