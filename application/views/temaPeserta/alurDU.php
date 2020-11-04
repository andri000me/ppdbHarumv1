<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>HARUM</title>
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

    <!-- Sweet Alert Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url('vendor/adminbsb') ?>/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url('vendor/adminbsb') ?>/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?= base_url('vendor/adminbsb') ?>/index.html"><?= $_SESSION['nama'] ?></a>
            </div>

        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <?php $this->load->view('temaPeserta/side');  ?>


    </section>

    <section class="content">
        <div class="container-fluid">

            <!-- Basic Example | Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2><?= $judul ?></h2>

                        </div>
                        <div class="body">
                            <div id="wizard_horizontal">
                                <h2>Cek Rincian</h2>
                                <section>
                                    <p style="font-size: 30px">
                                        Cek Rincian Daftar Ulang yang Tertera Sebelumnya, Jika ada yang kurang jelas bisa ditanyakan di sekolah.
                                    </p>
                                </section>

                                <h2>Transfer</h2>
                                <section>
                                    <p style="font-size: 30px">
                                        Lakukan Transfer dengan Nominal yang sesuai seperti di Rincian sebelumnya.
                                        Transfer ke No. Rek.<b> 4441234007</b>.
                                        a/n : Sekolah Dasar Islam Terpadu Harapan Umat
                                    </p>
                                </section>

                                <h2>Confirm</h2>
                                <section>
                                    <p style="font-size: 30px">
                                        Setelah melakukan transfer, Lakukan konfirmasi ke <br>nomor <b> 081 335 122 672</b>. dengan format sbb:<br>
                                        <hr>
                                        Nama_Pengirim (spasi) Rp_Nominal (spasi) Tanggal (spasi) nama_siswa
                                    </p>
                                </section>

                                <h2>Batas</h2>
                                <section>
                                    <p style="font-size: 30px">
                                        Batas Daftar Ulang Maksimal hingga<b> 14 Maret 2020.</b>
                                        bagi yang tidak melakukan daftar ulang hingga waktu yang telah di tentukan, maka kami nyatakan mengundurkan diri.
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Horizontal Layout -->


    </section>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/js/admin.js"></script>
    <script src="<?= base_url('vendor/adminbsb') ?>/js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="<?= base_url('vendor/adminbsb') ?>/js/demo.js"></script>
</body>

</html>