<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// === BÀI 2 ===
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});

Route::get('/about', function () {
    return "Họ tên: Nguyễn Văn A<br>Lớp: D18CNPM2<br>MSSV: 123456789";
});

Route::get('/contact', function () {
    return view('contact');
});
// ========== BÀI 3 ==========
// 1. Route tính tổng: /tong/{a}/{b}
Route::get('/tong/{a}/{b}', function($a, $b) {
    // Chuyển đổi sang số trước khi tính
    $so_a = (int)$a;
    $so_b = (int)$b;
    $tong = $so_a + $so_b;
    
    return "Tổng của $so_a và $so_b là: $tong";
});

// 2. Route thông tin sinh viên: /sinh-vien/{name}/{age?}
Route::get('/sinh-vien/{name}/{age?}', function($name, $age = 20) {
    // Chuyển age sang số nếu có
    $tuoi = (int)$age;
    
    return "Tên sinh viên: $name<br>Tuổi: $tuoi";
});
// ========== BÀI 4 ==========
// 1. Route Group Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });
    
    Route::get('/users', function () {
        return "Danh sách người dùng";
    });
});

// 2. Route kiểm tra ngày tháng với validation
Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    // Chuyển sang số
    $day = (int)$day;
    $month = (int)$month;
    $year = (int)$year;
    
    return "Ngày tháng hợp lệ: $day/$month/$year";
})->where([
    'day' => '^(0?[1-9]|[12][0-9]|3[01])$',    // 1-31
    'month' => '^(0?[1-9]|1[0-2])$',           // 1-12
    'year' => '^\d{4}$'                        // 4 chữ số
]);

// Route test đơn giản hơn (nếu regex phức tạp)
Route::get('/check-date-simple/{day}/{month}/{year}', function ($day, $month, $year) {
    $day = (int)$day;
    $month = (int)$month;
    $year = (int)$year;
    
    return "Ngày tháng: $day/$month/$year";
})->whereNumber(['day', 'month', 'year']);