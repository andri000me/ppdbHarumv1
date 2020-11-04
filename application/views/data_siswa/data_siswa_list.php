<div class="card bg-brown">
    <p class="p-t-10 p-l-10">KET KETEGORI :</p>
    <p class="p-l-10 p-b-10"><span class="badge bg-green">a</span> Standar <span class="badge bg-green">b</span> Family 1 <span class="badge bg-green">c</span> Family 2 <span class="badge bg-green">d</span> Lainnya</p>
</div>
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 align-center">
                        <h2>DATA</h2>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 10px">
                <div class="col-md-4">
                    <?php echo anchor(site_url('data_siswa/create'), 'Tambah', 'class="btn btn-primary"'); ?>
                </div>
                <div class="col-md-4 text-center">
                    <div style="margin-top: 8px" id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                </div>
                <div class="col-md-3 text-right">
                    <form action="<?php echo site_url('data_siswa/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input style="background:lightblue" type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                ?>
                                    <a href="<?php echo site_url('data_siswa'); ?>" class="btn btn-default">Reset</a>
                                <?php
                                }
                                ?>
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-responsive table-bordered" style="margin-bottom: 10px">
                        <tr>
                            <th>No</th>
                            <th>Ket + Kategori</th>
                            <th>Nama lengkap</th>
                            <!-- <th>HP ayah</th> -->
                            <!-- <th class="text-center">Action</th> -->
                            <th class="text-center">ACC/NO</th>
                        </tr><?php $no = 1;
                                foreach ($data_siswa_data as $data_siswa) {
                                ?>
                            <tr>
                                <td style="text-align: center"><?= $no++; ?></td>
                                <td>
                                    <?php if ($data_siswa->status == 1) {
                                        echo '<span class="badge bg-green">Terima</span>';
                                    } else if ($data_siswa->status == 2) {
                                        echo '<span class="badge bg-red">Tolak</span>';
                                    } else {
                                        echo '<span class="badge bg-white">Belum</span>';
                                    }
                                    ?>
                                    <!-- <?php if ($data_siswa->kategori_biaya == 1 or $data_siswa->kategori_biaya == 5) {
                                                echo '<span class="badge bg-grey">Standar</span>';
                                            } else if ($data_siswa->kategori_biaya == 2 or $data_siswa->kategori_biaya == 6) {
                                                echo '<span class="badge bg-blue">Family 1</span>';
                                            } else if ($data_siswa->kategori_biaya == 3 or $data_siswa->kategori_biaya == 7) {
                                                echo '<span class="badge bg-purple">Family 2</span>';
                                            } else if ($data_siswa->kategori_biaya == 4 or $data_siswa->kategori_biaya == 8) {
                                                echo '<span class="badge bg-grey">Lainnya</span>';
                                            } else {
                                                echo '<span class="badge bg-white">Lainnya</span>';
                                            } ?> -->
                                    <?php echo '<span class="badge bg-orange">' . $data_siswa->kategori . '</span>' ?>
                                </td>

                                <td><?php echo $data_siswa->namalengkap ?></td>
                                <!-- <td><?php echo $data_siswa->nomorteleponayah ?></td> -->
                                <td style="text-align:center" width="200px">
                                    <?php
                                    echo anchor(site_url('data_siswa/cetak/' . $data_siswa->id_siswa), '<i class="material-icons">print</i>&nbsp;&nbsp; ');

                                    echo anchor(site_url('data_siswa/read/' . $data_siswa->id_siswa), '<i class="material-icons">pageview</i>&nbsp;&nbsp; ');

                                    echo anchor(site_url('data_siswa/update/' . $data_siswa->id_siswa), '<i class="material-icons">mode_edit</i>&nbsp;&nbsp; ');
                                    echo anchor(site_url('data_siswa/delete/' . $data_siswa->id_siswa), '<i class="material-icons">delete</i>&nbsp;&nbsp; ', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                    ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('verif/status/' . $data_siswa->id_siswa) ?>" class="btn bg-green waves-effect">V</a>
                                    <!-- cek Jenis kelamin -->
                                    <?php if ($data_siswa->jeniskelamin !== 'perempuan') {
                                        $a = 1;
                                        $b = 2;
                                        $c = 3;
                                        $d = 4;
                                    } else {
                                        $a = 5;
                                        $b = 6;
                                        $c = 7;
                                        $d = 8;
                                    } ?>

                                    <a href="<?= base_url('verif/biaya/' . $data_siswa->id_siswa . '/' . $a) ?>" class="btn bg-teal waves-effect">a</a>
                                    <a href="<?= base_url('verif/biaya/' . $data_siswa->id_siswa . '/' . $b) ?>" class="btn bg-teal waves-effect">b</a>
                                    <a href="<?= base_url('verif/biaya/' . $data_siswa->id_siswa . '/' . $c) ?>" class="btn bg-teal waves-effect">c</a>
                                    <a href="<?= base_url('verif/biaya/' . $data_siswa->id_siswa . '/' . $d) ?>" class="btn bg-teal waves-effect">d</a>
                                </td>
                            </tr>
                        <?php
                                }
                        ?>
                    </table>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                        <?php echo anchor(site_url('data_siswa/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                        <?php echo anchor(site_url('data_siswa/word'), 'Word', 'class="btn btn-primary"'); ?>
                    </div>
                    <div class="col-md-6 text-right">
                        <?php echo $pagination ?>
                    </div>
                </div>
            </div>
        </div>