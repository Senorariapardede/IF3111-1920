<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="other/css/style.css?v=1.1">
    <script src="other/val/validation.js"></script>
</head>
<body>
    <br>
    <div class="utama">
        <b>Detail Laporan/Komentar</b>
        <br>
        <hr>
        <div class="arsip">
        <br>
            <?php foreach ($detail as $a):?>
            <?php $id=$a['id'];?>
            <p> <?=$a['laporan'];?></p>
            <?php endforeach; ?>
        </div>
        <br>
        <p class="wh">Lampiran:</p>
        <img src="<?php echo base_url(); ?>other/gmbr/lampiran.jpg" width="100" height="120">
        <br><br>
        <div class="t2">
        <?php
            $data = new DateTime($a['waktu']);
            echo 'Waktu :';
            echo $date->format('d-m-Y H:i');
            ?>
        </div>
        <div class="aspek">
            <?php
            echo 'Aspek :';
            echo $a['Aspek'];
            ?>
        </div>
        <?php echo "
            <a class='tm' href=javascript:conf('delete?del=$id')>Hapus Laporan</a>
            <a class='time' href='change?cha=$id'>Ubah Laporan</a>";
            ?>
        <br>
        <hr>
        <br>
    </div>
</body>
</html>