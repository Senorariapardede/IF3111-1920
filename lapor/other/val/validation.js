function search(form){
    if (form.key.value == ''){
        alert("Pencarian tidak boleh kosong");
        form.laporan.focus();
        return (false);
    }
    return (true);
}

function conf(delUrl) {
    if (confirm("Laporan akan di hapus")) {
      document.location = delUrl;
    }
  }

function validation(form){
    var inputFile = document.getElementById('lampiran');
    var upPath = inputFile.value;
    var yes = /(.jpg|.jpeg|.png|.doc|.docx|.pdf|.ppt|.pptx|.xls|.xlsx)$/i;
    if (form.laporan.value == ''){
        alert("Laporan/Komentar Tidak Boleh Kosong!");
        form.laporan.focus();
        return (false);
    }
    var minimum = 10;
    if (form.laporan.value.length<minimum){
        alert("Minimal jumlah kata laporan/komentar adalah 10 kata");
        form.laporan.focus();
        return (false);
    }
    
   
    if (form.aspek.value =="pilih"){
        alert("Aspek laporan belum dipilih");
        return (false);
    }

    if (form.lampiran.value == ''){    
        alert ("Lampiran tidak boleh kosong");
        form.lampiran.focus();
        return (false);
    }
    if(!yes.exec(upPath)){
        alert('Silakan upload file yang memiliki ekstensi .jpg.jpeg.png.doc.docx.pdf.ppt.pptx.xls.xlsx);
        inputFile.value = '';
        return (false);
    }
    return (true);
}