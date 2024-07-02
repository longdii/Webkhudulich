

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/DangNhap.css">
    <link rel="stylesheet" href="http://localhost/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <title>Đăng Nhập</title>
</head>
<body>
    <form method="post" action="http://localhost/WebKhuVuiChoi/dangnhap/KiemTraDangNhap" >
    <div class="noidung">
        <div class="bang">
            <div class="anh"></div>
              <img src="http://localhost/WebKhuVuiChoi/Public/Images/img-17y312.png" alt="">
        <div class="sub-noidung">
            <p class="title"><strong>Chào mừng</strong></p>
            <p class="title1"><strong>Đăng nhập</strong></p>
            <div class="form-group">
                <p class="title"><strong>Email</strong></p>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" name="txtemail" required oninvalid="ktra(this)">
            </div>
            <div class="form-group">
                <p class="title"><strong>Mật khẩu</strong></p>
                <input type="password" class="form-control" id="pass" placeholder="Nhập mật khẩu" name="txtpass" required oninvalid="ktra(this)">
            </div>
            <div class="item">
                <a href="http://localhost/WebKhuVuiChoi/dangki">Đăng ký</a>
                <a href="">Quên mật khẩu</a>
            </div>
            <input id="dangnhap" type="submit" name="btndangnhap" value="Đăng Nhập">
        </div>
      

        </div>
    </div>

    </form>
</body>
</html>
<script>
    function ktra(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Chưa điền thông tin!!');
    }
    else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('Sai cú pháp');
    }else {
       textbox.setCustomValidity('');
    }
    return true;
}
</script>