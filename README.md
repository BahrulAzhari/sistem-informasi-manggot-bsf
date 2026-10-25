## tutorial collaborasi
git clone https://github.com/BahrulAzhari/sistem-informasi-manggot-bsf
cd sistem-informasi-maggot-bsf
composer install

## salin .env.example menjadi .env, isi konfigurasi database lokal kalian, lalu jalankan:
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve

