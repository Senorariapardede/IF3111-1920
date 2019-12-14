<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="other/css/style.css?v=1.1">
    <script src="other/val/validation.j"></script>
</head>
<body>
    <br>
    <div class="utama">
        <p class="jud">Ubah Laporan/Komentar</p>
        <?php foreach ($change as $a):?>
        <?php $id = $a['id'];?>
        <?php $laporan = $a['laporan'];?>
        <?php $aspek = $a['aspek'];?>
        <?php $lampiran = $a['lampiran'];?>
        <hr>
        <form action="" method="post" onSubmit="return validation(this)" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php $a['id']; ?>">
        <br>
            <textarea name="laporan"><?php echo $laporan ?></textarea><br>
        <br>
            <select name="aspek" id="aspek" value="">
                <option value="pilih">Silahkan Pilih</option>
                <?php if($aspek=='Dosen'):?>
                    <option value="Dosen" selected>Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                <?php elseif($aspek=='Staff'):?>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff" selected>Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                <?php elseif($aspek=='Mahasiswa'):?>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa" selected>Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                <?php elseif($aspek=='Infrastruktur'):?>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur" selected>Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                <?php else($aspek=='Pengajaran'):?>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff" selected>Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran" selected>Pengajaran</option>
                <?php endif;?>
            </select> <br>
            <br><input class="file" id="lampiran" type="file" name="lampiran" value="<?php echo $lampiran?>"><br>
            <br><input class="tombol tombol1" name="upFile" type="submit" value="Laporkan">
            <div id="valid_msg"></div>
            <br>
            <hr>
        </form>
                <?php endforeach;?>
    </div>
</body>
</html>