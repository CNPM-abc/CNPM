# GIỚI THIỆU
Mini Football Field Management System - FootballClub là hệ thống quản lý sân bóng đá mini trên nền tảng web. Trang web hỗ trợ tin học hóa các chức năng nghiệp vụ cơ bản mà một sân bóng đá mini cần phải có.
Repository này là phần back-end của hệ thống.

# YÊU CẦU NGHIỆP VỤ
+ Quản lý khách hàng
+ Quản lý lịch đặt sân bóng
+ Quản lý sản phẩm
+ Quản lý thanh toán
+ Quản lý phiếu đặt sân
+ Quản lý dịch vụ
+ Quản lý hóa đơn dịch vụ
+ Quản lý người dùng

# CHỨC NĂNG 
+ Tra cứu và tìm kiếm thông tin
+ Thêm, xóa, sửa, xem thông tin chi tiết
+ Xem số liệu thống kê theo khoảng thời gian cố định và tùy chọn
+ Xem biểu đồ thống kê theo khoảng thời gian cố định và tùy chọn
+ Xuất dữ liệu (danh sách, chi tiết, số liệu thống kê, biểu đồ) ra định dạng *.xlsx và *.pdf

# CHỨC NĂNG DỰ KIẾN PHÁT TRIỂN
+ Nhập xuất dữ liệu từ file *.json, *.csv
+ Cho phép kết nối với hệ thống tiếp nhận lịch đặt sân từ phía khách hàng
+ Định hướng tiếp tục phát triển phần giao diện của hệ thống, kết hợp giao diện font-end vào phần back-end đã xây dựng được. Giao diện định hướng kết hợp vào trang web sử dụng các công nghệ và công cụ sau: HTML5, CSS3, Javascript, Angular, C#, Figma, AdobeXD.


# CÔNG NGHỆ SỬ DỤNG
Ngôn ngữ: JavaScript, PHP, MySQL

# HƯỚNG DẪN CÀI ĐẶT
Tải và cài đặt Xampp.
Trong command line, thực thi dòng lệnh sau:
> npm install -g yarn
Clone repository CNPM về máy thông qua dòng lệnh sau:
> git clone https://github.com/CNPM-abc/CNPM
Chạy command line trong thư mục vừa được clone về, thực thi dòng lệnh sau:
> yarn install
Sau khi quá trình cài đặt hoàn tất, tiếp tục thực thi dòng lệnh sau:
> yarn start

+ Download XAMPP: Lựa chọn phiên bản phù hợp và download trực tiếp từ trang chính của XAMPP: https://www.apachefriends.org/download.html.
+ Cài đặt XAMPP: Download và cài đặt file, ví dụ: xampp-win32-5.6.24-1-VC11-installer.exe. Double click file vừa download (hoặc chạy bằng quyền administrator bằng cách right click lên file vừa download > Run as administrator), nếu máy tính bạn có chương trình duyệt virus sẽ xuất hiện hộp thoại "Question", không cần lo lắng, cứ chọn "Yes":
+ Setup - Installation folder: Chọn thư mục để cài đặt, chứa thư mục XAMPP, thường để mặc định C:\xampp.
+ Setup - Ready to Install: Các bước chuẩn bị sơ bộ đã xong, giờ thì click "Next" để cài đặt.
+ Setup - Welcome to XAMPP: Đây là màn hình cài đặt, cứ đợi chạy xong hết là có thể sử dụng được XAMPP.
+ Khởi động Apache và MySQL: Cài đặt hoàn thành, đây là giao diện đầu tiên sau khi cài đặt XAMPP thành công.
+ Bên dưới "Actions" click vào 2 button "Start" tương ứng của "Apache" và "MySQL" để khởi động 2 ứng dụng.

# SỬA LỖI CÀI ĐẶT (nếu có)
+ Thông thường khi cài xong, sẽ dễ gặp lỗi không khởi động được Apache, nguyên nhân dễ gặp nhất là do xung đột port 80, port này có rất nhiều chương trình ưu tiên chạy, ví dụ như Skype, IIS, World Wide Web Publishing service, HTTP Server API, ...
+ Cách giải quyết là tắt các chương trình trên sau đó khởi động lại Apache là được:
Skype, IIS hay HTTP Server API, ... thì close ứng dụng tương ứng.
World Wide Web Publishing service thì nhấn tổ hợp phím: Window + R > gõ services.msc > tìm trong hộp thoại vừa hiện ra "World Wide Web Publishing Service" > click chuột phải chọn "Stop".
Sau khi tắt ứng dụng tương ứng xong thì click chọn "Start" để khởi động lại Apache, màn hình như bên dưới là thành công.

# ĐỘI NGŨ PHÁT TRIỂN
+ Thành viên đội ngũ phát triển: Hà Ngọc Mỹ, Đỗ Duy Linh, Trịnh Thị Mai Hân 
+ Nhóm sinh viên trường: Đại học Tôn Đức Thắng
+ Khoa: Công nghệ thông tin
+ Giảng viên hướng dẫn: Ths Nguyễn Ngọc Phiên

# GIẤY PHÉP
MIT
