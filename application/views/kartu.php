<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0
        }

        body {
            margin: 0
        }

        .sheet {
            margin: 0;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            page-break-after: always;
            border: 1px black;
            border-style: dashed;
        }

        table {
            text-align: left;
            line-height: 25px;
            border-collapse: separate;
            border-spacing: 0;
            border: 2px solid limegreen;
            padding: 2px;
            border-radius: .25rem;
            font-size: 9pt;
            width: 100%
        }

        td,
        th {
            border: 1px solid limegreen;
            text-align: left;
            padding-left: 7px;
        }

        h1 {
            font-size: 12pt;
        }

        h2 {
            font-size: 10pt;
        }
    </style></head><body class="sheet" style="padding:5mm; width: 105mm; height: 148mm">


<img src="assets/kop.png" style="width: 398px">
<!-- <hr style="border-color :orange; border-style: solid "> -->
<h1 style="text-align: center; background-color:limegreen; padding: 5px; color: black">KARTU SELEKSI PPDB</h1>
        <?php 
        foreach ($siswa as $s) : ?>
<table>
    <tr>
        <td style="background-color:limegreen" width="120px" height="40px"><h1>NO PESERTA</h1></td>
        <td><h1><?= $s->kopes;?></h1></td>
        </tr>
        </table>
        <br>
<br>
    <table style="margin-top: -5px">
        <tr>
            <td width="120px">Nama Lengkap</td>
            <td><?= $s->namalengkap ?></td>
        </tr>
        <tr>
            <td>Nama Panggilan</td>
            <td><?= $s->namapanggilan ?></td>
        </tr>
        <tr>
            <td>Tempat, Tgl Lahir</td>
            <td><?= $s->tempatlahir ?>, <?= $s->tanggallahir ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $s->jeniskelamin ?></td>
        </tr>
        <tr>
            <td>Asal sekolah</td>
            <td><?= $s->asalsekolah ?></td>
        </tr>
    </table>
    <br><br>
    <table style="margin-top: -5px">
        <tr>
            <td style="text-align: center; background-color:limegreen">TTD Panitia PPDB</td>
            <td style="text-align: center; background-color:limegreen">TTD Orang Tua</td>
        </tr>
        <tr>
            <td style="border:0px" height=50px></td>
            <td style="border:0px"></td>
        </tr>
        <tr>
            <td style="border:0px"></td>
            <td style="border:0px" align="center"><?= $s->namaayah ?></td>            
        </tr>
    </table>
    <br><br>
    <p style="font-size: 12px"> <em> <b>catatan :</b><br>
    kartu ini dicetak dan dibawa ketika test masuk sekolah
</em>
</p>

<?php endforeach;?>
</body></html>