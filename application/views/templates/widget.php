<!-- Widgets -->
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">playlist_add_check</i>
            </div>
            <div class="content">
                <div class="text">SISWA BARU</div>
                <div class="number count-to" data-from="0" data-to="<?php echo $total_rows ?>" data-speed="15" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="material-icons">help</i>
            </div>

            <?php
            foreach ($jmlkuota as $kuota) : ?>
                <?php $jmlkuota = $kuota['nilai']; ?>
                <?php $pendaftar = $jmlkuota - $total_rows ?>
                <div class="content">
                    <div class="text">SISA KUOTA</div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $pendaftar ?>" data-speed="1000" data-fresh-interval="20"></div>
                </div>
        </div>
    </div>
<?php endforeach; ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-light-green hover-expand-effect">
        <div class="icon">
            <i class="material-icons">forum</i>
        </div>
        <?php foreach ($jmlguru as $guru) : ?>
            <div class="content">
                <div class="text">GURU & KARYAWAN</div>
                <div class="number count-to" data-from="0" data-to="<?= $guru['nilai'] ?>" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-orange hover-expand-effect">
        <div class="icon">
            <i class="material-icons">person_add</i>
        </div>
        <?php foreach ($jmlsiswa as $s) : ?>
            <div class="content">
                <div class="text">TOTAL SISWA</div>
                <div class="number count-to" data-from="0" data-to="<?= $s['nilai'] ?>" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<!-- #END# Widgets -->