<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/ThanhToan.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/themify-icons/themify-icons.css">
    <title>Thanh Toán</title>
</head>
<body>
    <form action="/WebKhuVuiChoi/thanhtoan/xacnhan" method="post">
         <div id="setion">
                <div class="setion-title">
                    <p>HA LONG - NGÀY SỬ DỤNG: </p>
                </div>
                <div class="content">
                    <div class="content-left">  
                        <div class="content-left1">
                            <p>Thông tin khách hàng</p>
                            <div class="sub-content-left1">
                               <div class="left">
                                <div class="form-group">
                                    <p>Họ và tên<span style="color: red;">*</span></p>
                                    <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['$hoten'] ?>" name="email" readonly>
                                  </div>

                                  <div class="form-group">
                                  <p>Email<span style="color: red;">*</span></p>
                                    <input type="email" class="form-control" id="pwd" value="<?php echo $_SESSION['$email'] ?>" name="pwd" readonly>
                                  </div>
                                </div>
                               <div class="right">
                                <div class="form-group">
                               <p>Số điện thoại<span style="color: red;">*</span></p>
                                <input type="tel" class="form-control" id="pwd" value="<?php echo $_SESSION['$dienthoai'] ?>" name="pwd" readonly>
                              </div>
                              <div class="form-group">
                              <p>Địa Chỉ<span style="color: red;">*</span></p>
                                <input type="text" class="form-control" id="pwd" value="<?php echo $_SESSION['$diachi'] ?>" name="pwd" readonly>
                              </div>
                            </div>
                            
                               
                            </div>
                        </div>

                        <div class="content-left2">
                            <p>Các phương thức thanh toán hỗ trợ</p>
                            <div class="sub-content-left1">
                               <div class="left">
                                <div class="form-group">
                                    <img src="/WebKhuVuiChoi/Public/Images/1.png" alt="">
                                    <p>Thanh toán quét mã <span style="color: red;">VN</span> <span style="color: blue;">PAY</span> <sup style="color: red;">QR</sup></p>
                                  </div>

                                  <div class="form-group">
                                    <img src="/WebKhuVuiChoi/Public/Images/2.png" alt="">
                                  <p>Thẻ ATM và tài khoản ngân hàng</p>
                                  </div>
                                </div>
                               <div class="right">
                                <div class="form-group">
                                    <img src="/WebKhuVuiChoi/Public/Images/4.png" alt="">
                              <p>Ví điện tử VNPAY</p>
                              </div>
                              <div class="form-group">
                                <img src="/WebKhuVuiChoi/Public/Images/3.png" alt="">
                                <p>Thẻ thanh toán quốc tế</p>
                              </div>
                            </div>
                            
                               
                            </div>
                        </div>
                    </div>

                    <div class="content-right">
                        <div class="title">
                            <p>Đơn Hàng</p>
                        </div>
                        <div class="form-group" id="NSD">
                            <p>Ngày sử dụng : <?php echo date('d/m/Y') ?></p>
                        </div>

                        <div id="dichvu" style="margin: 0 20px;">
                        <?php
                        $tongtien=0;
                    if(isset($data['dulieu']) and $data['dulieu']!=null){
                        while($row=mysqli_fetch_array($data['dulieu'])){
                            $tongtien=$tongtien+$row['ThanhTien'];
                            ?>
                            <div class="form-group-dichvu">
                            <div class="left">
                                <p style="text-align: left;width: fit-content;"><?php echo $row['TenVe'] ?></p>
                            </div>
                           <div class="right">
                            <p><?php echo 'X'.$row['SoLuong'] ?></p>
                            <p><?php echo number_format($row['ThanhTien']).' đ' ?></p>
                           </div>
                            </div>   
                            <?php        
                        }
                    }
                    ?>                    
                        </div>


                        <div class="form-group" id="thanhtien">
                            <p>Thành tiền</p>
                            <p><?php echo number_format($tongtien).' đ' ?></p>
                        </div>

                        <div class="form-group" id="giamgia">
                            <p>Giảm Giá</p>
                            <p>0 đ</p>
                        </div>

                        <div class="form-group" id="tongtien">
                            <p>Tổng tiền</p>
                            <p><?php echo number_format($tongtien).' đ' ?></p>
                        </div>
                        <div class="magiamgia">
                            <input  placeholder="Mã khuyến mãi" name="txtkhuyenmai" >
                            <button name="btnkhuyenmai">Áp Dụng</button>
                        </div>
                        <input id="xacnhan" class="thanhtoan" type="submit" name="btnxacnhan" value="Xác Nhận Thanh Toán">
                        <input id="quaylai" class="thanhtoan" type="submit" name="btnquaylai" value="Quay Lại Mua Vé">
                    </div>
                </div>
            </div>
                </form>
</body>
</html>
