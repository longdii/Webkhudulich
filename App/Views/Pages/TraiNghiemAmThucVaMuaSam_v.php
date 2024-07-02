<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/TraiNghiemAmThucVaMuaSam.css">
    <link rel="stylesheet" href="http://localhost./WebKhuVuiChoi/Public/Css/TraiNghiemCapTreoNuHoang.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet"
        href="http://localhost/Webkhuvuichoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="aside">
        <h1>Ẩm Thực Và Mua Sắm - Sun World Hạ Long</h1>
        <div class="sub_aside">
            <a href="http://localhost/WebKhuVuiChoi/TrangChuNguoiDung">Trang chủ</a><i class="ti-angle-right"></i>
            <a href="http://localhost/WebKhuVuiChoi/trainghiemtong">Trải Nghiệm</a><i class="ti-angle-right"></i>

            <div class="thanhmenu">
                <div style="padding: 5px;"><a href="">Ẩm thực và mua sắm</a> <i class="ti-angle-down"></i></div>
                <div class="menu_Trongha">
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienNuoc">Công Viên
                            Nước</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienRong">Công Viên
                            Rồng</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCapTreoNuHoang">Cáp Treo Nữ
                            Hoàngvà Khu Đồi Huyền Bí</a></div>
                    <div class="menu_chu"><a href="#">Bãi biển Sun World</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemHaiDang">Hải Đăng Sun
                            World</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemPhoCo">Kiosk Phố Cổ Sun
                            World</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content_atvms">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12">
                    <div class="content_atvms_tieude">
                        <h1 style="padding-top: 20px;">Các địa điểm vui chơi ăn uống ở Hạ Long: TOP các nhà hàng NGON
                            NHẤT</h1>
                        <div class="content_atvms_tieude_icon">
                            <div class="content_atvms_tieude_icon_thich">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <span style="color: #ffff">Thích</span>
                            </div>
                            <div class="content_atvms_tieude_icon_share">
                                <i class="ti-sharethis"></i>
                                <span>Share</span>
                            </div>
                        </div>
                        <div class="ke">
                            &nbsp;
                        </div>
                        <div class="content_atvms_tieude_noidung">
                            <span><i>
                                    Với những bạn đi du lịch Hạ Long tự túc, việc tìm hiểu <b>các địa điểm vui chơi ăn
                                        uống ở Hạ Long</b>
                                    là điều thực sự cần thiết. Trong bài viết dưới đây, Sun World sẽ chia sẻ các thông
                                    tin về: địa
                                    chỉ, giờ mở cửa, giá, đặc điểm ẩm thực và không gian của các nhà hàng ăn uống NGON
                                    NHẤT tại các
                                    điểm vui chơi ở Hạ Long.
                                </i>
                            </span>
                        </div>
                        <img src="http://localhost/WebKhuVuiChoi/Public/Images/captreo_img/banneramthuc.png" width="95%"
                            alt="">
                        <div><span><i>Hạ Long nổi tiếng với hải sản tươi ngon được chế biến theo phong cách độc
                                    đáo</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid wide">
            <div class="row">
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                <div class="col l-12">
                    <div class="content_atvms_nhahang">
                        <h2>Địa điểm ăn uống tại khu vui chơi Sun World</h2>
                        <div class="content_atvms_nhahang_thongtin">
                            <div style="margin-bottom: 5px;"><span>
                                    <h1><?php echo $row['TenAmThuc'] ?></h1>
                                </span></div>
                            <div style="margin-bottom: 5px;"><span><b>Địa chỉ:</b>
                                    <?php echo $row['DiaChiAmThuc'] ?></span></div>
                            <div><span><b>Giờ mở cửa:</b></span></div>
                            <div style="margin-left: 30px;"><span>Thứ 2 – thứ 6: 14h00 – 22h00</span></div>
                            <div style="margin: 0 0 5px 30px;"><span>Thứ 7 và Chủ nhật: 09h00 – 22h00</span></div>
                            <div style="width: 95%; text-align:justify-content "><span><b>Đặc điểm ẩm thực:
                                    </b><?php echo $row['MoTaAmThuc'] ?></span>
                            </div>
                            <div class="content_atvms_nhahang_img"
                                style="background-image: url(http://localhost/WebKhuVuiChoi/Public/Images/captreo_img/<?php echo $row['AnhAmThuc'] ?>);">
                            </div>
                        </div>
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