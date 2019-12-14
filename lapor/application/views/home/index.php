<html>
    <head>
        <title><?php echo $title;?></title>
        <link rel="stylesheet" type="text/css" href="other/css/style.css?v=1.1">
        <script src="other/val/validation.js"></script>
    </head>
    <body>
        <div class="utama">
            <form class="search1" onSubmit="return search(this)" action="<?php echo base_url('search')?>" method="post">
                <input class="search2" name="key" placeholder="" autocomplete="off" type="text" autofocus>
                <input class="button" name="submit" placeholder="search" value="Cari" type="submit">
            </form>

            <a class="add" href="<?php base_url();?>Add"><b>Buat Laporan/Komentar</b></a>
            <p class="jud">Laporan Terakhir</p>
            <br><br>

            <?php foreach ($home as $a):?>
                <?php $id = $a['id']; ?>
                <?php $today = date("Y-m-d H:i"); ?>

            <div class="wh">
                <p><?php echo substr($a['laporan'], 0, 500); ?></p>
            </div><br>

                <?php
                   echo "<tr>
                   <a class='tm' href='detail?detail_id=$id'>Lihat Selengkapnya</a></tr>";
                ?>

            <div class="time">
                <?php $date=new DateTime($a['waktu']);
                   echo 'Waktu : ';
                   echo $date->format('d-m-Y H:i');?>
            </div>

            <div class="lampir">
                <?php echo 'Lampiran : ';
                   echo $a['lampiran']; ?>
            </div>
            <br><br>

            <?php endforeach; ?>
            <img class="img" src="<?php echo base_url();?>other/gmbr/titik.jpg">
            <img class="img" src="<?php echo base_url();?>other/gmbr/titik.jpg">
        <br>
        </div>
    </body>
</html>
