<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Centroid
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Centroid</th>
                            <th>Jurusan </th>
                            <th>Jenis </th>
                            <th>Usia </th>
                            <th>Penghasilan </th>
                            <th>Sekolah </th>
                            <th>Daerah </th>
                            <th>Kelas </th>
                            <th>Status </th>
                            <th>Pekerjaan </th>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ echo "<th>Aksi</th>";} ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=0; foreach ($centroid as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->centroid; ?></td>
                            <td><?php echo $value->jurusan; ?></td>
                            <td><?php echo $value->jenis; ?></td>
                            <td><?php echo $value->usia; ?></td>
                            <td><?php echo $value->penghasilan; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->daerah; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->status; ?></td>
                            <td><?php echo $value->pekerjaan; ?></td>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                            <td>
                            <div id="thanks">

                            <?php echo anchor('Centroid/edit/'.$value->id_centroid,"<span class='glyphicon glyphicon-edit'></span>",['class'=>'btn btn-sm btn-primary tooltips','data-placement'=>'bottom','data-toggle'=>'tooltip', 'title'=>'Edit Centroid']); ?>

                            
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