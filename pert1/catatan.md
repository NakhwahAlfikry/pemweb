aplikasi yang diperlukan

- docker
- navicat
- wsl
- postman

didalam analisa ( 5w + 1H ) ( Kelebihan, Kekurangan ) : 
contoh :
aplikasi yang di pake di atas


website 

website memilliki addres / domain
contoh :
- facebook
- instagram

setiap wbsite memiliki addres / domain nya sendiri

kalau pake template/plugin/copy sertakan sumber nya taro di readme

html : bahasa general yang biasa di pake untuk developing website

install 3 extension

(div) berfungsi untuk mengelompokan suatu 
( p ) berfungsi sebagai paragraf
( a ) berfungsi untuk memasukan link
( img ) berfungsi untuk memasukan gambar
( h ) berfungsi membuat heading dan sub heading contoh (h1) dan (h2)
( ul ) berfungsi untuk membuat list yang tidak terurut
( li ) berfungsi untuk membuat list yang terurut

jika ingin membuat file index.html di luar src misal membuat index.html di folder latihan maka di tambah
nginx.conf :
  location /latihan {
        alias /usr/share/nginx/latihan/;
        index index.html index.htm home.html;
        try_files $uri $uri.html $uri/ =404;
    }

    docker-compose.yml : 
- ./latihan:/usr/share/nginx/latihan 
===========================================
.env
===========================================

COMPOSE_PROJECTION_NAME=fikry
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest
==========================================
docker.compose.yml
==========================================
version: '3'

services :

  web :
    image: nginx:latest
    ports:
    - 80:80

    volumes:
    - ./nginx.conf:/etc/nginx/conf.d/default.conf
    - ./src:/usr/share/nginx/html

version = versi  dari docker
service : bawaan

	web : 
	image : didalam web mengambil image nginx:latest

	volume : tempat nyari file nya
==========================================================
nginx.conf:
==========================================================
server {
    listen 80; //harus sama dengan port nya
    server_name localhost; // nama dari server nya

    location / { 
        root /usr/share/nginx/html/;
        index index.html
    } // lokasi nya
}

======================================
src
======================================
1. index.html 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=devive-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae pariatur hic ducimus impedit! Voluptates id illo veniam ducimus atque corrupti molestias nulla suscipit aliquam, at alias vero laborum hic itaque.</p>


</body>
</html>

2.div.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag div</title>
</head>
<body>
    This is a div element
    <p>this is a praragraph inside the dive</p>
    
</body>
</html>
=======================================
docker-compose.yml
=======================================
version: '3'

services :
  web :
    image: nginx:latest
    ports:
      - "80:80"

    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf.d
      - ./src:/usr/share/nginx/html