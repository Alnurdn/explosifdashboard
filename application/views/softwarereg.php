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
                    <li>
                        <a href="<?php echo base_url()."index.php/tubescont/";?>"><i class="fa fa-fw fa-group"></i> Tugas Besar</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file-text"></i> Registrasi <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li class="active">
                                <a href="#">Software Development</a>
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
                            Registrasi <small>Software Development</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text"></i> Registrasi
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-lg-6">
                    <form method="post" action="<?php echo base_url()."index.php/softwareregcont/add_software_process"; ?>" role="form">
                        <div class="form-group">
                            <label>Nama Tim</label>
                            <input name="tim" class="form-control" placeholder="Nama Tim">
                        </div>
                        <div class="form-group">
                            <label>Nama Ketua</label>
                            <input name="ketua" class="form-control" placeholder="Nama Ketua">
                        </div>
                        <div class="form-group">
                            <label>Nama Anggota</label>
                            <input name="anggota1" class="form-control" placeholder="Nama Anggota 1">
                            <input name="anggota2" class="form-control" placeholder="Nama Anggota 2">
                            <input name="anggota3" class="form-control" placeholder="Nama Anggota 3">
                        </div>
                        <div class="form-group">
                            <label>Universitas Asal</label>
                            <input name="univ" class="form-control" placeholder="Universitas Asal">
                        </div>
                        <div class="form-group">
                            <label>Contact Person Ketua</label>
                            <input name="cp" class="form-control" placeholder="Contact Person Ketua">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div align="right">
                            <input name="Submit" class="btn btn-default" type="submit" value="Submit">
                        </div>  
                    </form>
                </div>
                <div class="col-lg-6">
                    <p></p>
                    <p></p>
                    <p>*Isi data registrasi secara lengkap</p>
                    <p>*Konfirmasi bukti transfer dengan mengirim e-mail ke lomba@explosiftelkomuniversity.com dengan format [KONFIRMASI]_[NAMA TIM]_[NAMA KETUA]_[NAMA LOMBA]</p>
                    <p>*Tunggu email balasan konfirmasi dari panitia</p>
                    <p>*Kirimkan file proposal dalam bentuk .pdf ke lomba@explosiftelkomuniversity.com dengan format [PROPOSAL]_[NAMA LOMBA]_[NAMA TIM]_[NAMA KETUA]</p>
                    <p>*Contact Person: </p>
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
