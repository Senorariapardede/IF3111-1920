<html>
    <head></head>
    <body>
        <?php foreach ($news as $ShowNews){?>
        <?php echo site_url('news/'.$ShowNews['laporan']);?>
            <p><?php echo substr($ShowNews['laporan'], 0, 10); ?></p>
            <p><a href="<?php echo site_url('news/'.$ShowNews['laporan']); ?>">Selengkapnya</a></p>
        <?php } ?>    
    </body>
</html>
