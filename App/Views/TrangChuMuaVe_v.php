<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="http://localhost/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/masterlayout_admin.css">
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
                            <a href="http://localhost/WebKhuVuiChoi/trainghiemtong">
                                <img src="https://ticket.sunworld.vn/wp-content/uploads/2022/04/SW_logo-new-HA-LONG-01.png"
                                    alt="Logo" class="header__navbar-img">
                            </a>

                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-msg"><span class="header__navbar-msg1">Xin chào, </span><span
                                    class="header__navbar-msg2"><?php echo $data['email'] ?></span></span>
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
        <?php
        include_once './App/Views/Pages/' . $data['page'] . '.php';
        ?>
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
                            Tầng 21, Tòa nhà Viettinbank, 36 Trần <br> Quốc Toản, Quận Hải Châu, TP Đà <br> Nẵng, Việt
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
</body>

</html>