<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/Home.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/themify-icons/themify-icons.css">
    <title>Document</title>
</head>

<body>
    <div class="noidung">
        <div class="content1">
            <div class="sub-content1">
                <h1>SUN WORLD HA LONG</h1>
                <a href=""><i class="ti-location-pin"></i> Địa Điểm</a>
                <p>Số 9 đường Hạ Long, phường Bãi Cháy, thành phố Hạ Long, tỉnh Quảng Ninh, Việt Nam.</p>
                <div class="yt-content">
                    <iframe style="border-radius: 5px 0 0 5px;" width="560" height="264" src="https://www.youtube.com/embed/5A-o0tAjzw8?si=KxEnZ2Sbb8gR-J6n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="gt-content">
                        <p>Quần thể du lịch giải trí Sun World Ha Long là sản phẩm của Tập đoàn Sun Group mang đến muôn
                            vàn trải nghiệm:</p>
                        <p>• Phấn khích với các trò chơi cảm giác mạnh tại Công Viên Rồng – Dragon Park</p>
                        <p>• Thách thức nắng hè tại Công Viên Nước Typhoon Water Park</p>
                        <p>• Thích thú với cáp treo Nữ Hoàng chiêm ngưỡng Vịnh Hạ Long</p>
                        <p>• Hòa mình trong không gian mang đậm phong cách Nhật Bản tại đồi Ba Đèo</p>
                        <p>• Thư thái trong làn nước xanh mát tại bãi biển Sun World</p>
                        <p>• Thưởng thức ẩm thực và thỏa thích mua sắm</p>
                        <a href="">Xem Thêm</a>
                    </div>
                </div>
                <div class="group">
                    <?php
                    $i = 5;
                    if (isset($data['dulieu']) and $data['dulieu'] != null) {
                        while ($row = mysqli_fetch_array($data['dulieu'])) {
                            $i--;
                            if ($i <= 0) break;
                    ?>
                            <div class="form-group">
                                <a href="#" class="sub-form-group">
                                    <img src="/WebKhuVuiChoi/Public/Images/<?php echo $row['AnhVe'] ?>" alt="">
                                    <div class="title">
                                        <p class="sub-title"><?php echo $row['TieuDe'] ?></p>
                                        <p class="sub-content"><?php echo $row['MoTa'] ?></p>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="content2">
            <div class="sub-content2">
                <div class="bando-content">
                    <div class="title">Bản Đồ</div>
                    <a href=""><img src="/WebKhuVuiChoi/Public/Images/Screen-Shot-2018-10-18-at-12.43.02.png" alt=""></a>
                </div>
                <div class="tintuc-content">
                    <div class="title">Tin Tức</div>
                    <div class="group">
                        <?php
                        $i = 5;
                        if (isset($data['tintuc']) and $data['tintuc'] != null) {
                            while ($row = mysqli_fetch_array($data['tintuc'])) {
                                $i--;
                                if ($i <= 0) break;
                        ?>
                                <div class="form-group">
                                    <a href="#" class="sub-form-group">
                                        <img src="/WebKhuVuiChoi/Public/Images/<?php echo $row['AnhVe'] ?>" alt="">
                                        <div class="title">
                                            <p class="sub-title"><?php echo $row['TieuDe'] ?></p>
                                            <p class="sub-content"><?php echo $row['MoTa'] ?></p>
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
