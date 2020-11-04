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
                    <?php echo anchor(site_url('nominal/create'), 'Tambah', 'class="btn btn-primary"'); ?>
                </div>
                <div class="col-md-4 text-center">
                    <div style="margin-top: 8px" id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                </div>
                <div class="col-md-3 text-right">
                    <form action="<?php echo site_url('nominal/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input style="background:silver" type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                ?>
                                    <a href="<?php echo site_url('nominal'); ?>" class="btn btn-default">Reset</a>
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
                            <th style="width:250px">Kategori</th>
                            <th>Infaq Gedung</th>
                            <th>Infaq Perpustakaan</th>
                            <th>Infaq Kegiatan</th>
                            <th>Buku Dan Media Pembelajaran</th>
                            <th>Seragam Dan Attribut Sekolah</th>
                            <th>Jilbab</th>
                            <th>Pendidikan Infaq Pengembangan</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr><?php
                                foreach ($nominal_data as $nominal) {
                                ?>
                            <tr>
                                <td><?php echo '<span class="badge badge-danger"> '  . $nominal->id_kategori  . ' </span>' . '   ' . $nominal->kategori ?></td>
                                <td><?php echo $nominal->infaq_gedung ?></td>
                                <td><?php echo $nominal->infaq_perpustakaan ?></td>
                                <td><?php echo $nominal->infaq_kegiatan ?></td>
                                <td><?php echo $nominal->buku_dan_media_pembelajaran ?></td>
                                <td><?php echo $nominal->seragam_dan_attribut_sekolah ?></td>
                                <td><?php echo $nominal->jilbab ?></td>
                                <td><?php echo $nominal->pendidikan_infaq_pengembangan ?></td>
                                <td><?php echo $nominal->total ?></td>
                                <td style="text-align:center" width="200px">
                                    <?php
                                    echo anchor(site_url('nominal/read/' . $nominal->id), '<i class="material-icons">pageview</i>&nbsp;&nbsp; ');

                                    echo anchor(site_url('nominal/update/' . $nominal->id), '<i class="material-icons">mode_edit</i>&nbsp;&nbsp; ');

                                    echo anchor(site_url('nominal/delete/' . $nominal->id), '<i class="material-icons">delete</i>&nbsp;&nbsp; ', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                    ?>
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
                    </div>
                    <div class="col-md-6 text-right">
                        <?php echo $pagination ?>
                    </div>
                </div>