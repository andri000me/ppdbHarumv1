<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 align-center">
                        <h2>DETAIL</h2>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-responsive table-bordered" style="margin-bottom: 10px">
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Pess</td>
                            <td><?php echo $pess; ?></td>
                        </tr>
                        <tr>
                            <td>Is Active</td>
                            <td><?php echo ($is_active == 1 ? 'Terpakai' : 'Belum'); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?php echo site_url('akses') ?>" class="btn btn-default">Cancel</a></td>
                        </tr>
                    </table>
                    </body>

                    </html>