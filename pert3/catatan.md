docker ps untuk melihat port docker yang digunakan agar tidak nabrak
docker exec -it pemmweb bash untuk masuk ke dalam container pemweb

composer create-project --prefer-dist raugadh/fila-starter . (untuk menginstall laravel dan composer raugadh)

rm -rf *
# Jika termasuk file tersembunyi
rm -rf .*

chown -R www-data:www-data storage/*
chown -R www-data:www-data bootstrap/*

php artisan migrate
# Atau jika ingin reset ulang:
php artisan migrate:fresh

php artisan db:seed --force

php artisan shield:generate -all

php artisan project:init
chmod 777 -R storage/*
chmod 777 -R bootstrap/*





-public (folder storage)
-app/mode; 