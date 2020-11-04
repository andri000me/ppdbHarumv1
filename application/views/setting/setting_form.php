
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
            <label for="nama_setting">Nama Setting <?php echo form_error('nama_setting') ?></label>
            <textarea class="form-control" rows="3" name="nama_setting" id="nama_setting" placeholder="Nama Setting"><?php echo $nama_setting; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="nilai">Nilai <?php echo form_error('nilai') ?></label>
            <textarea class="form-control" rows="3" name="nilai" id="nilai" placeholder="Nilai"><?php echo $nilai; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>