<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/QuanLiDonHang.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/fonts/themify-icons/themify-icons.css">
    <title>Quản Lý Đơn Hàng</title>
</head>
<body>
<div class="doashbox">
<div class="sub-doashbox">
                <div class="form-doashbox" id="thongtintaikhoan">
                    <i class="ti-user"></i>
                    <a href="/WebKhuVuiChoi/thongtintaikhoan">Thông Tin Tài Khoản</a>
                </div>
                <div class="form-doashbox" id="quanlydonhang">
                    <i class="ti-shopping-cart"></i>
                <a href="/WebKhuVuiChoi/quanlydonhang">Quản Lý Đơn Hàng</a>
                </div>
                <div class="form-doashbox">
                    <i class="ti-shift-right"></i>
                    <a  href="/WebKhuVuiChoi/dangnhap">Đăng Xuất</a>
                </div>
            </div>
        </div>
    <div class="noidung">
            <div class="bang">
                <div class="sub-noidung">
                   <p class="title"><strong>Quản lý đơn hàng</strong></p>
                   <div class="noidung-product">  
                        <p>ID</p>   
                        <p id="title-product">Tên Vé</p>
                        <p id="soluong">Số lượng</p>
                        <p id="dongia">Đơn Giá</p>
                        <p id="thanhtien">Thành Tiền</p>
                        <p id="ngay">Ngày Đặt</p>
                   </div>
                   <?php
                    if(isset($data['dulieu']) and $data['dulieu']!=null){
                        $i=0;
                        while($row=mysqli_fetch_array($data['dulieu'])){
                            ?>
                   <div class="product">   
                        <p><?php echo ++$i ?></p> 
                        <p id="title-product"><?php echo $row['TenVe'] ?></p>
                        <p id="soluong"><?php echo 'X'.$row['SoLuong'] ?></p>
                        <p id="dongia"><?php echo number_format($row['DonGia']).' đ' ?></p>
                        <p id="thanhtien"><?php echo number_format($row['ThanhTien']).' đ' ?></p>
                        <p id="ngay"><?php echo date('d/m/Y',strtotime($row['Ngay'])) ?></p>
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

