<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost./WebKhuVuiChoi/Public/Css/TraiNghiemPhoCo.css">
    <link rel="stylesheet" href="http://localhost./WebKhuVuiChoi/Public/Css/TraiNghiemCapTreoNuHoang.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="http://localhost/Website_khu_vui_choi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>GioiThieu</title>
</head>

<body>
    <div class="aside">
        <h1>Dãy Kiosk Phố cổ Sun World - Sun World Ha Long</h1>
        <div class="sub-aside">
            <a href="http://localhost/WebKhuVuiChoi/TrangChuNguoiDung">Trang Chủ</a><i class="ti-angle-right"></i>
            <a href="http://localhost/WebKhuVuiChoi/trainghiemtong">Trải Nghiệm</a><i class="ti-angle-right"></i>
            <a href="">Kiosk Phố cổ Sun World</a><i class="ti-angle-down"></i><i class="ti-angle-right"></i>
            <div class="thanhmenu">
                <div style="padding: 5px;"><a href="">Dãy Kiosk Phố cổ Sun Worl</a></div>
                <div class="menu_Trongha">
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienNuoc">Công Viên Nước</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCongVienRong">Công Viên Rồng</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemCapTreoNuHoang">Cáp Treo Nữ Hoàng và Khu Đồi Huyền Bí</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemAmThucVaMuaSam">Ẩm Thực Và Mua Sắn</a></div>
                    <div class="menu_chu"><a href="#">Bãi biển Sun World</a></div>
                    <div class="menu_chu"><a href="http://localhost/WebKhuVuiChoi/TraiNghiemHaiDang">Hải Đăng Sun World</a></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="content_pc">
        <div class="grid wide">
            <div class="row">
                <?php
                    if(isset($data['dulieu'])&&$data['dulieu']!=null){
                    while($row=mysqli_fetch_array($data['dulieu'])){
                ?>
                    <div class="col l-12">
                    <div class="content_pc_hop">
                        <div class="content_pc_hop_chu">
                            <h1><?php echo $row['TenPhoCo']?></h1>
                            <span><?php echo $row['MoTaPhoCo']?></span>
                            <div class="content_pc_hop_footer">
                                <div class="content_pc_hop_thich">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <span style="color: #ffff">Thích</span>
                                </div>
                                <div class="content_pc_hop_share">
                                    <i class="ti-sharethis"></i>
                                    <span>Share</span>
                                </div>
                            </div>
                        </div>
                        <div class="content_img_pc" style="background-image: url(http://localhost/WebKhuVuiChoi/Public/Images/captreo_img/<?php echo $row['AnhPhoCo']?>);" ></div>   
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