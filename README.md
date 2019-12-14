# IF3111-1920
Tugas IF3111 - Pengembangan Aplikasi Berbasis Web - RA

Nama Kelompok :
1. 14117022 Putri Maulidya Yasshiro
2. 14117096 Yosi Maridianti
3. 14117115 Senora Ria Pardede 

___________________________________________________________

Cara instalasi framework CodeIgniter dan Koneksi Database dengan MySQL.
# Framework yang digunakan adalah CodeIgniter. 
Cara instalasi :
1) Langkah pertama adalah buka website “codeigniter.com” lalu pilih menu download untuk mendownload Framework CodeIgniter.
2) Pilih versi CodeIgniter dengan codeigniter versi 3. 
3) Letakkan penyimpanan codeigniter ke dalam local disc C pada folder xampp htdocs.
4) Setelah itu, extract menjadi sebuah folder.
5) Kemudian rename folder codeigniter menjadi folder "tubes_web" agar disesuaikan dengan tugas kita..
6) Terakhir, untuk memastikan codeigniter telah terinstall dan dapat digunakan adalah dengan masuk ke web browser dan mengetikkan "localhost/tubes_web".
7) Lalu akan tampil sebuah halaman yang menyatakan selamat datang di codeigniter seperti gambar di bawah ini.

# Aplikasi pengolahan database yang digunakan adalah MySQL.
Cara koneksi basis data :
1) Buat database dengan nama 'simple_lapor' dengan tabel
2) Untuk menghubungkan dengan codeigniter adalah dengan membuka file config database codeigniter yang terletak di application/config/database.php
3) Pada file config database.php lakukan pengaturan database dengan memasukkan hostname, username database, password dan nama database yang digunakan.
4) Username database adalah root, passwordnya kosong, database yang digunakan adalah 'simple_lapor'. Password dikosongkan karena kami tidak menggunakan password.
5) Selanjutnya memanggil library database codeigniter dari function construct() pada controller, pada config autoload codeigniter yang terletak pada application/config/autoload.php.
6) Tambahkan 'database' pada autoload.
