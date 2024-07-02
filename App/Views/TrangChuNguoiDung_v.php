<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/TrangChuNguoiDung.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <style>
    #muave>a::before {
        content: url(http://localhost/WebKhuVuiChoi/Public/Images/ticke.png);
        display: inline-block;
        margin-right: 5px;
    }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-top">
            <div class="sub-header-top">
                <div class="language">
                    <a href="" id="vn">VN</a>
                    <a href="" id="en">EN</a>
                </div>

                <div class="search">
                    <a href=""><i class="ti-search"></i></a>
                </div>
                <div class="social">
                    <a href=""><i class="ti-facebook"></i></a>
                    <a href=""><i class="ti-youtube"></i></a>
                    <a href=""><i class="ti-instagram"></i></a>
                </div>

            </div>
        </div>

        <div class="header-bottom">
            <div class="sub-left">
                <ul>
                    <li id="trangchu"><a href="http://localhost/WebKhuVuiChoi/TrangChuNguoiDung">Trang Chủ</a></li>

                    <li><a href="http://localhost/WebKhuVuiChoi/trainghiemtong">Trải Nghiệm</a></li>
                </ul>
            </div>

            <div class="sub-icon">
                <a href="http://localhost/WebKhuVuiChoi/thongtintaikhoan"><img
                        src="http://localhost/WebKhuVuiChoi/Public/Images/HL.png" alt=""></a>
            </div>

            <div class="sub-right">
                <ul>
                    <li id="tintuc">
                        <a href="">Tin Tức</a>
                        <div id="tintuc-content" class="sub-right-content">
                            <a href="http://localhost/WebKhuVuiChoi/TinTuc">Tin Nổi Bật</a>
                            <a href="http://localhost/WebKhuVuiChoi/TinSuKien">Sự Kiện</a>
                            <a href="http://localhost/WebKhuVuiChoi/TinKhuyenMai">Khuyến Mãi</a>
                        </div>
                    </li>
                    <li><a href="">_______</a></li>
                    <li id="muave"><a href="http://localhost/WebKhuVuiChoi/Muave_c">Mua Vé</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="aside">
        <?php
        include_once './App/Views/Pages/' . $data['page'] . '.php';
        ?>
    </div>

    <div class="footer"
        style="background: url(http://localhost/WebKhuVuiChoi/Public/Images/bg-footer.png);background-size: cover;">
        <div class="footer-top">
            <div class="logo"><img src="http://localhost/WebKhuVuiChoi/Public/Images/logo_halong.png" alt=""></div>
            <div class="left">
                <ul>
                    <li><a href="">Trang Chủ</a></li>
                    <li><a href="http://localhost/WebKhuVuiChoi/trainghiemtong">Trải Nghiệm</a></li>
                    <li><a href="">Tin Tức</a></li>
                    <!-- <li><a href="">Dịch vụ</a></li> -->
                </ul>
            </div>
            <div class="right">
                <div class="title">
                    <p>Liên Hệ</p>
                </div>
                <div class="content">
                    <p>Sun World Ha Long</p>
                    <p>Địa chỉ:<span> Số 9 đường Hạ Long, phường Bãi Cháy, thành phố Hạ Long, tỉnh Quảng Ninh</span></p>
                    <p>Hotline: 0989 200 699 | 0203 223 8888</p>
                    <p>Email:<span><a href=""> halong@sunworld.vn</a></span></p>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <p>Bản quyền thuộc về SunGroup</p>
            <div class="social">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-youtube" id="icon-youtube"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
            </div>
        </div>



    </div>
</body>

</html>
<script>
var tintuc = document.getElementById("tintuc");
tintuc.onmousemove = function() {
    document.getElementById("tintuc-content").style.display = "Flex";
}
tintuc.onmouseout = function() {
    document.getElementById("tintuc-content").style.display = "none";
}
</script>