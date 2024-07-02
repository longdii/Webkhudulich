
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/TrangChuCaNhan.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <title>Document</title>
</head>
<body>
        <div class="header">

        <div class="container">
            <div class="left">
            <div class="menu">
            <button id="btnmenu" onclick="menufunction()">
                    <i class="ti-menu"></i>
                    <ul id="sub-menu">
                        <li>
                            <div class="content" style="border-bottom: 0.1px dashed rgb(209, 209, 209);height: 60px;">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/logo_halong.png" alt="">
                                <div><p>Trang Chu</p></div>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <div><img src="http://localhost/WebKhuVuiChoi/Public/Images/site-2.jpg" alt=""></div>
                            <div><p>Asia Park</p></div>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/DJI_0971-1.jpg" alt="">
                                <p>Ba Na Hills</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/site-1.jpg" alt="">
                                <p>Ba Den Mountain</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/site2.jpg" alt="">
                                <p>Hon Thom</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/banner1.png" alt="">
                                <p>Ha Long</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/001.jpg" alt="">
                                <p>Fansipan Legend</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/277674793_507229567554731_3483001761365827116_n.jpg" alt="">
                                <p>Cat Ba</p>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <img src="http://localhost/WebKhuVuiChoi/Public/Images/KTS-1.jpg" alt="">
                                <p>Kiss The Stars</p>
                            </div>
                        </li>
                    </ul>

                </button>
            </div>

            <div class="logo">
                <img src="http://localhost/WebKhuVuiChoi/Public/Images/logo_hanglong2.png" alt="">
            </div>
        </div>
        <div class="right">
            <div class="Name">
                <i class="ti-user"></i>
                <p><?php echo $_SESSION['$hoten'] ?></p>
            </div>
            <div class="ngonngu">
                    <img id="VN" src="http://localhost/WebKhuVuiChoi/Public/Images/vietnam.png" alt="" onclick="ngongufunction()">
                <div id="EN">
                    <img src="http://localhost/WebKhuVuiChoi/Public/Images/en.png" alt="" onclick="ngonngufunction()">
                    <p style="line-height: 32px;margin-left: 10px;">EN</p>
                </div>  

                <i class="ti-angle-down"></i>
            </div>
        </div>
        </div>

        </div>
       
    <div class="aside">
        <?php 
         include_once './App/Views/Pages/'.$data['page'].'.php';
        ?>
    </div>

        <div class="footer">
                <div class="footer-top">
                    <div class="form-group" id="left">
                        <p class="title">Văn phòng SUN WORLD Hà Nội</p>
                        <div class="content">
                            <i class="ti-location-pin" ></i><span>Tầng 2, Toà nhà Ancora, Số 3 Lương Yên, Hai Bà Trưng, Hà Nội</span>
                        </div>
                    </div>
    
                    <div class="form-group" id="right">
                        <p class="title">Văn phòng SUN WORLD Đà Nẵng</p>
                        <div class="content">
                            <i class="ti-location-pin" ></i><span>Tầng 21, Tòa nhà Vietinbank, 36 Trần Quốc Toản, Quận Hải Châu, TP Đà Nẵng, Việt Nam</span>
                        </div>
                    </div>
                    <div class="form-icon">
                        <img src="http://localhost/WebKhuVuiChoi/Public/Images/ic12.png" alt="">
                        <img src="http://localhost/WebKhuVuiChoi/Public/Images/ic14.png" alt="">
                    </div>
                </div>
              
                <div class="footer-bottom">
                    <p>© Bản quyền website thuộc về Sun World</p>
                    <img src="http://localhost/WebKhuVuiChoi/Public/Images/logo-2.png" alt="">
                </div>
            </div>
    </div>
</body>
</html>
<script>
    i=0;
    function menufunction(){
        if(i==0){
           document.getElementById("sub-menu").style.display="block";i++;
        }else{
            document.getElementById("sub-menu").style.display="none";i--;
        }   
    }
    j=0;
    function ngongufunction(){
        if(j==0){
           document.getElementById("EN").style.display="flex";j++;
        }else{
            document.getElementById("EN").style.display="none";j--;
        }   
    }
</script>
