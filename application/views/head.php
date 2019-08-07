
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UNIVERSITAS MUHAMMADIYAH GRESIK</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By NewDev">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery.autocomplete.css');?>" rel="stylesheet">

    <!-- Ionicons -->
    <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('assets/css/morris/morris.css');?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/css/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url('assets/css/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    </head>

    <body class="skin-black">
    <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">ADMINISTRATOR</a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $this->session->userdata('username'); ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Akun</li>
                                <li>
                                <?php echo anchor('dashboard/logout',"<i class='fa fa-ban fa-fw pull-right'></i> Logout"); ?>
                                </li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                            <center>
                                <div class="pull-left image">
                                    <img src="<?php echo base_url('assets/img/avatar5.png'); ?>" width="50%" class="img-circle" alt="User Image" />
                                </div>
                            </center>
                                <div class="pull-left info" align="center"><br/>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Hello, <?php echo $this->session->userdata('username'); ?></p>
                                </div>
                            </div>

                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <?php echo anchor('dashboard',"<i class='fa fa-dashboard'></i> <span>Dashboard</span>"); ?>
                                </li>
                            <?php if($this->session->userdata('bagian') == 'hrd'){ ?>
                               <!-- <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-users"></i>
                                    <span>Data Jabatan</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                        <li>
                                        <?php echo anchor('bagian',"<i class='fa fa-angle-double-right'></i>Data Jabatan"); ?>
                                        </li>
                                        
                                        <li>
                                        <?php echo anchor('bagian/tambah',"<i class='fa fa-angle-double-right'></i>Tambah Jabatan"); ?> 
                                        </li>
                                    </ul>
                                </li>-->

                                <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-users"></i>
                                    <span>Master</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                       <!-- <li>
                                        <?php echo anchor('centroid',"<i class='fa fa-angle-double-right'></i>Centroid Awal"); ?>
                                        </li>-->
                                        <li>
                                        <?php echo anchor('Daerah_asal',"<i class='fa fa-angle-double-right'></i>Daerah Asal"); ?>
                                        </li>
                                        
                                        <li>
                                        <?php echo anchor('sekolah',"<i class='fa fa-angle-double-right'></i>Sekolah"); ?>
                                        </li>
                                        
                                        <li>
                                        <?php echo anchor('jurusan',"<i class='fa fa-angle-double-right'></i>Jurusan Sekolah"); ?>
                                        </li>
                            
                                    </ul>
                                </li>

								<li class="treeview">
                                <a href="#">
                                    <i class="fa fa-male"></i>
                                    <span>Mahasiswa</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                        <li>
                                        <?php echo anchor('mahasiswa',"<i class='fa fa-angle-double-right'></i>mahasiswa"); ?>
                                        </li>
                                    </ul>
                                </li>

                                <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-qrcode"></i>
                                    <span>Inisialisasi </span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                        <li>
                                        <?php echo anchor('inisial',"<i class='fa fa-angle-double-right'></i>Hasil Inisial"); ?>
                                        </li>
                                        
                                    </ul>
                                </li>
								
																
								<li class="treeview">
                                <a href="#">
                                    <i class="  fa fa-building-o"></i>
                                    <span>Nilai Profil Mahasiswa</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                         <!--<li>
                                        <?php echo anchor('Nilai_profil',"<i class='fa fa-angle-double-right'></i> Nilai Mahasiswa"); ?>
                                        </li>-->
                                       <li>
                                        <?php echo anchor('hasil_nilai_mahasiswa',"<i class='fa fa-angle-double-right'></i> Nilai Mahasiswa"); ?>
                                        </li>
                                         <li>
                                        <?php echo anchor('Nilai_profil1',"<i class='fa fa-angle-double-right'></i> Hitung K-MEANS"); ?>
                                        </li>
										  <!--<li>
                                        <?php echo anchor('Hitung_centroid',"<i class='fa fa-angle-double-right'></i> Nilai Centroid"); ?>
                                        </li>-->
                                        
										
                                    </ul>
                                </li>
							
								
                                <li class="treeview">
                                <a href="#">
                                    <i class="  fa fa-reorder"></i>
                                    <span>Centroid Akhir</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                        <li>
                                        <?php echo anchor('centroid_akhir',"<i class='fa fa-angle-double-right'></i>Centroid Akhir"); ?>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>

								
								
								<li class="treeview">
                                <a href="#">
                                    <i class="fa fa-credit-card"></i>
                                    <span>Hasil Pengelompokan</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                    <ul class="treeview-menu">
                                        <li>
                                        <?php echo anchor('hasil',"<i class='fa fa-angle-double-right'></i>Hasil Pengelompokan"); ?>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>

                                                           

                            <?php } else if($this->session->userdata('bagian') == 'direktur'){ ?>
                                <li>
                                    <?php echo anchor('hasil',"<i class='fa fa-credit-card'></i> <span>Hasil Pengelompokan</span>"); ?>
                                </li>

                            <?php } else if($this->session->userdata('bagian') == 'karyawan'){ ?>
                                <li>
                                    <?php echo anchor('absensi',"<i class='fa fa-user'></i> <span>Data Absensi</span>"); ?>
                                    <?php echo anchor('gaji',"<i class='fa fa-dollar'></i> <span>Data Gaji</span>"); ?>
                                </li>
							<?php } else if($this->session->userdata('bagian') == 'peserta'){ ?>
                                <li>
                                    <?php echo anchor('absensi',"<i class='fa fa-user'></i> <span>Data Absensi</span>"); ?>
                                    <?php echo anchor('gaji',"<i class='fa fa-dollar'></i> <span>Data Gaji</span>"); ?>
									<?php echo anchor('peserta',"<i class='fa fa-angle-double-right'></i>Data Peserta"); ?>
									<a href="<?php echo base_url(); ?>jawaban/daftar" onclick="return confirm(' Apakah anda sudah siap mengikuti ujian ini?');">
									<i class="fa fa-users"></i>
                                    <span>Soal </span>
									</a>
                                </li>
                            <?php } ?>
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
                        