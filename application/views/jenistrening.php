<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('jenistrening/tambah',"<i class='fa fa-plus'></i> Proses Iterasi Selanjutnya",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Awal
            </header>
			<div id="body">
                <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-admin">
                    <tr align="center"><td rowspan="2">No Puskesmas</td><td rowspan="2">Nama Puskesmas</td><td rowspan="2">Jumlah Pasien</td><td rowspan="2">Ketersediaan Obat</td><td rowspan="2">Jumlah Fasilitas</td>
              <td colspan="3">Centroid 1</td><td colspan="3">Centroid 2</td><td colspan="3">Centroid 3</td><td rowspan="2">C1</td><td rowspan="2">C2</td><td rowspan="2">C3</td>
              </tr>
              <tr align="center">
              <td>81</td><td>65</td><td>65</td>
              <td>65</td><td>81</td><td>65</td>
              <td>65</td><td>65</td><td>81</td>
              </tr>
					<!--<thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jenis Trening</th>
                            <!--<th>Gaji</th>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead> -->
                    <!--<tbody>
                    <?php $a=0; foreach ($jenistrening as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->jenistrening; ?></td>
                            <!--<td>Rp. <?php echo number_format($value->gaji, 0, '','.'); ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('jenistrening/edit/'.$value->id_jenistrening,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Jenis Trening']); ?>

                            <?php echo anchor('jenistrening/hapus/'.$value->id_jenistrening,"<span class='glyphicon glyphicon-trash'></span>",['class'=>'btn btn-sm btn-danger tooltips','onclick'=>"return confirm ('Yakin ingin hapus $value->jenistrening?')", 'data-toggle'=>'tooltip','title'=>'Hapus Jenis Trening', 'data-placement'=>'bottom']); ?>
                            </div>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody> -->
                </table>
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