# E-Voting

E-Voting adalah aplikasi E-Voting untuk Pemilihan Di Sekolah. Aplikasi ini dikembangkan untuk membantu Sekolah-Sekolah dalam melakukan Pemilihan dengan Mudah dan Cepat. 
Aplikasi ini adalah aplikasi yang gratis untuk digunakan, namun jika anda ingin memberikan Kontribusi atau membantu Kami untuk pengembangan Aplikasi ini lebih lanjut anda dapat Menghubungi Pembuat.

Berlicense
# Fitur

  Reset Data (Fitur ini diperlukan pada saat Sekolah ingin membersihkan data pada database dan ingin melakukan Pemilihan pada tahnu berikutnya
  
  Kunci Akun (Fitur ini menonaktifkan akun DPT pada saat dia selesai melakukan pemilihan jadi dia tidak akan punya kesempatan untuk memilih lebih dari 1 kali
  
  Reset User (Fitur ini digunakan apabila ada DPT yang mengajukan komplain bahwa dia belum pernah melakukan Pemilihan namun akunnya telah terkunci
  
  Data Sekolah (Dengan fitur ini anda bisa memperbarui data sekolah anda
  
  Data Kelas DPT (Dengan fitur ini anda bisa menambahkan kelas atau menghapus kelas yang sudah ada)
  
  Data Kandidat (Dengan fitur ini anda bisa Menambahkan atau menghapus Kandidat Ketua OSIS)
  
  Data DPT (Dengan fitur ini anda bisa Menambahkan atau menghapus Daftar Pemilih Tetap)
  
  Hasil Pemilihan (Dengan fitur ini anda dapat melihat hasil pemilihan Ketua OSIS)
  
  Daftar Hadir (Dengan Fitur ini anda dapat Mengunduh Daftar Hadir Pemilihan Ketua OSIS)
  
  Laporan Pilketos (Dengan Fitur ini anda dapat Mengunduh Laporan Pemilihan Ketua OSIS)
  
  Data Massal (Dengan Fitur Ini Anda Dapat Menambahkan Data Secara Massal)



# User Guide
Local Instalation

	Download XAMPP <a href="https://www.apachefriends.org/download.html" target="_blank">Disini</a> dan install
	Jalankan XAMPP Control Panel dan Klik Start(Mulai) pada Apache dan Mysql
	Copy File pilketos-master.zip ke Folder C://xampp/htdocs/ Kemudian Extract


#Creating Database

	Masuk ke Browser kemudian tulis di Address Bar http://localhost/phpmyadmin
	Buat Database dengan Nama db_pilketos
	Import Database db_pilketos.sql <a href="https://www.domainesia.com/panduan/cara-import-database-mysql-di-phpmyadmin/" target="_blank">Tutorial Disini</a>


#E-Voting Konfiguration 

	Edit File database.php yang ada pada Folder application/config/
	Kemudian Pastikan Hostnamenya Bernilai localhost
	Username bernilai root
	Password dibiarkan kosong
	dan Database bernilai db_pilketos Note: <i>Sesuaikan dengan nama database yang Dibuat Tadi
	Simpan File
		

#Konfigurasi Base URL

	Edit File config.php yang ada pada Folder application/config/
	Kemudian pastikan variable $config['base_url'] bernilai 'http://localhost/E-voting/
	Simpan File


#Akses Aplikasi

Akses Admin
 
	Masuk ke Browser kemudian tulis di address bar http://localhost/E-voting/index.php/admin/
	Login dengan menggunakan Username = admin dan Password = admin 

Akses User (DPT)
 
	Masuk Ke Browser kemudian tulis di address bar http://localhost/E-voting
	Login dengan menggunakan Username dan Password = NISN DPT yang bersangkutan, yang telah di INPUT oleh Admin sebelumnya

