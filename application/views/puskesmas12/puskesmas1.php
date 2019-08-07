<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('Puskesmas/tambah',"<i class='fa fa-plus'></i> Tambah Puskesmas Baru",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data PUSKESMAS
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Puskesmas</th>
                            <th>Jumlah Pasien</th>
                            <th>Ketersedian Obat</th>
                            <th>Jumlah Fasilitas</th>
                            <!--<th>Gaji</th>-->
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=0; foreach ($data_puskesmas as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->nama_puskesmas; ?></td>
							<td><?php echo $value->jumlah_pasien_total; ?></td>
							<td><?php echo $value->ketersedian_obat_total; ?></td>
							<td><?php echo $value->jumlah_fasilitas_total; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('puskesmas/edit/'.$value->no_puskesmas,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Puskesmas']); ?>

                            <?php echo anchor('puskesmas/hapus/'.$value->no_puskesmas,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus?')", 'data-toggle'=>'tooltip','title'=>'Hapus Puskesmas', 'data-placement'=>'bottom']); ?>
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