<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost./WebKhuVuiChoi/Public/Css/TraiNghiemCapTreoNuHoang.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <title>GioiThieu</title>
</head>

<body>
    <div class="aside">
        <h1>Cáp treo Nữ hoàng và Khu đồi Huyền bí - Sun World Ha Long</h1>
        <div class="sub-aside">
            <a href="http://localhost/WebKhuVuiChoi/TrangChuNguoiDung">Trang Chủ</a><i class="ti-angle-right"></i>
            <a href="http://localhost/WebKhuVuiChoi/trainghiemtong">Trải Nghiệm</a><i class="ti-angle-right"></i>
            <div class="thanhmenu">
                <div style="padding: 5px;"><a href="">Cáp Treo Nữ Hoàng Và Khu Đồi Huyền Bí</a><i class="ti-angle-down"></i></div>
                <div class="menu_Trongha">
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienNuoc">Công Viên Nước</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienRong">Công Viên Rồng</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemAmThucVaMuaSam">Ẩm Thực Và Mua Sắn</a></div>
                    <div class="menu_chu"><a href="#">Bãi biển Sun World</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemHaiDang">Hải Đăng Sun World</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemPhoCo">Kiosk Phố Cổ Sun World</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content_ctnh">
        <div class="grid wide">
            <div class="row">
                <div class="content_ctnh-right">
                    <span>Bộ lọc:</span> &nbsp;&nbsp;
                    <span style="color:#8b8b8b">Xem thêm</span>&nbsp;&nbsp;
                    <span>Ngày</span>&nbsp;
                    <span style="color:#8b8b8b; margin-bottom: 3px;">|</span>&nbsp;&nbsp;
                    <i class="ti-layout-grid2-alt"></i>&nbsp;&nbsp;
                    <i class="ti-layout-list-thumb-alt"></i>
                </div>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                        <div class="col l-3">

                            <div class="content_hop">
                                <div class="content_img" style="background-image: url(http://localhost/WebKhuVuiChoi/Public/Images/captreo_img/<?php echo $row['AnhCapTreo'] ?>);">
                                </div>
                                <h2><?php echo $row['TenCapTreo'] ?></h2>
                                <div class="content_hop_tt">
                                    <span style="width: 100px; height: 70px">Cáp Treo Nữ Hoàng Và Khu Đồi Huyền Bí</span>
                                    <span style="margin-left: 10px;">|</span>
                                    <i class="ti-calendar"></i>
                                    <span>20/02/2020</span>
                                </div>
                                <p><?php echo $row['MoTaCapTreo'] ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>





</body>

</html>