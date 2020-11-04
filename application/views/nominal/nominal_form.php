<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 align-center">
                        <h2>FORM</h2>
                    </div>
                </div>
            </div>
            <div class="body responsive">

                <form action="<?php echo $action; ?>" method="post">
                    <div class="form-group">
                        <div class="demo-radio-button">
                            <?php $k = $this->db->get('kategori')->result_array() ?>
                            <?php foreach ($k as $k) : ?>
                                <input name="id_kategori" type="radio" id="<?= $k['id_kategori'] ?>" class="radio-col-red" value="<?= $k['id_kategori'] ?>" />
                                <label for="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></label>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="text" class="form-control" name="infaq_gedung" id="infaq_gedung" placeholder="Infaq Gedung" value="<?php echo $infaq_gedung; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="infaq_perpustakaan" id="infaq_perpustakaan" placeholder="Infaq Perpustakaan" value="<?php echo $infaq_perpustakaan; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="infaq_kegiatan" id="infaq_kegiatan" placeholder="Infaq Kegiatan" value="<?php echo $infaq_kegiatan; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="buku_dan_media_pembelajaran" id="buku_dan_media_pembelajaran" placeholder="Buku Dan Media Pembelajaran" value="<?php echo $buku_dan_media_pembelajaran; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="seragam_dan_attribut_sekolah" id="seragam_dan_attribut_sekolah" placeholder="Seragam Dan Attribut Sekolah" value="<?php echo $seragam_dan_attribut_sekolah; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jilbab" id="jilbab" placeholder="Jilbab" value="<?php echo $jilbab; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pendidikan_infaq_pengembangan" id="pendidikan_infaq_pengembangan" placeholder="Pendidikan Infaq Pengembangan" value="<?php echo $pendidikan_infaq_pengembangan; ?>" />
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('nominal') ?>" class="btn btn-default">Cancel</a>
                </form>
                </body>

                </html>