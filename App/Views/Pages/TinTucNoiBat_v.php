<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/TinTucNoiBat.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/grid.css">
    <title>Tin Nổi Bật - Sun World Ha Long</title>
  
</head>
<body>
    <div class="aside">
        <h1>Tin nổi bật - Sun World Ha Long</h1>
        <div class="sub-aside">
            <a href="">Trang Chủ</a><i class="ti-angle-right"></i>
            <a href="">Tin Nổi Bật</a>
        </div>
    </div>

    <div class="noidung">
        <div class="grid wide">
            <div class="row">
                <div class="noidung-right">
                    <span>Bộ lọc:</span> &nbsp;&nbsp;
                    <span style="color:#8b8b8b">Xem thêm</span>&nbsp;&nbsp;
                    <span>Ngày</span>&nbsp;
                    <span style="color:#8b8b8b; margin-bottom: 3px;">|</span>&nbsp;&nbsp;
                    <i class="ti-layout-grid2-alt"></i>&nbsp;&nbsp;
                    <i class="ti-layout-list-thumb-alt"></i>
                </div>
                <?php
                    if(isset($data['dulieu'])&&$data['dulieu']!=null)
                    {
                    $i=0;
                    while($row=mysqli_fetch_array($data['dulieu']))
                    {
                ?> 
                <div class="col l-3">
                    <div class="content_hop">
                        <div class="content_img"
                            style="background-image: url(http://localhost/WebKhuVuiChoi/Public/Images/<?php echo $row['AnhVe']?>);">
                        </div>
                        <h2><?php echo $row['TieuDe']?><h2> 
                        <div class="content_hop_tt">
                            <span style="width: 100px; height: 20px"> Tin Nổi Bật </span>
                            <span style="margin-left: 10px;">|</span>
                            <i class="ti-calendar"></i>
                            <span>2023</span>
                        </div>        
                        <p><?php echo $row['MoTa'] ?></p>
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
