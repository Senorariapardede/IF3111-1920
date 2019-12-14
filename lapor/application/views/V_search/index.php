 <html>
    <head>
      <title><?php echo $title; ?> </title>
      <link rel="stylesheet" type="text/css" href="other/css/style.css?v=1.1">
      <script src="other/val/validation.js"></script>
    </head>
   <body> 
      <div class="utama">
      <form class="search1" onSubmit="return search(this)"  action="<?php echo base_url('search')?>" method="post">
            <input class="search2" type="text" name="key" placeholder="search" autocomplete="off" autofocus>	
            <input class="button" type="submit" name="submit"  placeholder="search" value="Cari">	 
      </form>
        <a class="add" href="<?php base_url(); ?>Add"><b>Buat Laporan/Komentar</b></a>
        <br><br>
        <p class="judd">Hasil Pencarian</p>
        <hr><br><br>
        <?php  
        if($search!=null){
        ?>
        <?php foreach ($search as $a)  :?>
                <?php $id = $a['id']; ?>
                <?php $today = date("Y-m-d H:i"); ?>
              <div class="wh"> 
                <p><?php echo substr($a['laporan'], 0, 500); ?></p>
              </div><br>
                  <?php
                    echo "<tr>
                    <a class='tm' href='detail?detail_id=$id'>Lihat Selengkapnya</a>		
                    </tr>";
                  ?>
                  <div class="time">
                    <?php 
                    $date = new DateTime($a['waktu']);
                    echo 'Waktu : ';
                    echo $date->format('d-m-Y H:i');
                    ?>
                  </div> 
                  <div class="lampir">
                    <?php
                    echo 'Lampiran:'; 
                    echo  $a['lampiran']; 
                    ?>
                  </div>
            <br><hr><br>
            <?php endforeach;         
            }else{ ?>
            <div class="notfound"> 
              <br>Data tidak dapat di temukan
            </div><br>
             <?php } ?>
            <br>
        </div>
</body>
</html>