<!DOCTYPE html>
<html>
<head>
    <title>Trang Liên Hệ</title>
</head>
<body>
    <h1>Trang Liên Hệ</h1>
    <p>Đây là trang contact đơn giản</p>
    <hr>
    
    <h2>Thông tin liên hệ:</h2>
    <ul>
        <li>Email: danh@email.com</li>
        <li>SĐT: 0123456789</li>
        <li>Địa chỉ: Hoàng Quốc Việt</li>
    </ul>
    <p>
        <a href="/">Trang chủ</a> | 
        <a href="/home">Home</a> | 
        <a href="/about">About</a>
        
        
    </p>
    <hr>
    <h2>📚 Bài 3: Test Dynamic Routes</h2>
    
    <h3>1. Tính tổng:</h3>
    <ul>
        <li><a href="/tong/5/10">/tong/5/10</a> </li>
        <li><a href="/tong/15/25">/tong/15/25</a> </li>
        <li><a href="/tong/100/200">/tong/100/200</a> </li>
    </ul>
    
    <h3>2. Sinh viên:</h3>
    <ul>
        <li><a href="/sinh-vien/Tuan">/sinh-vien/Tuan</a> </li>
        <li><a href="/sinh-vien/NguyenVanA/21">/sinh-vien/NguyenVanA/21</a> → Tuổi 21</li>
        <li><a href="/sinh-vien/TranThiB/22">/sinh-vien/TranThiB/22</a> → Tuổi 22</li>
    </ul>
    <hr>
    <h2>⚙️ Bài 4: Route Group & Validation</h2>
    
    <h3>1. Admin Routes:</h3>
    <ul>
        <li><a href="/admin/dashboard">/admin/dashboard</a></li>
        <li><a href="/admin/users">/admin/users</a></li>
    </ul>
    
    <h3>2. Kiểm tra ngày tháng:</h3>
    <ul>
        <li><a href="/check-date/25/12/2023">/check-date/25/12/2023</a> (hợp lệ)</li>
        <li><a href="/check-date/31/01/2024">/check-date/31/01/2024</a> (hợp lệ)</li>
        <li><span style="color: red">/check-date/32/13/2023</span> (sẽ 404 - không hợp lệ)</li>
        <li><span style="color: red">/check-date/25/12/23</span> (sẽ 404 - năm 2 chữ số)</li>
    </ul>
</body>
</html>