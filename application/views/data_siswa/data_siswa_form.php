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
                        <label for="kopes">Kopes <?php echo form_error('kopes') ?></label>
                        <textarea class="form-control" rows="3" name="kopes" id="kopes" placeholder="Kopes"><?php echo $kopes; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="us">Us <?php echo form_error('us') ?></label>
                        <textarea class="form-control" rows="3" name="us" id="us" placeholder="Us"><?php echo $us; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ps">Ps <?php echo form_error('ps') ?></label>
                        <textarea class="form-control" rows="3" name="ps" id="ps" placeholder="Ps"><?php echo $ps; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="varchar">Namalengkap <?php echo form_error('namalengkap') ?></label>
                        <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Namalengkap" value="<?php echo $namalengkap; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Namapanggilan <?php echo form_error('namapanggilan') ?></label>
                        <input type="text" class="form-control" name="namapanggilan" id="namapanggilan" placeholder="Namapanggilan" value="<?php echo $namapanggilan; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Asalsekolah <?php echo form_error('asalsekolah') ?></label>
                        <input type="text" class="form-control" name="asalsekolah" id="asalsekolah" placeholder="Asalsekolah" value="<?php echo $asalsekolah; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="enum">Jeniskelamin <?php echo form_error('jeniskelamin') ?></label>
                        <input type="text" class="form-control" name="jeniskelamin" id="jeniskelamin" placeholder="Jeniskelamin" value="<?php echo $jeniskelamin; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Tempatlahir <?php echo form_error('tempatlahir') ?></label>
                        <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempatlahir" value="<?php echo $tempatlahir; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir">Tanggallahir <?php echo form_error('tanggallahir') ?></label>
                        <textarea class="form-control" rows="3" name="tanggallahir" id="tanggallahir" placeholder="Tanggallahir"><?php echo $tanggallahir; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="varchar">Berkebutuhankhusus <?php echo form_error('berkebutuhankhusus') ?></label>
                        <input type="text" class="form-control" name="berkebutuhankhusus" id="berkebutuhankhusus" placeholder="Berkebutuhankhusus" value="<?php echo $berkebutuhankhusus; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Alamatlengkap <?php echo form_error('alamatlengkap') ?></label>
                        <input type="text" class="form-control" name="alamatlengkap" id="alamatlengkap" placeholder="Alamatlengkap" value="<?php echo $alamatlengkap; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Tempattinggal <?php echo form_error('tempattinggal') ?></label>
                        <input type="text" class="form-control" name="tempattinggal" id="tempattinggal" placeholder="Tempattinggal" value="<?php echo $tempattinggal; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Namaayah <?php echo form_error('namaayah') ?></label>
                        <input type="text" class="form-control" name="namaayah" id="namaayah" placeholder="Namaayah" value="<?php echo $namaayah; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Pendidikanayah <?php echo form_error('pendidikanayah') ?></label>
                        <input type="text" class="form-control" name="pendidikanayah" id="pendidikanayah" placeholder="Pendidikanayah" value="<?php echo $pendidikanayah; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Pekerjaanayah <?php echo form_error('pekerjaanayah') ?></label>
                        <input type="text" class="form-control" name="pekerjaanayah" id="pekerjaanayah" placeholder="Pekerjaanayah" value="<?php echo $pekerjaanayah; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Penghasilanayah <?php echo form_error('penghasilanayah') ?></label>
                        <input type="text" class="form-control" name="penghasilanayah" id="penghasilanayah" placeholder="Penghasilanayah" value="<?php echo $penghasilanayah; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Namaibu <?php echo form_error('namaibu') ?></label>
                        <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder="Namaibu" value="<?php echo $namaibu; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Pendidikanibu <?php echo form_error('pendidikanibu') ?></label>
                        <input type="text" class="form-control" name="pendidikanibu" id="pendidikanibu" placeholder="Pendidikanibu" value="<?php echo $pendidikanibu; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Pekerjaanibu <?php echo form_error('pekerjaanibu') ?></label>
                        <input type="text" class="form-control" name="pekerjaanibu" id="pekerjaanibu" placeholder="Pekerjaanibu" value="<?php echo $pekerjaanibu; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Penghasilanibu <?php echo form_error('penghasilanibu') ?></label>
                        <input type="text" class="form-control" name="penghasilanibu" id="penghasilanibu" placeholder="Penghasilanibu" value="<?php echo $penghasilanibu; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Nomorteleponayah <?php echo form_error('nomorteleponayah') ?></label>
                        <input type="text" class="form-control" name="nomorteleponayah" id="nomorteleponayah" placeholder="Nomorteleponayah" value="<?php echo $nomorteleponayah; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Nomorteleponibu <?php echo form_error('nomorteleponibu') ?></label>
                        <input type="text" class="form-control" name="nomorteleponibu" id="nomorteleponibu" placeholder="Nomorteleponibu" value="<?php echo $nomorteleponibu; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Email <?php echo form_error('email') ?></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">kategori_biaya <?php echo form_error('kategori_biaya') ?></label>
                        <input type="text" class="form-control" name="kategori_biaya" id="kategori_biaya" placeholder="kategori_biaya" value="<?php echo $kategori_biaya; ?>" />
                    </div>
                    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('data_siswa') ?>" class="btn btn-default">Cancel</a>
                </form>
                </body>

                </html>