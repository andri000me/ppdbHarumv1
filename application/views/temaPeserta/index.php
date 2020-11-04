<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?= $judul ?></h2>
        </div>
        <div class="row clearfix">
            <!-- Visitors -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card text-center">
                    <div class="body bg-<?= $color ?>">
                        <span class="badge badge-danger">ALHAMDULILLAH</span><br>
                        <h1>SELAMAT, <?= $_SESSION['nama'] ?> .</h1>
                        <p style="font-size: 24px">Anda Dinyatakan <br> <span class="badge badge-danger">LULUS</span></p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="<?= base_url('siswa/rincianDaftarUlang') ?>" class="btn btn-primary">SELANJUTNYA</a>
                </div>
            </div>
        </div>
    </div>
</section>