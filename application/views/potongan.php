<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('potongan') == 'hrd'){?>
			
            <?php echo anchor('bagian/tambah',"<i class='fa fa-plus'></i> Tambah Bagian Baru",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Potongan
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Potongan</th>
                            <th>Potongan</th>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=0; foreach ($potongan as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->nama_potongan; ?></td>
                            <td>Rp. <?php echo number_format($value->potongan, 0, '','.'); ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
							 <td>
                             
							<?=anchor('potongan/edit/' . $value->id_potongan,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Potongan']); ?>
                            
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
            Copyright &copy; SISTEM PENGGAJIAN CV. SURYA AGUNG ENTERPRISE, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>