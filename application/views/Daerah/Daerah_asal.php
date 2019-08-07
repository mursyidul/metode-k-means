<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('Daerah_asal/tambah',"<i class='fa fa-plus'></i> Tambah Daerah Asal",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Daerah
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable4" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Daerah</th>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=0; foreach ($daerah_asal as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->kota_asal; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('Daerah_asal/edit/'.$value->id_kota,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Daerah Asal']); ?>

                            <?php echo anchor('Daerah_asal/hapus/'.$value->id_kota,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus?')", 'data-toggle'=>'tooltip','title'=>'Hapus Daerah Asal', 'data-placement'=>'bottom']); ?>
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
            Copyright &copy; UNIVERSITAS MUHAMMADIYAH GRESIK, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>