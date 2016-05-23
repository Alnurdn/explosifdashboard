<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Competition Web Portal EXPLOSIF Telkom University</title>
    <meta name="description" content="Portal lomba software development, start up business dan tugas besar terbaik EXPLOSIF Telkom University">
    <meta name="keywords" content="explosif, informatika, telkom, university">
    <meta name="author" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/"; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()."assets/"; ?>/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()."assets/"; ?>/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/"; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.explosiftelkomuniversity.com/">EXPLOSIF 2015</a>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/softwarecont/";?>"><i class="fa fa-fw fa-laptop"></i> Software Development</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/bisniscont/";?>"><i class="fa fa-fw fa-bar-chart"></i> Start Up Business</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-group"></i> Tugas Besar</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file-text"></i> Registrasi <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url()."index.php/softwareregcont/";?>">Software Development</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."index.php/bisnisregcont/";?>">Start Up Business</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."index.php/tubesregcont/";?>">Tugas Besar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/timelinecont/";?>"><i class="fa fa-fw fa-calendar"></i> Timeline</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tugas Besar <small>Lomba Explosif 2015</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-group"></i> Tugas Besar
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- Content -->
                <div>
                    <p align="right"><button type="button" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o"></i> Download as PDF</button></p>
                    <h3 align="center">Deskripsi</h3>
                    <p></p>
                    <h3 align="center">Syarat dan Ketentuan Lomba</h3>
                    <p>1. Peserta merupakan mahasiswa angkatan 2012, 2013 dan 2014 Fakultas Informatika yaitu S1 Teknik Informatika, dan S1 Ilmu Komputer Universitas Telkom</p>
                    <p>2. Peserta adalah mahasiswa berstatus resmi yang dibuktikan dengan Kartu Tanda Mahasiswa yang masih berlaku atau Surat Keterangan Resmi dari perguruan tinggi</p>
                    <p>3. Peserta merupakan kelompok yang terdiri dari maksimal 3 orang dan dipimpin oleh seorang ketua.</p>
                    <p>4. Tidak berupa hasil plagiat</p>

                    <h3 align="center">Kriteria Penilaian</h3>
                    <p>1. Kelengkapan Proposal</p>
                    <p>2. Kelengkapan poster </p>
                    <p>3. Inovatif dan kreatif</p>
                    <p>4. Berkaitan dengan informatika</p>
                    <p>5. Bermanfaat bagi masyarakat </p>

                    <h3 align="center">Bentuk Lomba</h3>
                    <p>1. Online</p>
                    <p style="margin-left:2em;">Peserta mengirim proposal TUBES ke email panitia dengan alamat email lomba@explosiftelkomuniversity.com Lalu dipilih 2 tim terbaik dari angkatan 2012, 2 tim dari angkatan 2013, dan 2 tim dari angkatan 2014 dari jurusan IF dan IK dengan total 12 tim proposal untuk maju ke final. Penilaian akan dilakukan oleh 2 juri, 1 juri untuk jurusan Teknik Informatika, 1 juri untuk jurusan Ilmu Komunikasi. Isi proposal haruslah lengkap, mengikuti aturan pengajuan proposal resmi yang meliputi</p>
                    <p style="margin-left:5em;">Judul tubes</p>
                    <p style="margin-left:5em;">Latar belakang</p>
                    <p style="margin-left:5em;">Tujuan dan Manfaat</p>
                    <p style="margin-left:5em;">Batasan</p>
                    <p style="margin-left:5em;">Metode</p>
                    <p style="margin-left:5em;">Analisa dan Desain</p>
                    <p style="margin-left:5em;">Implementasi</p>
                    <p style="margin-left:5em;">Show Case </p>
                    <p style="margin-left:5em;">Dokumentasi</p>
                    <p>2. Babak Final</p>
                    <p style="margin-left:2em;">Dalam babak final peserta diwajibkan membuat poster untuk dipajang pada acara expo, lalu poster tersebut akan dinilai berdasarkan penilaian juri dan pengunjung expo yang nantinya akan dipilih 1 tim terbaik dari angkatan 2012, 1 tim terbaik dari angkatan 2013 dan 1 tim terbaik dari angkatan 2014 dari jurusan IF dan IK dengan total 6 tim</p>    
                    
                    <h3 align="center">Tata Cara Pendaftaran</h3>
                    <p>1. Peserta lomba terlebih dahulu melakukan registrasi di alamat yang disediakan</p>
                    <p>2. Peserta tidak akan dipungut biaya</p>
                    <p>3. Kirimkan data lengkap peserta ke email panitia:</p>
                    <p>4. Sertakan data peserta  lomba</p>
                    <p style="margin-left:5em;">-Nama Lomba         </p>
                    <p style="margin-left:5em;">-Nama Tim       </p>
                    <p style="margin-left:5em;">-Nama Ketua </p>
                    <p style="margin-left:5em;">-Nama Anggota   </p>    
                    <p style="margin-left:5em;">-CP ketua       </p>
                    <p>5. Kirim data tersebut ke alamat e-mail lomba@explosiftelkomuniversity.com dengan subjek [KONFIRMASI]_[NAMA TIM]_[NAMA KETUA]_[NAMA LOMBA]</p>
                    <p>6. Setelah mengirimkan email tunggu hingga panitia mengirimkan balasan  konfirmasi bahwa peserta sudah terdaftar</p>
                    <p>7. Peserta yang terpilih menjadi finalis akan diumumkan pada waktu berikutnya</p>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/"; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/"; ?>/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()."assets/"; ?>/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>/js/plugins/morris/morris-data.js"></script>

</body>

</html>
