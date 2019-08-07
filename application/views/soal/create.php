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
                <?php echo form_open('Soal/insert',['class'=>'form-horizontal style-form']); ?>
					<table class="table table-bordered">
					<tr class="success"><th colspan="2">TAMBAH SOAL TRENING</th></tr>
					<tr><td>JENIS TRENING</td>
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
							<tr><td>SOAL</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="soal" placeholder="Soal" required></textarea>
                              </div>
							 </td></tr>
							<tr><td width="150">JAWABAN A</td>
                            <td>
                                <?php echo inputan('text', 'a','col-sm-6','Jawaban a', 1, '','');?>
                            </td></tr>
							<tr><td width="150">JAWABAN B</td>
                            <td>
                                <?php echo inputan('text', 'b','col-sm-6','Jawaban b', 1, '','');?>
                            </td></tr>
							<tr><td width="150">JAWABAN C</td>
                            <td>
                                <?php echo inputan('text', 'c','col-sm-6','Jawaban c', 1, '','');?>
                            </td></tr>
							<tr><td width="150">JAWABAN D</td>
                            <td>
                                <?php echo inputan('text', 'd','col-sm-6','Jawaban d', 1, '','');?>
                            </td></tr>
							<tr><td width="150">JAWABAN E</td>
                            <td>
                                <?php echo inputan('text', 'e','col-sm-6','Jawaban e', 1, '','');?>
                            </td></tr>
                                  <tr><td> PILIH JAWABAN </td>
                                    <td><div class="col-sm-4">
                                        <select class="form-control" name="kunci">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                        </select>
                                        <?php
                                            if(isset($_POST['submit'])){
                                            $pilihan=$_POST["kunci"];
                                            $id_soal=$_POST["id"];
                                            $score=0;
                                            $benar=1;
                                            $salah=0;
                                            $kosong=0;
                                            for ($i=0;$i<$jumlah;$i++){
                                            //id nomor soal
                                            $nomor=$id_soal[$i];
                                            //jika user tidak memilih jawaban
                                            if (empty($pilihan[$nomor])){
                                            $kosong++;
                                            }else{
                                            //jawaban dari user
                                            $jawaban=$pilihan[$nomor];
                                            //cocokan jawaban user dengan jawaban di database
                                            if($cek){
                                            //jika jawaban cocok (benar)
                                            $benar++;
                                            }else{
                                            //jika salah
                                            $salah++;
                                            }}
                                            $score = $benar*5;
                                            }}
                                            ?>

                                    </div>
									</td></tr>
									<tr><td>STATUS</td>
                                    <td><div class="col-sm-4">
                                        <select class="form-control" name="status">
                                            <option>tampil</option>
                                            <option>tidak</option>
                                        </select>
                                    </div></td></tr>
                                    <!--<div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="file_upload" />
                                    </div>-->
                                    
					
					</table>
					<!--<div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a class="btn btn-default" href="<?php echo base_url();?>soal">Batal</a>
                                    </div>-->
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('Soal','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
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
            Copyright &copy; PT. BARITO SARANA KARYA, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>