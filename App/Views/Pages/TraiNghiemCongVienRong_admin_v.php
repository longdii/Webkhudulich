<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="http://localhost/Website_khu_vui_choi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/css/base.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/css/grid.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/css/ve.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <form action="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienRong_admin/timkiem" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        CÔNG VIÊN RỒNG
                    </span>
                </li>
            </ul>
            <ul class="header-list">
                <li class="header-item">
                    <button class="header-btn header-btn--export">Export</button>
                </li>
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnTroVe">Import</button>
                </li>
                <li class="header-item">
                    <button class="header-btn" type="submit" name="btnThem">Add</button>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="content__search">
                <div class="content__search-wrap">
                    <div class="content__search-input-wrap">
                        <input type="text" class="content__search-input" placeholder="Nhập để tìm kiếm"
                            name="txtTimKiem">
                    </div>
                    <button class="content__search-btn" type="submit" name="btnTimKiem">
                        <i class="content__search-btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                    <button class="content__search-btn" type="submit" name="btnTroVe">
                        <i class="content__search-btn-icon fa-solid fa-rotate-left"></i>
                    </button>
                </div>

            </div>

            <table class="content__table">
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên trải nghiệm</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td>
                        <div class="img"
                            style="background-image: url(/WebKhuVuiChoi/Public/Images/<?php echo $row['AnhVe'] ?>);">
                        </div>
                    </td>
                    <td><?php echo $row['TieuDe'] ?></td>
                    <td><div class="summarize"><?php echo $row['MoTa'] ?></div></td>
                    <td>
                        <a
                            href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienRong_admin/xoa/<?php echo $row['ID'] ?>"><i
                                class="content__table-icon fa-solid fa-trash"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a
                            href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienRong_admin/sua/<?php echo $row['ID'] ?>"><i
                                class="content__table-icon fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </form>
</body>

</html>