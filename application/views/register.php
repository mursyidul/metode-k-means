
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PT. BARITO SARANA KARYA</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By NewDev">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery.autocomplete.css');?>" rel="stylesheet">

    <!-- Ionicons -->
    <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('assets/css/morris/morris.css');?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/css/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="http://localhost/perpuspetro/assets/admin/css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/perpuspetro/assets/css/sweetalert.css">
	
	<!-- file bootstrap css yang digunakan-->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    </head>

    <body class="skin-black">
    <section class="content">
        <div class="row" style="margin-top:1%;">
            <div class="col-md-12">
			<center><img src="<?php echo base_url('assets/img/download.png'); ?>" width="30%" class="rounded" alt="User Image" /></center>
			<div class="col-md-3"></div>
            <div class="col-md-6">
				
                <section class="panel">
                <div class="panel-body table-responsive">
                <center><h3>SISTEM SELEKSI PENERIMAAN PESERTA TRAINING K3</h3><hr/>
                <?php echo $this->session->flashdata('pesan'); ?>
                <?php echo form_open('login/daftar-proses/',['class'=>'form-horizontal style-form']); ?>

                <?php
                  $tes = $this->db->query("SELECT max(nik) AS last FROM peserta");

                  foreach ($tes->result_array() as $value) {
                    $lastnotransaksi = $value['last'];
                    $lastnourut = substr($lastnotransaksi, 6,3);
                    $nextnourut = $lastnourut + 1;

                    $nextno = "BSK".sprintf('%06s', $nextnourut); ?>

                    <input type="hidden" name="nik" class="form-control" value="<?php echo $nextno; ?>" readonly>
                    <?php } ?>

                          <table class="table table-bordered">
                            
							<tr><td width="150">Nama Peserta</td>
                            <td>
                                <?php echo inputan('text', 'nama','col-sm-8','Nama Peserta', 1, '','');?>
                            </td></tr>
							<tr><td width="150">Ulangi nama</td>
                            <td>
                                <?php echo inputan('text', 'subject','col-sm-8','ulangi nama', 1, '','');?>
                            </td></tr>
							<tr><td width="150">Tempat</td>
                            <td>
                                <?php echo inputan('text', 'tempat','col-sm-8','Tempat Lahir', 1, '','');?>
                            </td></tr>
							<tr><td width="150">Tanggal Lahir</td>
                            <td>
                                <div class="col-sm-6">
								<div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" id="dtp_input2" placeholder="Tanggal Lahir" required style="width:150px" />
								</div>	
								</div>	
                            </td></tr>
							<tr><td>Alamat</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Peserta" required></textarea>
                              </div>
							 </td></tr>
							<tr><td>Jenis Kelamin</td>
                           <td>
                                <div class="col-sm-4">
								<select class="form-control" name="jenis_kelamin">
									<option>Pilih Jenis Kelamin</option>
								    <option value="Laki-Laki">Laki-Laki</option>
								    <option value="Perempuan">Perempuan</option>
								</select>
                                </div>
                           </td></tr>
						   <tr><td width="150">Lulusan</td>
                            <td>
                                <?php echo inputan('text', 'lulusan','col-sm-8','Lulusan', 1, '','');?>
                            </td></tr>
							<tr><td>Jenis Trening</td>
                           <td>
                                 <div class="col-sm-4">
								 <select class="form-control" name="jenistrening">
                                  <option>Pilih Jenis Trening</option>
                                  <?php
                                  $jenistrening = $this->db->get('jenistrening');
                                  foreach ($jenistrening->result() as $key => $value) {
                                    echo "<option value=".$value->jenistrening.">".$value->jenistrening."</option>";
                                  }
                                  ?>
                                </select>
                                 </div>
                            </td></tr>
							<tr><td>Perusahaan</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="perusahaan" placeholder="Perusahaan" required></textarea>
                              </div>
							 </td></tr>
							<tr><td>Bulan</td>
                            <td>
                                <div class="col-sm-4">
								<select class="form-control" name="bulan">
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
								    <option value="november">November</option>
								    <option value="desember">Desember</option>
								</select>
                                </div>
                           </td></tr>
							<tr><td width="150">Username</td>
                            <td>
                                <?php echo inputan('text', 'username','col-sm-4','Username Untuk Login Peserta', 1, '','');?>
                            </td></tr>
							<tr><td width="150">Password</td>
                            <td>
                                <div class="col-sm-4">
                                  <input name="password" type="password" id="no_induk" class="form-control" minlength="8" placeholder="Password Peserta" required />
                                  <sup> Password Minimal 8 Karakter</sup>
                              </div>
								<sub>Minimal 8 Karakter</sub>
                            </td></tr>
							
							
						</table>

                          <div class="form-group" style="margin-bottom: 20px;">
                              <div class="col-sm-12">
                                  <input type="submit" name="simpan" value="DAFTAR" class="btn btn-success" />&nbsp;
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                          </center>
                          <hr/>
                          <h5>Sudah Terdaftar !!! <?php echo anchor(base_url(),"Silahkan Login."); ?></h5>
                      <?php form_close(); ?>
                </div>
                </section>
                <p>&nbsp;</p>
                <center><sub>Copyright &copy; PT. BARITO SARANA KARYA, <?php echo date('Y'); ?></sub></center>
            </div>
            <div class="col-md-3"></div>
        </div></div>
    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="http://localhost/perpuspetro/assets/admin/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/jquery.autocomplete.js');?>"></script>


    <script type="text/javascript">
        setTimeout(function(){$(".alert").fadeOut('slow');}, 3000);
    </script>

        <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- daterangepicker -->
    <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/plugins/chart.js');?>" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
        <!-- calendar -->
    <script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.js');?>" type="text/javascript"></script>

        <!-- Director App -->
    <script src="http://localhost/perpuspetro/assets/admin/js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/js/Director/dashboard.js');?>" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>  

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

</body>
</html>