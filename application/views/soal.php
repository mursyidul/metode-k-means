<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('soal/tambah',"<i class='fa fa-plus'></i> Tambah Soal Trening Baru",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Soal Trening
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Soal</th>
                            <th>Jenis Trening</th>
							<th>Jawaban A</th>
							<th>Jawaban B</th>
							<th>Jawaban C</th>
							<th>Jawaban D</th>
							<th>Jawaban E</th>
							<th>Kunci</th>
							<th>Status</th>
                            <!--<th>Gaji</th>-->
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=0; foreach ($soal as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
							<td><?php echo $value->soal; ?></td>
                            <td><?php echo $value->jenistrening; ?></td>
                            <td><?php echo $value->a; ?></td>
                            <td><?php echo $value->b; ?></td>
                            <td><?php echo $value->c; ?></td>
                            <td><?php echo $value->d; ?></td>
                            <td><?php echo $value->e; ?></td>
                            <td><?php echo $value->kunci; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('soal/edit/'.$value->id_soal,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Soal Trening']); ?>

                            <?php echo anchor('soal/hapus/'.$value->id_soal,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus $value->soal?')", 'data-toggle'=>'tooltip','title'=>'Hapus Soal Trening', 'data-placement'=>'bottom']); ?>
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
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