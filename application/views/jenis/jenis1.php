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
            Data Inisial
            </header>
            <div class="panel-body table-responsive">
            <header class="panel-heading" align="center">
            Inisial Jenis Kelamin
            </header>
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kelamin</th>
							<th>Jumlah</th>
							<th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $this->db->query('truncate table inisial_jenis');
                     $a=0; foreach ($jenis as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->jenis_kelamin; ?></td>
							<td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php
                    $q = "insert into inisial_jenis(jenis,jumlah,inisial) values('".$value->jenis_kelamin ."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                     } ?>
                    </tbody>
                </table>
                </div>

                <br><br>

                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Jurusan Sekolah
                </header>
                <table id="myTable1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jurusan Sekolah</th>
                            <th>Jumlah</th>
                            <th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $this->db->query('truncate table inisial_jurusan');
                     $a=0; foreach ($jurusan as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->jurusan_sekolah; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php
                    $q = "insert into inisial_jurusan(jurusan,jumlah,inisial) values('".$value->jurusan_sekolah ."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                     } ?>
                    </tbody>
                </table>
                </div>

                <br><br>

                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Daerah
                </header>
                <table id="myTable2" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Daerah</th>
                            <th>Jumlah</th>
                            <th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $this->db->query('truncate table inisial_daerah');
                    $a=0; foreach ($daerah as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->kota_asal; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php 
                    $q = "insert into inisial_daerah(daerah,jumlah,inisial) values('".$value->kota_asal."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                    } ?>
                    </tbody>
                </table>
                </div> 

                <br>
                <br>
                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Kelas
                </header>
                <table id="myTable3" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Jumlah</th>
                            <th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $this->db->query('truncate table inisial_kelas');
                     $a=0; foreach ($kelas as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->kelas; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php 
                    $q = "insert into inisial_kelas(kelas,jumlah,inisial) values('".$value->kelas ."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                    } ?>
                    </tbody>
                </table>
                </div> <br>
                <br>

                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Pekerjaan Mahasiswa
                </header>
                <table id="myTable4" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pekerjaan Mahasiswa</th>
                            <th>Jumlah</th>
                            <th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $this->db->query('truncate table inisial_pekerjaan');
                     $a=0; foreach ($pekerjaan as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->pekerjaan_mahasiswa; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php
                    $q = "insert into inisial_pekerjaan(pekerjaan,jumlah,inisial) values('".$value->pekerjaan_mahasiswa ."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                     } ?>
                    </tbody>
                </table>
                </div> 

                <br><br>

                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Penghasilan Orang Tua
                </header>
                <table id="myTable5" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penghasilan Orang Tua</th>
                            <th>Jumlah</th>
                            <th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $this->db->query('truncate table inisial_penghasilan');
                    $a=0; foreach ($penghasilan as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->penghasilan_ortu; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php 
                    $q = "insert into inisial_penghasilan(penghasilan,jumlah,inisial) values('".$value->penghasilan_ortu."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                    
                    } ?>
                    </tbody>
                </table>
                </div>

                <br><br>

                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Sekolah
                </header>
                <table id="myTable6" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sekolah</th>
                            <th>Jumlah</th>
                            <th>Inisial</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $this->db->query('truncate table inisial_sekolah');
                    $a=0; foreach ($sekolah as $key => $value) { $a++; ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $value->sekolah; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $a; ?></td>
                        </tr>
                    <?php 
                    $q = "insert into inisial_sekolah(sekolah,jumlah,inisial) values('".$value->sekolah ."','".$value->jumlah."','".$a."')";
                    $this->db->query($q);
                    } ?>
                    </tbody>
                </table>
                </div>

                <br><br>

                <div class="panel-body table-responsive">
                <header class="panel-heading" align="center">
                Inisial Status
                </header>
                <table id="myTable7" class="table table-hover">
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