<html>
    <head>
    <title><?php echo $title; ?></title>
        <script src="other/val/validation.js"></script>
        <link rel="stylesheet" type="text/css" href="other/css/style.css?v=1.1">
</head>
<div class="utama">
    <p class="jud">Buat Laporan/Komentar</p>
    <hr><br>
    <form method="post" action=""  onSubmit="return validation(this)" enctype="multipart/form-data">
            <textarea name="laporan"  placeholder="Laporan/Komentar"></textarea>
            <br><br>
                <select class="select" name="aspek" id="aspek">
                    <option default>Pilih Aspek Pelapor/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrasturktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
            <br><br>
                <input class="lampiran" type="file" name="lampiran" id="lampiran">
            <br>
                <button class="tombol tombol1" type="submit"  name="upfile">Laporkan</button>
            <br>
            <hr>
    </form>
    <br><br><br>
    <script>
function AddData(){
    var laporan=$("[name:'laporan']").val();
    var aspek=$("[name:'aspek']").val();
    var lampiran=$("[name:'lampiran']").val();

    $.ajax({
        type: 'POST',
        data: 'laporan='+laporan+'&aspek='+aspek+'&lampiran='+lampiran,
        url: '<?php echo base_url().'index.php/add/AddData' ?>',
        dataType : 'json',
        success: function(hasil){
            console.log(hasil);
        }
    });
}
</script> 
</div>