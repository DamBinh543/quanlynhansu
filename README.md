Mở Git Bash để clone dự án về máy: git clone https://github.com/DamBinh543/quanlynhansu.git

Mở dự án đã clone, mở terminal chạy: composer install

Chạy: php artisan key:generate

Tạo database quanlynhansu trên MySQl

Sửa cấu hình env, thay tên database thành quanlynhansu

Mở Terminal chạy lệnh php artisan migrate --seed

Chạy php artisan serve
