<?php
// Proteksi halaman
$this->simple_login->cek_login_siswa();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>mmm</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url('vendor/adminbsb') ?>/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/css/style.css" rel="stylesheet">


</head>

<body class="theme-green" >
        <div class="container-fluid" >
            <div class="row">
                <div>
                    <div class="card text-center body bg-green">
                        <div class="header">
                            <h1 style="color:white;">SELAMAT !</h1>
                            <p style="color:white;">Anda Berhasil Mendaftar</p>
                        </div>
                    </div>
                </div>
          </div>

               
                    <div class="card my-auto mx-auto" style="height: 100%;">
                        <div class="body bg-green">
                            <div style="padding:150px" class="text-center">
                                <h3>CETAK <br>KARTU PESERTA</h3><br>
                                <?php echo anchor(site_url('data_siswa/pdf/' . $_SESSION['nama']), '<button type="button" class="btn btn-primary waves-effect">CETAK</button>'); ?>
                            </div>
                        </div>
                    </div>
          

            <!-- Jquery Core Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/bootstrap/js/bootstrap.js"></script>

            <!-- Select Plugin Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

            <!-- Slimscroll Plugin Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

            <!-- Bootstrap Notify Plugin Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/bootstrap-notify/bootstrap-notify.js"></script>

            <!-- Waves Effect Plugin Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/node-waves/waves.js"></script>

            <!-- SweetAlert Plugin Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/plugins/sweetalert/sweetalert.min.js"></script>

            <!-- Custom Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/js/admin.js"></script>
            <script src="<?= base_url('vendor/adminbsb') ?>/js/pages/ui/dialogs.js"></script>

            <!-- Demo Js -->
            <script src="<?= base_url('vendor/adminbsb') ?>/js/demo.js"></script>
</body>

</html>