
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
                <?php echo anchor(site_url('setting/create'),'Tambah', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('setting/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input style="background:silver" type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('setting'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama Setting</th>
		<th>Nilai</th>
		<th>Action</th>
            </tr><?php
            foreach ($setting_data as $setting)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $setting->nama_setting ?></td>
			<td><?php echo $setting->nilai ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('setting/read/'.$setting->id),'<i class="material-icons">pageview</i>&nbsp;&nbsp; '); 
				 
				echo anchor(site_url('setting/update/'.$setting->id),'<i class="material-icons">mode_edit</i>&nbsp;&nbsp; '); 
				 
				echo anchor(site_url('setting/delete/'.$setting->id),'<i class="material-icons">delete</i>&nbsp;&nbsp; ','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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