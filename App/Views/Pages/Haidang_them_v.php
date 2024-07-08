<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <form action="/WebKhuVuiChoi/Haidang_them/themmoi" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        THÊM MỚI HẢI ĐĂNG
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
                    <th>Hình ảnh</th>
                    <th>Tên trải nghiệm</th>
                    <th>Mô tả</th>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="txtAnhVe">
                    </td>
                    <td>
                        <input type="text" id="txtTentn" name="txtTentn" value="">
                    </td>
                    <td>
                        <input type="text" name="txtmota" value="">
                    </td>
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
