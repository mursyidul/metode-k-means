<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('Soal/create',"<i class='fa fa-plus'></i> Tambah Soal Training Baru",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Soal Treining
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
                                            <th>Stasus</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                     <tbody>
                                    <?php $no=0; foreach($soal as $kon) { $no++?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $kon['soal']; ?></td>
                                            <td><?php echo $kon['jenistrening']; ?></td>
                                            <td><?php echo $kon['a']; ?></td>
                                            <td><?php echo $kon['b']; ?></td>
                                            <td><?php echo $kon['c']; ?></td>
                                            <td><?php echo $kon['d']; ?></td>
                                            <td><?php echo $kon['e']; ?></td>
                                            <td><?php echo $kon['kunci']; ?></td>
                                            <td><?php echo $kon['status']; ?></td>                                           
                                            <td width='6%'>
                                            <a class='btn btn-info btn-xs' title='ubah' href="<?php echo base_url();?>soal/edit/<?php echo $kon['id_soal']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a class='btn btn-danger btn-xs' title='hapus' onclick="return confirm('hapus?')" href="<?php echo base_url();?>soal/delete/<?php echo $kon['id_soal']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
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