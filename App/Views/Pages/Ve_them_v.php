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
    <form action="http://localhost/WebKhuVuiChoi/Ve_c/themmoi" method="post">
        <div class="header">
            <ul class="header-list">
                <li class="header-item">
                    <span class="header-item-tile">
                        THÊM MỚI TRÒ CHƠI
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
                    <th>Tên Trò chơi</th>
                    <th>Giá vé</th>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="txtAnhVe" value="<?php echo $data['anhve'] ?>">
                    </td>
                    <td>
                        <input type="text" class="content__table-input" id="txtTenVe" name="txtTenVe"
                            value="<?php echo $data['tenve'] ?>" placeholder="Nhập tên trò chơi" readonly>
                    </td>
                    <td>
                        <input type="number" class="content__table-input" name="txtGiaVe"
                            value="<?php echo $data['giave'] ?>" placeholder="Nhập giá vé">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="khuvuichoi">Chọn khu vui chơi:</label>
                        <select id="khuvuichoi" style="width:200px">
                            <option value="Công viên nước">Công viên nước</option>
                            <option value="Công viên rồng">Công viên rồng</option>
                            <option value="Cáp treo">Cáp treo</option>
                        </select>
                        <input type="text" class="content__table-input" id="chonkhuvuichoi" name="txtKhuVuiChoi"
                            value="<?php echo $data['khuvuichoi'] ?>" style="margin-top: 20px;" readonly>

                        <script>
                        // Lấy đối tượng combobox và phần tử span
                        var combobox = document.getElementById("khuvuichoi");
                        var chonkhuvuichoi = document.getElementById("chonkhuvuichoi");

                        // Đặt sự kiện thay đổi cho combobox
                        combobox.addEventListener("click", function() {
                            // Cập nhật giá trị đã chọn vào phần tử input
                            chonkhuvuichoi.value = combobox.value;
                        });
                        </script>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cvrong">Trò chơi khu công viên rồng</label>
                        <select id="cvrong" style="width:200px">
                            <?php
                            if (isset($data['cvrong']) && $data['cvrong'] != null) {
                                while ($row = mysqli_fetch_array($data['cvrong'])) {
                            ?>
                            <option value="<?php echo $row['TieuDe'] ?>"><?php echo $row['TieuDe'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <script>
                        var cbocvrong = document.getElementById("cvrong");
                        var txtTenVerong = document.getElementById("txtTenVe");
                        cbocvrong.addEventListener("click", function() {
                            txtTenVerong.value = cbocvrong.value;
                        });
                        </script>
                    </td>
                    <td>
                        <label for="cvnuoc">Trò chơi khu công viên nước</label>
                        <select id="cvnuoc" style="width:200px">
                            <?php
                            if (isset($data['cvnuoc']) && $data['cvnuoc'] != null) {
                                while ($row = mysqli_fetch_array($data['cvnuoc'])) {
                            ?>
                            <option value="<?php echo $row['TieuDe'] ?>"><?php echo $row['TieuDe'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <script>
                        var cbocvnuoc = document.getElementById("cvnuoc");
                        var txtTenVenuoc = document.getElementById("txtTenVe");
                        cbocvnuoc.addEventListener("click", function() {
                            txtTenVenuoc.value = cbocvnuoc.value;
                        });
                        </script>
                    </td>
                    <td>
                        <label for="captreo">Các tuyến các treo</label>
                        <select id="captreo" style="width:200px">
                            <?php
                            if (isset($data['captreo']) && $data['captreo'] != null) {
                                while ($row = mysqli_fetch_array($data['captreo'])) {
                            ?>
                            <option value="<?php echo $row['TenCapTreo'] ?>"><?php echo $row['TenCapTreo'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <script>
                        var cbocaptreo = document.getElementById("captreo");
                        var txtTenVetreo = document.getElementById("txtTenVe");
                        cbocaptreo.addEventListener("click", function() {
                            txtTenVetreo.value = cbocaptreo.value;
                        });
                        </script>
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