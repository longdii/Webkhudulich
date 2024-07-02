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
    <form action="http://localhost/WebKhuVuiChoi/Ve_c/suadl" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        SỬA THÔNG TIN
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
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên trò chơi</th>
                    <th>Giá vé</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="content__table-input" name="txtID" readonly
                            value="<?php echo $row['MaVe'] ?>">
                    </td>
                    <td>
                        <div class="img"
                            style="background-image: url(/WebKhuVuiChoi/Public/images/ve_img/<?php echo $row['AnhVe'] ?>);">
                            <input type="text" name="txtAnhVeCu" value="<?php echo $row['AnhVe'] ?>" hidden>
                        </div>

                    </td>
                    <td>
                        <input type="text" class="content__table-input" id="txtTenVe" name="txtTenVe"
                            value="<?php echo $row['TenVe'] ?>">
                    </td>
                    <td>
                        <input type="number" class="content__table-input" name="txtGiaVe"
                            value="<?php echo $row['GiaVe'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="khuvuichoi">Chọn khu vui chơi:</label>
                        <select id="khuvuichoi">
                            <option value="Công viên nước">Công viên nước</option>
                            <option value="Công viên rồng">Công viên rồng</option>
                            <option value="Cáp treo">Cáp treo</option>
                        </select>
                        <input type="text" class="content__table-input" id="chonkhuvuichoi" name="txtKhuVuiChoi"
                            value="<?php echo $row['KhuVuiChoi'] ?>" style="margin-top: 20px;" readonly>

                        <script>
                        // Lấy đối tượng combobox và phần tử span
                        var combobox = document.getElementById("khuvuichoi");
                        var chonkhuvuichoi = document.getElementById("chonkhuvuichoi");

                        // Đặt sự kiện thay đổi cho combobox
                        combobox.addEventListener("click", function() {
                            // Cập nhật giá trị đã chọn vào phần tử span
                            chonkhuvuichoi.value = combobox.value;
                        });
                        </script>
                    </td>
                    <td colspan="2">
                        Chọn ảnh mới
                        <input type="file" name="txtAnhVe">
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
                <tr>
                    <td>
                        <input type="submit" class="header-btn" name="btnSua" value="Xác nhận">
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <script>
    window.onload = function() {
        document.getElementById("txtTenVe").focus();
    }
    </script>
</body>

</html>