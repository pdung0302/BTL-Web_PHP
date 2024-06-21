# BTL-Web_PHP
Tải PHP ver 7.2.34 trên https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.2.34/
Tải node ver 18.17.0
# Cách chạy
- Chạy npm install và composser install
- chạy php artisan key:generate
- Vào PHPadmin hoặc mySQL tại 1 db có tên giống với DB_DATABASE trong file .env
- import data vào db
- chạy php artisan migrate và php artisan db:seed
- chạy php artisan storage:link (kiểm tra folder public nếu có folder storage thì xóa đi rồi chạy lại)
- chạy npm run dev
- chạy php artisan serve
