<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/TraiNghiemCongVienRong.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/grid.css">
    <title>Document</title>
    <title>Document</title>

</head>

<body>
    <div class="aside">
        <h1 style="text-align: center">Công Viên Rồng - Sun World Hạ Long</h1>
        <div style="text-align: center" class="next-aside">
            <a href="">Trang Chủ</a><i class="ti-angle-right"></i>
            <a href="">Trải Nghiệm</a><i class="ti-angle-right"></i>
            <a id="cvrong" href="#">Công Viên Rồng</a><i class="ti-angle-down"></i>
            <div id="sub-trainghiem" class="sub-trainghiem">
                <a href="/WebKhuVuiChoi/TraiNghiemCongVienNuoc">+ Công Viên Nước</a>
                <a href="">+ Bảo Hải Linh Thông Tự</a>
                <a href="/WebKhuVuiChoi/TraiNghiemAmThucVaMuaSam">+ Ẩm Thực Và Mua Sắm</a>
                <a href="">+ Bãi Biển Sun World</a>
                <a href="/WebKhuVuiChoi/TraiNghiemHaiDang">+ Hải Đăng Sun World</a>
                <a href="/WebKhuVuiChoi/TraiNghiemPhoCo">+ Kiosk Phố Cổ Sun World</a>
                <a href="/WebKhuVuiChoi/TraiNghiemCapTreoNuHoang">+ Cáp Treo Nữ Hoàng Và Khu Đồi Huyền
                    Bí</a>
            </div>
        </diV>
    </div>


    <div class="noidung">
        <div class="grid wide">
            <div class="row">
                <div class="content_cvr-right">
                    <span>Bộ lọc:</span> &nbsp;&nbsp;
                    <span style="color:#8b8b8b">Xem thêm</span>&nbsp;&nbsp;
                    <span>Ngày</span>&nbsp;
                    <span style="color:#8b8b8b; margin-bottom: 3px;">|</span>&nbsp;&nbsp;
                    <i class="ti-layout-grid2-alt"></i>&nbsp;&nbsp;
                    <i class="ti-layout-list-thumb-alt"></i>
                </div>
                <?php
                if (isset($data['dulieu']) && $data['dulieu'] != null) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($data['dulieu'])) {
                ?>
                        <div class=" col l-4">
                            <a href="">
                                <div class="content_hop">
                                    <div class="noidung_img"><img src="/webkhuvuichoi/Public/Images/<?php echo $row['AnhVe'] ?>">
                                    </div>

                                    <div class="title"><b><?php echo $row['TieuDe'] ?></b></div>
                                    <div class="content_date">
                                        <span style="width: 100px; height: 70px">Công Viên Rồng</span>
                                        <span style="margin-left: 10px;">|</span>
                                        <i class="ti-calendar"></i>
                                        <span>20/02/2020</span>
                                    </div>
                                    <p class="content1"><?php echo $row['MoTa'] ?></p>
                            </a>
                        </div>
            </div>

    <?php
                    }
                }
    ?>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
<script>
    i = 0;
    var cvr = document.getElementById("cvrong");
    cvr.onclick = function() {
        if (i == 0) {
            document.getElementById("sub-trainghiem").style.display = "flex";
            i++;
        } else {
            document.getElementById("sub-trainghiem").style.display = "none";
            i--;
        }
    }
</script>
