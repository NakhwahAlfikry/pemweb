Pemrograman Website Pertemuan 1

aplikasi yang di pakai : 
# 1. docker
what : docker adalah aplikasi yang berfungsi membuat, dan menjalankan aplikasidi dalam container/file yang telah di buat sebelumnya
when : docker juga digunakan agar file bisa berjalan secara bersamaan dan tanpa terkendala versi yang berbeda
who : Docker banyak digunakan oleh developer
Saat ingin memastikan aplikasi berjalan di berbagai platform tanpa masalah kompatibilitas.
where : docker dapat digunakan di semua os baik linux, windows, mac
why : Mempermudah pengembangan aplikasi berbasis Linux tanpa perlu install Linux secara penuh.

how : dengan cara menginstall aplikasi nya danmembuat cotainer dan dengan docker compose up -d --build
- kekurangan :  
docker memerlukan device yang bagus agar dapat berjalan dengan lancar, kurang bisa di gunakan di laptop dengan device dan spek yang rendah

- kelebihan :
docker dapat dijalankan dimana saja
dapat dijalankan secara bersamaan
dapat dijalankan dengan versi yang berbeda

# 2. wsl
wsl ( windows subsystem for linux ) adalah fitur windows yang dapat menggunakan linux di dalam windows
wsl cocok di gunakan untuk pengguna yang ingin menggunakan linux tetapi tidak ingin merubah sistem oprasi windows atau mac
wsl digunakan oleh developer yang membutuhkan linux tetapi tidak ingin mengubah sistem oprasi

- Kekurangan : 
set up nya susah untuk pemula
memerlukan waktu yang lama untuk di set up
tidak mendukung gui linux

- kelebihan :
dapat menjalankan terminal linux di windows tanpa harus mengganti os windows
lebih hemat ram dan penyimpanan daripada menggunakan virtualbox
mendukung banyak distro linux

# .env 
berfungsi untuk menyimpan variabel env 


# docker-compose.yml
berfungsi untuk menentukan versi docker seperti dalam code nya ( version: '3' ), yang berarti docker tersebut versi 3, dan ada services yang berisi web yang mengambil image nginx: latest dan dengan menggunakan port 80:80 dan yang terakhir ada volumes yang menunjukan tempat pemyimpanan

# nginx 
berisi ngin.conf yang berfungsi untuk mengkonfigurasi nginx seperti "listen 80" yang berfungsi agar server berjalan di port 80 dan harus sesuai dengan port yang di tulis di docker-compose.yml, selanjutnya ada "server_name localhost" ini berfungsi agar dapat buka di chrome dengan menulis localhost, ( root /usr/share/nginx/html ) berfungsi untuk nginx mecari file 

# src
tempat untuk menyimpan html yang telah di buat contoh (index.html, form.html)
(div) berfungsi untuk mengelompokan suatu 
( p ) berfungsi sebagai paragraf
( a ) berfungsi untuk memasukan link
( img ) berfungsi untuk memasukan gambar
( h ) berfungsi membuat heading dan sub heading contoh (h1) dan (h2)
( ul ) berfungsi untuk membuat list yang tidak terurut
(div) berfungsi untuk mengelompokan suatu