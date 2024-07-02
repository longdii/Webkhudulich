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
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/masterlayout_admin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Masterlayout</title>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <i class="header__navbar-icon fa-solid fa-list"></i>
                        </li>
                        <li class="header__navbar-item">
                            <img src="https://ticket.sunworld.vn/wp-content/uploads/2022/04/SW_logo-new-HA-LONG-01.png"
                                alt="Logo" class="header__navbar-img">
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-msg"><span class="header__navbar-msg1">Xin chào, </span><span
                                    class="header__navbar-msg2">Admin</span></span>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <i class="header__navbar-icon icon--bell fa-regular fa-bell"></i>
                        </li>
                        <li class="header__navbar-item">

                            <div class="header__user-navbar">
                                <div class="header__user-navbar-icon">
                                    <i class="header__navbar-icon fa-regular fa-user"></i>
                                </div>

                                <div class="header__user-option-list">
                                    <ul>
                                        <li class="header__user-option-item">
                                            <span>Xin chào, <span
                                                    style="font-weight: 600;"><?php echo $data['email'] ?></span></span>
                                        </li>
                                        <li class="header__user-option-item">
                                            <a class="header-user-btn" href="#">Thông tin tài khoản</a>
                                        </li>
                                        <li class="header__user-option-item">
                                            <a class="header-user-btn" href="http://localhost/WebKhuVuiChoi/">Đăng
                                                xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </header>



        <div class="container">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3">
                        <div class="category">
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="http://localhost/WebKhuVuiChoi/HomeAdmin_c" class="category-link">
                                        <i class="category-icon fa-solid fa-house"></i>
                                        Trang chủ
                                    </a>
                                </li>
                                <li class="category-item">
                                    <label for="check" class="category-btn">
                                        <i class="category-icon fa-solid fa-city"></i>
                                        Khu trò chơi
                                    </label>

                                    <input type="checkbox" name="" class="category-input" id="check" hidden>

                                    <ul class="category-option-list">
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/Ve_c" class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-ticket"></i>
                                                Quản lý trò chơi
                                            </a>

                                        </li>

                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/trainghiemcongvienrong_admin"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-dragon"></i>
                                                Công viên rồng
                                            </a>

                                        </li>
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/trainghiemcongviennuoc_admin"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-water-ladder"></i>
                                                Công viên nước
                                            </a>

                                        </li>
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/CapTreoNuHoang_admin_c"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-cable-car"></i>
                                                Cáp treo
                                            </a>

                                        </li>
                                        <!-- <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/TinKhuyenMai_admin" class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-bell-concierge"></i>
                                                Khuyến mãi
                                            </a>
                                        </li>
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/TinKhuyenMai_admin" class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-bell-concierge"></i>
                                                Dịch vụ
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>

                                <li class="category-item">
                                    <label for="check1" class="category-btn">
                                        <i class="category-icon fa-solid fa-tree-city"></i>
                                        Khu tham quan
                                    </label>

                                    <input type="checkbox" name="" class="category-input" id="check1" hidden>

                                    <ul class="category-option-list">
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/AmThucVaMuaSam_admin_c"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-shop"></i>
                                                Ẩm thực và mua sắm
                                            </a>

                                        </li>
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/haidang_admin"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-anchor"></i>
                                                Hải đăng Sun World
                                            </a>

                                        </li>
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/PhoCo_admin_c"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-archway"></i>
                                                Kiosk phố cổ Sun World
                                            </a>
                                        </li>
                                        <li class="category-option-item">
                                            <a href="http://localhost/WebKhuVuiChoi/tinsukien_admin"
                                                class="category-option-link">
                                                <i class="category-option-icon fa-solid fa-calendar-days"></i>
                                                Sự kiện
                                            </a>

                                        </li>
                                    </ul>
                                </li>

                                <li class="category-item">
                                    <a href="http://localhost/WebKhuVuiChoi/tintuc_admin" class="category-link">
                                        <i class="category-icon fa-solid fa-newspaper"></i>
                                        Tin tức nổi bật
                                    </a>
                                </li>
                                <!-- <li class="category-item">
                                    <a href="http://localhost/WebKhuVuiChoi/tintuc_admin" class="category-link">
                                        <i class="category-icon fa-solid fa-bell-concierge"></i>
                                        Dịch vụ
                                    </a>
                                </li> -->
                                <li class="category-item">
                                    <a href="http://localhost/WebKhuVuiChoi/tinkhuyenmai_admin" class="category-link">
                                        <i class="category-icon fa-solid fa-tags"></i>
                                        Khuyến mãi
                                    </a>
                                </li>

                                <li class="category-item">
                                    <a href="http://localhost/WebKhuVuiChoi/Thongke" class="category-link">
                                        <i class="category-icon fa-solid fa-chart-simple"></i>
                                        Thống kê
                                    </a>
                                </li>
                                <li class="category-item">
                                    <a href="http://localhost/WebKhuVuiChoi/taikhoanadmin" class="category-link">
                                        <i class="category-icon fa-solid fa-user-group"></i>
                                        Tài khoản
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-9">
                        <?php
                        include_once './App/Views/Pages/' . $data['page'] . '.php';
                        ?>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <ul class="footer__list">
                    <li class="footer__item">
                        <div class="footer__item-title">
                            Văn phòng SUN WORLD Hà Nội
                        </div>
                        <div class="footer__item-des">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="footer__item-des-detail">
                                Tầng 2, Tòa nhà Ancora, Số 3 Lương Yên,<br> Hai Bà Trưng, Hà Nội
                            </span>
                        </div>
                    </li>
                    <li class="footer__item">
                        <div class="footer__item-title">
                            Văn phòng SUN WORLD Đà Nẵng
                        </div>
                        <div class="footer__item-des">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="footer__item-des-detail">
                                Tầng 21, Tòa nhà Viettinbank, 36 Trần <br> Quốc Toản, Quận Hải Châu, TP Đà <br> Nẵng,
                                Việt
                                Nam
                            </span>
                        </div>
                    </li>
                    <li class="footer__item">
                        <a href="#"><i class="footer__item-fb fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="footer__item-yout fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
                <div class="footer__end">
                    <span class="footer__end-permis">
                        &copy Bản quyền website thuộc về Nhóm 6
                    </span>
                    <img src="https://ticket.sunworld.vn/wp-content/uploads/2022/05/logo-2.png" alt="Logo"
                        class="footer__end-img">
                </div>
            </footer>
        </div>
    </div>
</body>

</html>