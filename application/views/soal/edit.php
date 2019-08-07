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
                <?php echo form_open('Soal/update',['class'=>'form-horizontal style-form']); ?>
					<table class="table table-bordered">
					<tr class="success"><th colspan="2">EDIT SOAL TRENING</th></tr>
					<tr><td width="150">Jenis Trening</td>
                            <td>
								<div class="col-sm-12">
                                <!--<select class="form-control" name="jenistrening" >
                                  <?php
                                  $jenistrening = $this->db->get('jenistrening');
                                  foreach ($jenistrening->result() as $key => $bag) { ?>
                                    <option value="<?php echo $bag->jenistrening; ?>" <?php if($value->jenistrening == $bag->jenistrening){echo "selected";} ?>><?php echo $bag->jenistrening; ?></option>;
                                  <?php } ?>
                                </select>-->
								<select class="form-control" name="paket" style="width: 100;">
                                          <?php 
                                          foreach($paket as $kat){
                                            if(!in_array($kat['jenistrening'],$label_post)){
                                              ?>
                                              <option value="<?php echo $kat['jenistrening'] ?>"><?php echo $kat['jenistrening'] ?></option>
                                              <?php } else { ?>
                                              <option selected="selected" value="<?php echo $kat['jenistrening'] ?>"><?php echo $kat['jenistrening'] ?></option>
                                              <?php } } ?>
                                </select>
                              </div>
                            </td></tr>
							<tr><td>SOAL</td>
							 <td>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="3" name="soal" placeholder="Soal" required><?php echo $soal; ?></textarea>
                              </div>
							 </td></tr>
							<tr><td>JAWABAN A</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="a" type="text" class="form-control" value="<?php echo $a; ?>" placeholder="Jawaban a" required />
                              </div> 
							</td>
							</tr>
							<tr><td>JAWABAN B</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="b" class="form-control" value="<?php echo $b; ?>" placeholder="Jawaban b" required />
                              </div> 
							</td>
							</tr>
							<tr><td>JAWABAN C</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="c" type="text" class="form-control" value="<?php echo $c; ?>"placeholder="Jawaban c" required />
                              </div> 
							</td>
							</tr>
							<tr><td>JAWABAN D</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="d" type="text" class="form-control" value="<?php echo $d; ?>"placeholder="Jawaban d" required />
                              </div> 
							</td>
							</tr>
							<tr><td>JAWABAN E</td>
                             <td>
							  <div class="col-sm-4">
                                  <input name="e" type="text" class="form-control" value="<?php echo $e; ?>" placeholder="Jawaban a" required />
                              </div> 
							</td>
							</tr>
                                  <tr><td> PILIH JAWABAN </td>
                                    <td><div class="col-sm-4">
                                        <select class="form-control" name="kunci" value="<?php echo $kunci; ?>">
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
                                        <select class="form-control" name="status" value="<?php echo $status; ?>">
                                            <option>tampil</option>
                                            <option>tidak</option>
                                        </select>
                                    </div></td></tr>
                                    <!--<div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="file_upload" />
                                    </div>-->
                                    
					
					</table>
					<div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="SIMPAN" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                  <?php echo anchor('Soal','BATAL',['class'=>'btn btn-sm btn-danger']); ?>
                              </div>
                    </div>
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