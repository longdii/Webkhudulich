<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="http://localhost/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/ve.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Vé</title>
</head>

<body>
    <form action="http://localhost/WebKhuVuiChoi/Ve_c/timkiem" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        TRÒ CHƠI
                    </span>
                </li>
            </ul>
            <ul class="header-list">
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnExport">Export</button>
                </li>
                <li class="header-item">
                    <button class="header-btn header-btn--export" type="submit" name="btnImport">Import</button>
                </li>
                <li class="header-item">
                    <button class="header-btn" type="submit" name="btnThemVe">Add</button>
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
                    <th>STT</th>
                    <th>Khu trò chơi</th>
                    <th>Hình ảnh</th>
                    <th>Tên trò chơi</th>
                    <th>Giá vé</th>
                    <th></th>
                </tr>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $row['KhuVuiChoi'] ?></td>
                    <td>
                        <div class="img"
                            style="background-image: url(/WebKhuVuiChoi/Public/images/ve_img/<?php echo $row['AnhVe'] ?>);">
                        </div>
                    </td>
                    <td><div class="summarize"><?php echo $row['TenVe'] ?></div></td>
                    <td><?php echo $row['GiaVe'] ?>đ</td>
                    <td>
                        <a href="http://localhost/WebKhuVuiChoi/Ve_c/xoa/<?php echo $row['MaVe'] ?>"><i
                                class="content__table-icon fa-solid fa-trash"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="http://localhost/WebKhuVuiChoi/Ve_c/sua/<?php echo $row['MaVe'] ?>"><i
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