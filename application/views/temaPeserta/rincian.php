<?php
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
} ?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header  bg-green">
                        <h2>
                            <?= $judul ?>
                        </h2>

                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td scope="row">Infaq Gedung</th>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->infaq_gedung) ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Infaq Perpustakaan</th>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->infaq_perpustakaan) ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Infaq Kegiatan</th>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->infaq_kegiatan) ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Buku & Media Pembelajaran</th>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->buku_dan_media_pembelajaran) ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Seragam dan Attribut Sekolah</th>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->seragam_dan_attribut_sekolah) ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Jilbab</th>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->jilbab) ?></td>
                                </tr>
                                <tr>
                                    <td scope="row">Pendidikan (IPP) Infaq Pengembangan</td>
                                    <th scope="row">:</th>
                                    <td><?= rupiah($rdu->pendidikan_infaq_pengembangan) ?></td>
                                </tr>
                                <tr style="background: gray; color:white;">
                                    <th style="font-size:17px">TOTAL</th>
                                    <th style="font-size:17px">:</th>
                                    <th style="font-size:17px"><?= rupiah($rdu->total) ?></th>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="text-center">
                    <a href="<?= base_url('siswa/alurDaftarUlang') ?>" class="btn btn-primary">SELANJUTNYA</a>
                </div>
            </div>
        </div>
    </div>
</section>