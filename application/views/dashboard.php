<?php $this->load->view('head'); ?>
<aside class="right-side">
<!-- Main content -->
    <section class="content">
        <div class="row" style="margin-bottom:5px;">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                <center>
                    <h3>SELAMAT DATANG DI UNIVERSITAS MUHAMMADIYAH GRESIK</h3>
                </center>
            </div>
            </div>
        </div>
            
            <div class="col-md-6">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-green"><i class="fa fa-user"></i></span>
                     <div class="sm-st-info">
                     <?php $kar = $this->db->get('nilai_profil_mahasiswa'); ?>
                     <span><?php echo $kar->num_rows(); ?></span>
                        Total Mahasiswa
                    </div>
                </div>
            </div>
            <?php if($this->session->userdata('bagian') == 'karyawan'){ ?>
                <div class="col-md-6">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                     <div class="sm-st-info">
                     <?php
                     $nik = $this->session->userdata('nik');
                     $kar = $this->db->where('nik', $nik)->order_by('nik')->limit(1)->get('gaji_karyawan');
                     $row = $kar->row();
                     ?>
                     <span><?php
                     if($kar->num_rows() == 0 || $row->status == ''){
                        echo "TIDAK ADA GAJI";
                     } else {
                        echo "Rp. ".number_format($row->total_gaji,0,',','.').",-";
                    }
                     ?></span>
                        Gaji Terakhir
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Main row -->
        <?php if($this->session->userdata('bagian') == 'hrd' && $this->session->userdata('bagian') == 'direktur'){ ?>
        <div class="row">
            <div class="col-md-12">
            <!--earning graph start-->
            <section class="panel">
            <header class="panel-heading">
            Grafik Dashboard
            </header>
                <div class="panel-body">
                <canvas id="linechart" width="100%" height="200"></canvas>
                </div>
            </section>
            <!--earning graph end-->
            </div>
        </div>
        <?php } ?>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; UNIVERSITAS MUHAMMADIYAH GRESIK, <?php echo date('Y'); ?>
            </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>