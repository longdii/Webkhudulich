<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/base.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/grid.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/reponsive.css">
    <link rel="stylesheet" href="/WebKhuVuiChoi/Public/Css/muave.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">



</head>

<body>
    <form action="/WebKhuVuiChoi/Muave_c/muave" method="post">
        <div class="container__ticket">
            <div class="grid wide">
                <div class="btn">
                    <input class="btn__input" type="submit" name="btnThanhToan" value="Thanh Toán">
                </div>
                <div class="row">
                    <?php
                    if (isset($data['dulieu']) && $data['dulieu'] != null) {
                        $i = 0;
                        while ($row = mysqli_fetch_array($data['dulieu'])) {
                    ?>
                            <div class="col l-3">
                                <div class="ticket">
                                    <div class="ticket__img" style="background-image: url(/WebKhuVuiChoi/Public/images/ve_img/<?php echo $row['AnhVe'] ?>);">
                                    </div>

                                    <span class="ticket__title">
                                        <?php echo $row['TenVe'] ?>
                                        <input type="text" name="txtTenVe-<?php echo $i ?>" value="<?php echo $row['TenVe'] ?>" hidden>
                                    </span>

                                    <div class="ticket__price">
                                        <div class="ticket__price-detail">
                                            <i class="fa-solid fa-circle-info"></i>
                                            Chi tiết
                                        </div>
                                        <span class="ticket__price-money" id="giave-<?php echo $i ?>"><?php echo $row['GiaVe'] ?>
                                            <input type="text" name="txtDonGia-<?php echo $i ?>" value="<?php echo $row['GiaVe'] ?>" hidden>
                                        </span>

                                    </div>
                                    <div class="ticket__action">
                                        <div class="ticket__btn">
                                            <input type="button" class="ticket__btn-item btntru" data-index="<?php echo $i ?>" name="btntru-<?php echo $i ?>" value="-">

                                            <input class="ticket__btn-quantity" id="quantity-<?php echo $i ?>" type="text" name="txtSoLuong-<?php echo $i ?>" value="<?php echo $data['soluong'] ?>">

                                            <input type="button" class="ticket__btn-item btncong" data-index="<?php echo $i ?>" name="btncong-<?php echo $i ?>" value="+">

                                        </div>

                                        <input class="ticket__price-total" id="total-<?php echo $i ?>" type="text" name="txtThanhTien-<?php echo $i ?>" value="<?php echo $data['thanhtien'] ?>">
                                    </div>

                                    <div class="ticket-item__favourite">
                                        <i class="fa-solid fa-check"></i>
                                        <span>Yêu thích</span>
                                    </div>

                                    <script>
                                        var btnCong = document.getElementsByClassName('btncong');
                                        var btnTru = document.getElementsByClassName('btntru');

                                        for (var j = 0; j < btnCong.length; j++) {
                                            btnCong[j].onclick = cong;
                                            btnTru[j].onclick = tru;
                                        }

                                        function cong() {
                                            fetch('/WebKhuVuiChoi/Muave_c/muave');
                                            var index = this.getAttribute('data-index');
                                            var giave = document.getElementById("giave-" + index).innerHTML;

                                            var totalelement = document.getElementById("total-" + index);
                                            var totalvalue = totalelement.value;
                                            var quantityelement = document.getElementById("quantity-" + index);
                                            var quantityvalue = quantityelement.value;
                                            totalelement.value = parseInt(totalvalue) + parseInt(giave);
                                            quantityelement.value = parseInt(quantityvalue) + 1;
                                        }

                                        function tru() {
                                            var index = this.getAttribute('data-index');
                                            var giave = document.getElementById("giave-" + index).innerHTML;

                                            var totalelement = document.getElementById("total-" + index);
                                            var totalvalue = totalelement.value;
                                            var quantityelement = document.getElementById("quantity-" + index);
                                            var quantityvalue = quantityelement.value;

                                            if (parseInt(quantityvalue) == 0) {
                                                totalelement.value = parseInt(totalvalue) - 0;
                                                quantityelement.value = parseInt(quantityvalue) - 0;
                                            } else {
                                                totalelement.value = parseInt(totalvalue) - parseInt(giave);
                                                quantityelement.value = parseInt(quantityvalue) - 1;
                                            }
                                        }
                                    </script>

                                </div>
                            </div>
                            <input type="text" name="i-index" value="<?php echo $i ?>" hidden>
                    <?php
                            $i++;
                        }
                    }
                    ?>
                </div>

                <div class="line">
                    <p hidden>o</p>
                </div>

                <div class="ticket__footer">
                    <div class="ticket__footer-img0">
                        <div class="ticket__footer-img" style="background-image: url(/WebKhuVuiChoi/Public/images/ve_img/footer1.jpg);">
                        </div>
                    </div>

                    <div class="ticket__footer-img1">
                        <div class="ticket__footer-img1-1">
                            <div class="ticket__footer-img" style="margin-right: 10px; background-image: url(/WebKhuVuiChoi/Public/images/ve_img/footer3.jpg);">
                            </div>
                            <div class="ticket__footer-img" style="background-image: url(/WebKhuVuiChoi/Public/images/ve_img/footer2.jpeg);">
                            </div>
                        </div>

                        <div class="ticket__footer-img1-2">
                            <div class="ticket__footer-img" style="margin-right: 10px; background-image: url(/WebKhuVuiChoi/Public/images/ve_img/footer5.jpeg);">
                            </div>
                            <div class="ticket__footer-img" style="background-image: url(/WebKhuVuiChoi/Public/images/ve_img/footer4.jpeg);">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </form>
</body>

</html>
