<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="<?=url('/')?>/img/logo.png" type="image/icon type">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/summernote/summernote-bs4.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?=url('/')?>/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="<?=url('/')?>/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="<?=url('/')?>/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">SIMOPEL-Riau</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Admin Pelabuhan</a>
                    <a href="#" class="d-block">{{$user->nama_pelabuhan}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="<?=url('/')?>/pelabuhan/home" class="{{ Request::is ('pelabuhan/home') ? 'active' : '' }} nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=url('/')?>/pelabuhan/profil" class="{{ Request::is ('pelabuhan/profil') ? 'active' : '' }} nav-link">
                            <i class="nav-icon fas fa-store"></i>
                            <p>
                                Profil Pelabuhan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{
                Request::is ('pelabuhan/operasional') ? 'menu-open' : '' ||
                Request::is ('pelabuhan/bongkarmuat') ? 'menu-open' : '' ||
                Request::is ('pelabuhan/pajak&RetribusiDaerah') ? 'menu-open' : ''
                }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                Data Master
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?=url('/')?>/pelabuhan/operasional" class="nav-link {{ Request::is ('pelabuhan/operasional') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Operasional</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=url('/')?>/pelabuhan/bongkarmuat" class="nav-link {{ Request::is ('pelabuhan/bongkarmuat') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bongkar Muat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=url('/')?>/pelabuhan/pajak&RetribusiDaerah" class="nav-link {{ Request::is ('pelabuhan/pajak&RetribusiDaerah') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pajak Dan Retribusi Daerah</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{
                        Request::is ('pelabuhan/suratMasuk') ? 'menu-open' : '' ||
                        Request::is ('pelabuhan/suratKeluar') ? 'menu-open' : ''
                        }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Surat
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?=url('/')?>/pelabuhan/suratMasuk" class="nav-link {{ Request::is ('pelabuhan/suratMasuk') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=url('/')?>/pelabuhan/suratKeluar" class="nav-link {{ Request::is ('pelabuhan/suratKeluar') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#logout">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Keluar
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

@yield('container')

<!-- Modal Logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin keluar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                        <a href="<?= url('/') ?>/logout"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Logout -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 <a href="#">PT. Magsindo Kreasi Multimedia</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.2
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=url('/')?>/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=url('/')?>/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- DataTables -->
<script src="<?=url('/')?>/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=url('/')?>/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=url('/')?>/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=url('/')?>/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=url('/')?>/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=url('/')?>/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=url('/')?>/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=url('/')?>/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=url('/')?>/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?=url('/')?>/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=url('/')?>/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=url('/')?>/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=url('/')?>/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?=url('/')?>/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=url('/')?>/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=url('/')?>/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=url('/')?>/adminlte/dist/js/demo.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<script>
    //Date picker
    $('#pickbulan').datepicker({
        autoclose: true,
        format: 'mm-yyyy',
        viewMode: 'months',
        minViewMode: 'months'
    })
</script>
<script>
    //Date picker
    $('#picktahun').datepicker({
        autoclose: true,
        format: 'yyyy',
        viewMode: 'years',
        minViewMode: 'years'
    })
</script>
<?php if ((Request::is ('pelabuhan/home')) == true){ ?>
<script>
    $(function () {

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------
        var areaChartData = {
            labels: [
                'Januari', 'Februari', 'Maret', 'April', 'Mei',
                'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'],
            datasets: [
                {
                    label: 'Operasional',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [
                        {{count($ope[0])}},
                        {{count($ope[1])}},
                        {{count($ope[2])}},
                        {{count($ope[3])}},
                        {{count($ope[4])}},
                        {{count($ope[5])}},
                        {{count($ope[6])}},
                        {{count($ope[7])}},
                        {{count($ope[8])}},
                        {{count($ope[9])}},
                        {{count($ope[10])}},
                        {{count($ope[11])}},
                    ]
                },
                {
                    label: 'Bongkar Muat',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [
                        {{count($bm[0])}},
                        {{count($bm[1])}},
                        {{count($bm[2])}},
                        {{count($bm[3])}},
                        {{count($bm[4])}},
                        {{count($bm[5])}},
                        {{count($bm[6])}},
                        {{count($bm[7])}},
                        {{count($bm[8])}},
                        {{count($bm[9])}},
                        {{count($bm[10])}},
                        {{count($bm[11])}},
                    ]
                },
            ]
        }

        // This will get the first returned node in the jQuery collection.
        var barChartCanvas = $('#barChart').get(0).getContext('2d')

        //-------------
        //- BAR CHART -
        //-------------

        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

    })
</script>
<?php } ?>
</body>
</html>
