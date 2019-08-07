<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                               
                               
                        <div class="panel-body" style="height: 800px; overflow: auto;">
                             <form role="form" action="<?php echo base_url(); ?>jawaban/jawab" method="post" onsubmit="return confirm('Anda Yakin ?')"> 
                            <!-- <input type="hidden" name="jumlah_soal" value="<?php echo $total_soal; ?>">-->
                            <!-- <input type="hidden" name="id_jawaban" value="<?php echo $id_jawaban; ?>">-->
                                <?php $no=0; foreach($soal as $soal1) { $no++ ?>
                                    <div class="form-group">
                                        <b><?php echo $no; ?>. </b>
										<label><?php echo $soal1->soal; ?></label>
                                        <input type='hidden' name='soal[]' value='<?php echo $soal1->id_soal; ?>'/>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal1->id_soal; ?>]" id="optionsRadios1" value="A" required/><b>A. </b> <?php echo $soal1->a; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal1->id_soal; ?>]" id="optionsRadios2" value="B" required/><b>B. </b><?php echo $soal1->b; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal1->id_soal; ?>]" id="optionsRadios3" value="C" required/><b>C. </b><?php echo $soal1->c; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal1->id_soal; ?>]" id="optionsRadios4" value="D" required/><b>D. </b><?php echo $soal1->d; ?>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban[<?php echo $soal1->id_soal; ?>]" id="optionsRadios5" value="E" required/><b>E. </b><?php echo $soal1->e; ?>
                                            </label>
					                   </div>
				    </div>
					    <?php } ?>                                
                                 <button type="submit" class="btn btn-primary">Selesai</button> 
                               </form> 
                                <br />
                        </div>

                    
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