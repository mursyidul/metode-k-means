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
                <?php foreach ($soal as $key => $value) { ?>
                <?php echo form_open('soal/edit-proses/'.$value->id_soal,['class'=>'form-horizontal style-form']); ?>
			<table class="table table-bordered">
			<tr class="success"><th colspan="2">EDIT SOAL TRENING</th></tr>
							<tr><td width="150">Jenis Trening</td>
                            <td>
								<div class="col-sm-4">
                                <select class="form-control" name="jenistrening" >
                                  <?php
                                  $jenistrening = $this->db->get('jenistrening');
                                  foreach ($jenistrening->result() as $key => $bag) { ?>
                                    <option value="<?php echo $bag->jenistrening; ?>" <?php if($value->jenistrening == $bag->jenistrening){echo "selected";} ?>><?php echo $bag->jenistrening; ?></option>;
                                  <?php } ?>
                                </select>
                              </div>
                            </td></tr>
							<tr><td>Soal</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="soal" placeholder="Soal" required><?php echo $value->soal; ?></textarea>
                              </div>
							</td></tr>
                            <tr><td width="150">Jawaban A</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="a" type="text" id="no_induk" class="form-control" value="<?php echo $value->a; ?>" placeholder="Jawaban A" required />
                            </div>
                            </td></tr>
							<tr><td width="150">Jawaban B</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="b" type="text" id="no_induk" class="form-control" value="<?php echo $value->b; ?>" placeholder="Jawaban B" required />
                            </div>
                            </td></tr>
							<tr><td width="150">Jawaban C</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="c" type="text" id="no_induk" class="form-control" value="<?php echo $value->c; ?>" placeholder="Jawaban C" required />
                            </div>
                            </td></tr>
							<tr><td width="150">Jawaban D</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="d" type="text" id="no_induk" class="form-control" value="<?php echo $value->d; ?>" placeholder="Jawaban C" required />
                            </div>
                            </td></tr>
							<tr><td width="150">Jawaban E</td>
                            <td>
							<div class="col-sm-8">
                                  <input name="e" type="text" id="no_induk" class="form-control" value="<?php echo $value->e; ?>" placeholder="Jawaban E" required />
                            </div>
                            </td></tr>
							<tr><td> PILIH JAWABAN </td>
                                    <td><div class="col-sm-4">
                                        <select class="form-control" name="kunci" value="<?php echo $value->kunci; ?>">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                        </select>
                                    </div>
							</td></tr>
							<tr><td>STATUS</td>
                                    <td><div class="col-sm-4">
                                        <select class="form-control" name="status" value="<?php echo $value->status; ?>">
                                            <option>tampil</option>
                                            <option>tidak</option>
                                        </select>
                            </div></td></tr>					
			</table>
			
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('soal','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
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
 