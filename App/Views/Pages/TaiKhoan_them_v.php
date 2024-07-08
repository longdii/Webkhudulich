<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="http://localhost/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Tài Khoản</title>
</head>

<body>
    <form action="/WebKhuVuiChoi/taikhoanadmin/themmoi" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        THÊM MỚI TÀI KHOẢN
                    </span>
                </li>
            </ul>
            <ul class="header-list">
                <!-- <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Export</button>
                </li>
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Import</button>
                </li> -->
                <li class="header-item">
                    <button class="header-btn" type="submit" name="btnTroVe">Back</button>
                </li>
            </ul>
        </div>
        <div class="container">
            <table class="content__table">
                <tr>
                    <th>Email</th>
                    <th>Mật Khẩu</th>
                    <th>Họ Tên</th>
                    <th>Điện Thoại</th>
                </tr>
                <tr>
                    <td>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email" name="txtEmail">
                    </td>
                    <td>
                        <input type="password" class="form-control" id="mk" placeholder="Nhập mật khẩu"
                            name="txtMatkhau">
                    </td>
                    <td>
                        <input type=" text" class="form-control" id="hoten" placeholder="Nhập họ tên" name="txtHoten">
                    </td>
                    <td>
                        <input type="tel" class="form-control" id="sdt" placeholder="Nhập số điện thoại"
                            name="txtDienthoai" pattern="[0-9]{10}">
                    </td>

                </tr>
                <tr>
                    <th>Địa Chỉ</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" id="dc" placeholder="Nhập địa chỉ" name="txtDiachi">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="header-btn" name="btnThem" value="Xác nhận">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>
