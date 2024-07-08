<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/WebKhuVuiChoi/Public/Css/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/ve.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title></title>
</head>

<body>
    <form action="/WebKhuVuiChoi/TinTuc_admin/timkiem" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        TIN TỨC NỔI BẬT
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
                            name="txtTimKiem" value="<?php echo $data['timkiem'] ?>">
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
                    <th>Tên tin tức</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
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
                        <a href="/WebKhuVuiChoi/TinTuc_admin/xoa/<?php echo $row['ID'] ?>"><i
                                class="content__table-icon fa-solid fa-trash"></i></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/WebKhuVuiChoi/TinTuc_admin/sua/<?php echo $row['ID'] ?>"><i
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
