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
            Data Status
            </header>
                <div class="panel-body table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Status</th>
							<th>Jumlah</th>
							<th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $this->db->query('truncate table inisial_status');
                     $a=0; foreach ($status as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->status; ?></td>
							<td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php 
                    $q = "insert into inisial_status(status,jumlah,inisial) values('".$value->status ."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                    } ?>
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