<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Data_siswa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kopes</th>
		<th>Us</th>
		<th>Ps</th>
		<th>Namalengkap</th>
		<th>Namapanggilan</th>
		<th>Asalsekolah</th>
		<th>Jeniskelamin</th>
		<th>Tempatlahir</th>
		<th>Tanggallahir</th>
		<th>Berkebutuhankhusus</th>
		<th>Alamatlengkap</th>
		<th>Tempattinggal</th>
		<th>Namaayah</th>
		<th>Pendidikanayah</th>
		<th>Pekerjaanayah</th>
		<th>Penghasilanayah</th>
		<th>Namaibu</th>
		<th>Pendidikanibu</th>
		<th>Pekerjaanibu</th>
		<th>Penghasilanibu</th>
		<th>Nomorteleponayah</th>
		<th>Nomorteleponibu</th>
		<th>Email</th>
		
            </tr><?php
            foreach ($data_siswa_data as $data_siswa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $data_siswa->kopes ?></td>
		      <td><?php echo $data_siswa->us ?></td>
		      <td><?php echo $data_siswa->ps ?></td>
		      <td><?php echo $data_siswa->namalengkap ?></td>
		      <td><?php echo $data_siswa->namapanggilan ?></td>
		      <td><?php echo $data_siswa->asalsekolah ?></td>
		      <td><?php echo $data_siswa->jeniskelamin ?></td>
		      <td><?php echo $data_siswa->tempatlahir ?></td>
		      <td><?php echo $data_siswa->tanggallahir ?></td>
		      <td><?php echo $data_siswa->berkebutuhankhusus ?></td>
		      <td><?php echo $data_siswa->alamatlengkap ?></td>
		      <td><?php echo $data_siswa->tempattinggal ?></td>
		      <td><?php echo $data_siswa->namaayah ?></td>
		      <td><?php echo $data_siswa->pendidikanayah ?></td>
		      <td><?php echo $data_siswa->pekerjaanayah ?></td>
		      <td><?php echo $data_siswa->penghasilanayah ?></td>
		      <td><?php echo $data_siswa->namaibu ?></td>
		      <td><?php echo $data_siswa->pendidikanibu ?></td>
		      <td><?php echo $data_siswa->pekerjaanibu ?></td>
		      <td><?php echo $data_siswa->penghasilanibu ?></td>
		      <td><?php echo $data_siswa->nomorteleponayah ?></td>
		      <td><?php echo $data_siswa->nomorteleponibu ?></td>
		      <td><?php echo $data_siswa->email ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>