<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                               
                               
                        <div class="table-responsive">
                                <?php $total=0; $no=0; foreach($nilai as $kon) { 
                                    $total += $kon['nilai'];
                                    $jawaban = strtolower($kon['jawaban']);
                                    $no++?>

                                    <p><?php echo $no.". ".$kon['soal'];?></p>                                    
                                    <?php if($kon['jawaban']== $kon['kunci']) { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-primary'>Benar</span>";?></b></p>
                                    <?php } else { ?>
                                        <p><b>Jawaban : <?php echo $kon['jawaban']." (".$kon[$jawaban].") <span class='label label-danger'>Salah</span> Kunci : ".$kon['kunci']." (".$kon[$jawaban].")";?></b></p>
                                    <?php } ?>
                                    <hr>
                                <?php } ?>           

                                <?php echo "<h1>Nilai Anda $total</<h1>" ?>                     
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