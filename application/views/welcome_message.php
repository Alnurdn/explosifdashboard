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
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                            Dashboard <small>Competition Web Portal</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- Content -->
                <div class="text-center">
                    <h3>Selamat Datang di Web Portal Lomba Explosif 2015</h3>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-laptop fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Software Development</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/softwarecont/";?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-bar-chart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Start Up Business</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/bisniscont/";?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-group fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Tugas Besar</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url()."index.php/tubescont/";?>">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3><small>Presented By:</small></h3>
                    </div>
                    <div class="col-lg-4">
                        <img width=80 height=110 src='<?php echo base_url()."assets/"; ?>/img/logo/telu.png'>
                    </div>
                    <div class="col-lg-4">
                        <img width=110 height=110 src='<?php echo base_url()."assets/"; ?>/img/logo/himaif.png'>
                    </div>
                    <div class="col-lg-4">
                        <img width=105 height=110 src='<?php echo base_url()."assets/"; ?>/img/logo/explosif.png'>
                    </div>
                    <div class="col-lg-12">
                        <h3><small>Supported By:</small></h3>
                    </div>
                    <div class="col-lg-6">
                        <img width=110 height=90 src='<?php echo base_url()."assets/"; ?>/img/sponsor/bdv.png'>
                    </div>
                    <div class="col-lg-6">
                        <a href="http://idcloudhost.com">
                            <img width=110 height=90 src='<?php echo base_url()."assets/"; ?>/img/sponsor/cloudhost.png'>
                        </a>
                    </div>
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
