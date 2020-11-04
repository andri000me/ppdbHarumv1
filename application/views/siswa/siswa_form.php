<?php
// Proteksi halaman
$this->simple_login->cek_login_siswa();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulir Pendaftaran</title>

    <link rel="stylesheet" href="<?= base_url('vendor/formulir/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('vendor/formulir/') ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('vendor/formulir/') ?>assets/css/form-elements.css">
    <link rel="stylesheet" href="<?= base_url('vendor/formulir/') ?>assets/css/stylee.css">
    <link rel="stylesheet" href="<?= base_url('vendor/formulir/') ?>assets/css/bootstrap-datetimepicker.min.css">


</head>

<body>
    <div class="progress fixed-bottom">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%">25%</div>
    </div>

    <!-- Top Content -->
    <div class="container-login100" style="background-image: url('<?= base_url('vendor/formulir/') ?>assets/img/1.jpg');">
        <div class="top-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text">
                        <h1><strong>PENDAFTARAN SISWA BARU</strong></h1>
                        <h1>SDIT Harapan Umat Jember</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 form-box">

                        <form role="form" action="<?= base_url('index.php/siswa/daftar') ?>" method="post" class="registration-form">


                            <fieldset>
                                <div class="form-top">

                                    <div class="progress fixed-bottom">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%">25%</div>
                                    </div>
                                    <h3><strong>Data Calon Siswa Baru</strong>
                                    </h3>

                                    <div class="form-bottom">
                                        <div class="form-group">
                                            <label for="namalengkap">Nama Lengkap</label>
                                            <input id="namalengkap" name="namalengkap" type="text" class="form-control">
                                            <input type="hidden" name="is_active" value="1" />

                                            <input type="hidden" name="us" value="<?php echo $_SESSION['nama'] ?>" />
                                            <input type="hidden" name="ps" value="<?php echo $_SESSION['pess'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="namapanggilan">Nama Panggilan</label>
                                            <input id="namapanggilan" name="namapanggilan" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="asalsekolah">Asal Sekolah</label>
                                            <input id="asalsekolah" name="asalsekolah" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="jeniskelamin">Jenis Kelamin</label>
                                            <select id="jeniskelamin" name="jeniskelamin" class="custom-select">
                                                <option value="laki-laki">Laki-Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="tempatlahir">Tempat Lahir</label>
                                            <input id="tempatlahir" name="tempatlahir" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="date-input">Tanggal Lahir</label>
                                            <input name="tanggallahir" type='text' class="form-control" id='datetimepicker' placeholder="hari/bulan/tahun" />
                                        </div>

                                        <div class="form-group">
                                            <label for="berkebutuhankhusus">Berkebutuhan Khusus</label>
                                            <select id="berkebutuhankhusus" name="berkebutuhankhusus" class="custom-select">
                                                <option>Tidak</option>
                                                <option>Netra</option>
                                                <option>Rungu</option>
                                                <option>Grahita ringan</option>
                                                <option>Grahita sedang</option>
                                                <option>Daksa ringan</option>
                                                <option>Daksa sedang</option>
                                                <option>Laras</option>
                                                <option>Wicara</option>
                                                <option>Tuna Ganda</option>
                                                <option>Hiperaktif</option>
                                                <option>Cerdas Istimewa</option>
                                                <option>Bakat Istimewa</option>
                                                <option>Kesulitan Belajar</option>
                                                <option>Indigo</option>
                                                <option>Down Syndrome</option>
                                                <option>Autis</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="alamatlengkap">Alamat Lengkap</label>
                                            <textarea id="alamatlengkap" name="alamatlengkap" cols="40" rows="5" class="form-control"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="select">Tempat Tinggal</label>
                                            <select id="select" name="tempattinggal" class="custom-select">
                                                <option>Bersama orangtua </option>
                                                <option>Wali</option>
                                                <option>Kos</option>
                                                <option>Asrama</option>
                                                <option>Panti Asuhan</option>
                                                <option>Lainnya</option>
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-top">

                                    <div class="progress fixed-bottom">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                                    </div>

                                    <h3><strong>Data Ayah Kandung</strong></h3>
                                </div>

                                <div class="form-bottom">
                                    <div class="form-group">
                                        <label for="namaayah">Nama Ayah Kandung</label>
                                        <input id="namaayah" name="namaayah" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="pendidikanayah">Pendidikan Ayah</label>
                                        <select id="pendidikanayah" name="pendidikanayah" class="custom-select">
                                            <option>Tidak Sekolah</option>
                                            <option>Putus SD</option>
                                            <option>SD Sederajat</option>
                                            <option>SMP Sederajat</option>
                                            <option>SMA Sederajat</option>
                                            <option>D1</option>
                                            <option>D2</option>
                                            <option>D3</option>
                                            <option>D4/S1</option>
                                            <option>S2</option>
                                            <option>S3</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaanayah">Pekerjaan Ayah</label>
                                        <select id="pekerjaanayah" name="pekerjaanayah" class="custom-select">
                                            <option>Tidak Bekerja</option>
                                            <option>Nelayan</option>
                                            <option>Petani</option>
                                            <option>Peternak</option>
                                            <option>PNS/TNI/Polri</option>
                                            <option>Karyawan Swasta</option>
                                            <option>Pedagang Kecil</option>
                                            <option>Pedagang Besar</option>
                                            <option>Wiraswasta</option>
                                            <option>Wirausaha</option>
                                            <option>Buruh</option>
                                            <option>Pensiunan</option>
                                            <option>Tenaga Kerja Indonesia</option>
                                            <option>Tidak dapat diterapkan</option>
                                            <option>Sudah Meninggal</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="penghasilanayah">Penghasilan Ayah</label>
                                        <select id="penghasilanayah" name="penghasilanayah" class="custom-select">
                                            <option">kurang dari Rp. 1.000.000</option>
                                                <option>Rp. 1.000.000 - Rp. 2.000.000</option>
                                                <option>lebh dari Rp. 2.000.000</option>
                                                <option>kurang dari Rp. 500.000</option>
                                                <option>Rp. 500.000 - Rp. 999.000</option>
                                                <option>Rp. 1.000.000 - Rp. 1.999.000</option>
                                                <option>Rp. 2.000.000 - Rp. 4.999.000</option>
                                                <option>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                <option>Lebih dari Rp. 20.000.000</option>
                                                <option>Tidak berpenghasilan</option>
                                                <option>Lainnya</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-top">

                                    <div class="progress fixed-bottom">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                    </div>

                                    <h3><strong>Data Ibu Kandung</strong></h3>
                                </div>
                                <div class="form-bottom">

                                    <div class="form-group">
                                        <label for="namaibu">Nama Ibu Kandung</label>
                                        <input id="namaibu" name="namaibu" type="text" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label for="pendidikanibu">Pendidikan Ibu</label>
                                        <select id="pendidikanibu" name="pendidikanibu" class="custom-select">
                                            <option>Tidak Sekolah</option>
                                            <option>Putus SD</option>
                                            <option>SD Sederajat</option>
                                            <option>SMP Sederajat</option>
                                            <option>SMA Sederajat</option>
                                            <option>D1</option>
                                            <option>D2</option>
                                            <option>D3</option>
                                            <option>D4/S1</option>
                                            <option>S2</option>
                                            <option>S3</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaanibu">Pekerjaan Ibu</label>
                                        <select id="pekerjaanibu" name="pekerjaanibu" class="custom-select">
                                            <option>Tidak Bekerja</option>
                                            <option>Nelayan</option>
                                            <option>Petani</option>
                                            <option>Peternak</option>
                                            <option>PNS/TNI/Polri</option>
                                            <option>Karyawan Swasta</option>
                                            <option>Pedagang Kecil</option>
                                            <option>Pedagang Besar</option>
                                            <option>Wiraswasta</option>
                                            <option>Wirausaha</option>
                                            <option>Buruh</option>
                                            <option>Pensiunan</option>
                                            <option>Tenaga Kerja Indonesia</option>
                                            <option>Tidak dapat diterapkan</option>
                                            <option>Sudah Meninggal</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="penghasilanibu">Penghasilan Ibu</label>
                                        <select id="penghasilanibu" name="penghasilanibu" class="custom-select">
                                            <option>kurang dari Rp. 1.000.000</option>
                                            <option>Rp. 1.000.000 - Rp. 2.000.000</option>
                                            <option>lebh dari Rp. 2.000.000</option>
                                            <option>kurang dari Rp. 500.000</option>
                                            <option>Rp. 500.000 - Rp. 999.000</option>
                                            <option>Rp. 1.000.000 - Rp. 1.999.000</option>
                                            <option>Rp. 2.000.000 - Rp. 4.999.000</option>
                                            <option>Rp. 5.000.000 - Rp. 20.000.000</option>
                                            <option>Lebih dari Rp. 20.000.000</option>
                                            <option>Tidak berpenghasilan</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>


                            <fieldset>
                                <div class="form-top">

                                    <div class="progress fixed-bottom">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 95%">95%</div>
                                    </div>

                                    <h3><strong>Data Kontak</strong></h3>
                                </div>
                                <div class="form-bottom">
                                    <div class="form-group">
                                        <label for="nomorteleponayah">Nomor Telpon Ayah</label>
                                        <input class="form-control" id="nomorteleponayah" name="nomorteleponayah" type="number">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomorteleponibu">Nomor Telpon Ibu</label>
                                        <input id="nomorteleponibu" name="nomorteleponibu" type="number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input id="email" name="email" type="email" class="form-control" placeholder="xxxxx@xxxxx.com">
                                    </div>

                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Kirim
                                    </button>
                                </div>
                            </fieldset>



                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda sudah yakin data telah dimasukkan dengan benar ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
                </form>

                <!-- Javascript -->
                <script src="<?= base_url('vendor/formulir/') ?>assets/js/jquery-1.11.1.min.js"></script>
                <script src="<?= base_url('vendor/formulir/') ?>assets/js/bootstrap.min.js"></script>
                <script src="<?= base_url('vendor/formulir/') ?>assets/js/jquery.backstretch.min.js"></script>
                <script src="<?= base_url('vendor/formulir/') ?>assets/js/bootstrap-datetimepicker.min.js"></script>
                <script src="<?= base_url('vendor/formulir/') ?>assets/js/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
                <script src="<?= base_url('vendor/formulir/') ?>assets/js/scripts.js"></script>


</body>

</html>