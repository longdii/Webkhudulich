
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/ThongTinTaiKhoan.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <title>Thông Tin Tài khoản</title>
</head>
<body>
<form method="post" action="/WebKhuVuiChoi/thongtintaikhoan/CapNhat" >
<div class="doashbox">
            <div class="sub-doashbox">
                <div class="form-doashbox" id="thongtintaikhoan">
                    <i class="ti-user"></i>
                    <a href="/WebKhuVuiChoi/thongtintaikhoan">Thông Tin Tài Khoản</a>
                </div>
                <div class="form-doashbox" id="quanlydonhang">
                    <i class="ti-shopping-cart"></i>
                <a href="/WebKhuVuiChoi/quanlydonhangcrl">Quản Lý Đơn Hàng</a>
                </div>
                <div class="form-doashbox">
                    <i class="ti-shift-right"></i>
                    <a  href="/WebKhuVuiChoi/dangnhap">Đăng Xuất</a>
                </div>
            </div>
        </div>
    <div class="noidung">
            <div class="bang">
            <p class="title"><strong>Thông tin tài khoản</strong></p>
            <p class="title1">Một số thông tin cá nhân sẽ được sử dụng phục vụ mục đích đặt vé</p>
                <div class="sub-noidung">
                    <div class="left">
                        <div class="form-group">
                            <p class="title"><strong>Email</strong></p>
                            <input type="email" class="form-control"  value="<?php echo $_SESSION['$email'] ?>" name="txtemail">
                        </div>
                        <div class="form-group">
                            <p class="title"><strong>Số điện thoại</strong></p>
                            <input type="tel" class="form-control"  value="<?php echo $_SESSION['$dienthoai'] ?>" name="txtdienthoai">
                        </div>
                        <input id="dangki" type="submit" name="btncapnhat" value="Cập Nhật">
                    </div>

                    <div class="right">
                    <div class="form-group">
                            <p class="title"><strong>Họ và tên</strong></p>
                            <input type="text" class="form-control"  value="<?php echo $_SESSION['$hoten'] ?>" name="txthoten">
                        </div>
                        <div class="form-group">
                            <p class="title"><strong>Địa chỉ</strong></p>
                            <input type="text" class="form-control"  value="<?php echo $_SESSION['$diachi'] ?>" name="txtdiachi">
                        </div>
                        <a id="xemve" href="/WebKhuVuiChoi/TrangChuNguoiDung">Xem Vé</a>

                    </div>
                </div>
            </div>
        </div>
</form>
      
</body>
</html>

