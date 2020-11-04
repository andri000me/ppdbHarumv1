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

                <div class="col-md-4 text-center">
                    <div style="margin-top: 8px" id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                </div>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-responsive table-bordered" style="margin-bottom: 10px">
                        <tr>
                            <th>No</th>
                            <th>Ket + Kategori</th>
                            <th>Nama lengkap</th>
                            <th>HP ayah</th>
                            <!-- <th class="text-center">Action</th> -->
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
                                    <?php if ($data_siswa->kategori_biaya == 1 or $data_siswa->kategori_biaya == 5) {
                                        echo '<span class="badge bg-grey">Standar</span>';
                                    } else if ($data_siswa->kategori_biaya == 2 or $data_siswa->kategori_biaya == 6) {
                                        echo '<span class="badge bg-grey">Family 1</span>';
                                    } else if ($data_siswa->kategori_biaya == 3 or $data_siswa->kategori_biaya == 7) {
                                        echo '<span class="badge bg-grey">Family 2</span>';
                                    } else if ($data_siswa->kategori_biaya == 4 or $data_siswa->kategori_biaya == 8) {
                                        echo '<span class="badge bg-grey">Lainnya</span>';
                                    } else {
                                        echo '<span class="badge bg-white">Lainnya</span>';
                                    } ?>
                                </td>

                                <td><?php echo $data_siswa->namalengkap ?></td>
                                <td><?php echo $data_siswa->nomorteleponayah ?></td>
                                <!-- <td style="text-align:center" width="200px">
                                    <?php
                                    echo anchor(site_url('data_siswa/cetak/' . $data_siswa->id_siswa), '<i class="material-icons">print</i>&nbsp;&nbsp; ');

                                    echo anchor(site_url('data_siswa/read/' . $data_siswa->id_siswa), '<i class="material-icons">pageview</i>&nbsp;&nbsp; ');

                                    echo anchor(site_url('data_siswa/update/' . $data_siswa->id_siswa), '<i class="material-icons">mode_edit</i>&nbsp;&nbsp; ');
                                    echo anchor(site_url('data_siswa/delete/' . $data_siswa->id_siswa), '<i class="material-icons">delete</i>&nbsp;&nbsp; ', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                    ?>
                                </td> -->

                            </tr>
                        <?php
                                }
                        ?>
                    </table>
                </div>



            </div>
        </div>