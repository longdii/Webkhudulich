<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/DangKi.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <title>Đăng Kí</title>
</head>
<body>
<form action="/WebKhuVuiChoi/dangki/themmoi" method="post">
        <div class="noidung">
            <div class="bang">
            <p class="title"><strong>Thành viên mới</strong></p>
            <p class="title1"><strong>Đăng ký</strong></p>
                <div class="sub-noidung">
                    <div class="left">
                        <div class="form-group">
                            <p class="title"><strong>Email</strong></p>
                            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="txtEmail" required oninvalid="ktra(this)">
                        </div>
                    
                        <div class="form-group">
                            <p class="title"><strong>Mật khẩu</strong></p>
                            <input type="password" class="form-control" id="mk" placeholder="Nhập mật khẩu" name="txtMatkhau" required oninvalid="ktra(this)">
                        </div>
                        <div class="form-group">
                            <p class="title"><strong>Nhập lại mật khẩu</strong></p>
                            <input type="password" class="form-control" id="nhaplaimk" placeholder="Nhập lại mật khẩu" name="txtnhaplaimk" required oninvalid="ktra(this)">
                        </div>
                        <input id="dangki" type="submit" name="btndangki" value="Đăng Kí">
                        <div class="group-add">
                            <span>Đã có tài khoản</span>
                            <a href="/WebKhuVuiChoi/dangnhap">Đăng nhập</a>
                        </div>

                    </div>
                    <div class="right">
                    <div class="form-group">
                            <p class="title"><strong>Họ và tên</strong></p>
                            <input type="text" class="form-control" id="hoten" placeholder="Nhập họ tên" name="txtHoten" required oninvalid="ktra(this)">
                        </div>
                        <div class="form-group">
                            <p class="title"><strong>Địa chỉ</strong></p>
                            <input type="text" class="form-control" id="dc" placeholder="Nhập địa chỉ" name="txtDiachi" onblur="ktra(diachi)" required oninvalid="ktra(this)">
                        </div>
                        <div class="form-group">
                            <p class="title"><strong>Số điện thoại</strong></p>
                            <input type="tel" class="form-control" id="sdt" placeholder="Nhập số điện thoại" name="txtDienthoai" pattern="[0-9]{10}" required oninvalid="ktra(this)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</body>
</html>
<script>
    var MatKhau=document.getElementById("mk");
    var NhapLaiMK=document.getElementById("nhaplaimk");
    var HoTen=document.getElementById("hoten");
    var DiaChi=document.getElementById("dc");
    var DienThoai=document.getElementById("sdt");
    var Email=document.getElementById("email");
    var trungmk = document.createElement("span");
trungmk.textContent = "Mật khẩu nhập lại không trùng khớp!!!";
trungmk.style.color="red";

NhapLaiMK.onchange=function(){
    if(NhapLaiMK.value!=MatKhau.value){
        NhapLaiMK.style.borderColor="red";
        NhapLaiMK.parentNode.insertBefore(trungmk, NhapLaiMK.nextSibling);
    }else{
        NhapLaiMK.style.borderColor="#ccc";
  NhapLaiMK.parentNode.removeChild(trungmk);
    }
}

MatKhau.onchange=function(){
    if(NhapLaiMK.value!=MatKhau.value){
        NhapLaiMK.style.borderColor="red";
        NhapLaiMK.parentNode.insertBefore(trungmk, NhapLaiMK.nextSibling);
    }else{
        NhapLaiMK.style.borderColor="#ccc";
  NhapLaiMK.parentNode.removeChild(trungmk);
    }
}
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
