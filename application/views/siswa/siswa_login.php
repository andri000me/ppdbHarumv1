<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB HARUM</title>

    <!-- Font Awesome Icons -->
    <link href="<?= base_url('vendor/landinguser/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?= base_url('vendor/landinguser/') ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="<?= base_url('vendor/landinguser/') ?>css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">PPDB HARUM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Mou">Mou</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Dokumen">Dokumen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Alur">Alur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Pengumuman">Pengumuman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h3 class="text-uppercase text-white font-weight-bold">Assalamualaikum Wr Wb</h3>
                    <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">
                        Selamat datang di Aplikasi Penerimaan Peserta Didik Baru.
                        <!--    <br>Untuk dapat melakukan Pendaftaran, Pastikan anda telah Membayar biaya pendaftaran sebesar <b style="color:orange;">Rp. 300.000</b> melalui transfer ke BNI Syari’ah no. <h3><b style="color:orange;">4441234007 </b></h3> <i style="color:white;">a/n Sekolah Dasar Islam Terpadu Harapan Umat</i> </p>-->
                        <!--<p style="color:white;">Jika telah melakukan transfer, konfirmasi di link berikut</p>-->
                        <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="https://api.whatsapp.com/send?phone=6281335122672&text=Assalamualaikum bu, Saya telah transfer 300rb. dengan Nama Pengirim ... dan dengan bukti transfer di bawah ini. Mohon kesediaannya memberikan akses pendaftaran. terimakasih. " target="_blank">KONFIRMASI</a>-->
                        <hr>
                        <br>
                        <p style="font-size:30px;color:white;">ALHAMDULILLAH, TAHAP SELEKSI TELAH SELESAI. SILAHKAN LOGIN UTK MELIHAT HASIL SELEKSI</p>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="page-section bg-primary" id="login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Selanjutnya, Login !</h2>
                    <hr class="divider light my-4">
                    <p style="color:white;">Masukan Username dan Password yang diberikan admin </p>
                    <form class="login100-form validate-form" action="<?php echo base_url('index.php/siswa/aksi_login'); ?>" method="post">

                        <?= $this->session->flashdata('message'); ?>
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                            <input class="form-control text-center" type="text" name="nama" placeholder="username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                        <br>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="form-control text-center" type="password" name="pess" placeholder="password">
                            <input type="hidden" name="is_active" value="0" />
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <hr>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="btn btn-light btn-xl js-scroll-trigger">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <section class="page-section bg-secondary" id="Mou">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Selanjutnya</h2>
                    <hr class="divider light my-4">
                    <p class="text-white-50 mb-4">SETELAH ANDA BERHASIL MENDAFTAR DAN CETAK KARTU PESERTA,<br> Pastikan juga anda mencetak lembar MOU berikut :
                    </p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="http://sditharum.id/wp-content/uploads/2019/10/SURAT-PERNYATAAN.pdf" target="_blank">CETAK MOU</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="Dokumen">
        <div class="container">
            <h2 class="text-center mt-0">Siapkan Dokumen Berikut</h2>
            <hr class="divider my-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Fotocopy Akte Kelahiran</h3>
                        <p class="text-muted mb-0">(1 Lembar)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Fotokopi Kartu Keluarga (KK)</h3>
                        <p class="text-muted mb-0">(1 Lembar)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Pas Foto 3×4 </h3>
                        <p class="text-muted mb-0">(3 lembar)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Lembar MOU</h3>
                        <p class="text-muted mb-0"> yang telah diisi lengkap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Section -->
    <section class="page-section bg-dark text-white" id="Jadwal">
        <div class=" container text-center">
            <h2 class="mb-4">Jadwal PPDB</h2>
            <p>Setelah semua dilengkapi, Ikutilah Psikotes yang diadakan<b> Sabtu, 8 Februari 2020.</b><br>
                berikut jadwal selengkapnya :
                <br>
                <table class="table" style="color:white;" border="2px;">
                    <tr>
                        <th>No</th>
                        <th>Info. Pendaftaran</th>
                        <th>Ket</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pendaftran PPDB</td>
                        <td>1 November 2019 s.d 31 Januari 2020</td>
                    </tr>

                    <tr>
                        <td>2 </td>
                        <td>Psikotest dan Test Observasi </td>
                        <td>Sabtu, 8 Februari 2020 | Jam 07.30 WIB.</td>
                    </tr>

                    <tr>
                        <td>3 </td>
                        <td>Tes Wawancara kedua orangtua </td>
                        <td>Sabtu, 8 Februari 2020 | Jam 07.30 WIB.</td>
                    </tr>

                    <tr>
                        <td>4 </td>
                        <td>Pengumuman hasil seleksi PPDB </td>
                        <td>Sabtu, 7 Maret 2020</td>
                    </tr>

                    <tr>
                        <td>5 </td>
                        <td>Daftar Ulang </td>
                        <td>7 s.d 14 Maret 2020</td>
                    </tr>

                    <tr>
                        <td>6 </td>
                        <td>Fitting Seragam </td>
                        <td>Sabtu, 21 Maret 2020 (pukul 08.00-12.00)</td>
                    </tr>

                    <tr>
                        <td>7 </td>
                        <td>Pengambilan Seragam & Tes Jilid Mengaji </td>
                        <td>Jum’at-Sabtu, 3-4 Juli 2020 (pukul 08.00-12.00)</td>
                    </tr>

                </table>



        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="Alur">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Alur Pendaftaran</h2>
                    <hr class="divider my-4">
                    <img class="img-responsive" width="100%" src="<?= base_url('assets/alur.png') ?>" alt="">
                </div>
            </div>

        </div>
    </section>
    <section class="page-section" id="Pengumuman">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Pengumuman</h2>
                    <hr class="divider my-4">

                    <?php
                    foreach ($jmlkuota as $kuota) : ?>
                        <?php $jmlkuota = $kuota['nilai']; ?>
                        <?php $pendaftar = $jmlkuota - $total_rows ?>

                        <br>
                        "Belum ada Pengumuman Informasi Siswa Diterima"
                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2019 - HARUM</div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('vendor/landinguser/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('vendor/landinguser/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('vendor/landinguser/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('vendor/landinguser/') ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= base_url('vendor/landinguser/') ?>js/creative.min.js"></script>

</body>

</html>