<?php
class Muave_c extends controller
{
    protected $dsve;
    protected $muave;
    protected $tt;

    function __construct()
    {
        $this->dsve = $this->model('Ve_m');
        $this->muave = $this->model('Muave_m');
        $this->tt = $this->model('GioHang');
    }

    function Get_data()
    {
        $this->tt->Giohang_del();
        $this->view('TrangChuMuaVe_v', [
            'page' => 'Muave_v',
            'dulieu' => $this->dsve->ve_find(''),
            'soluong' => '0',
            'thanhtien' => '0',
            'email' => $_SESSION['$email'],
        ]);
    }

    function muave()
    {
        $t = $_POST['i-index'];
        $t += 1;
        $count = 0;
        for ($x = 0; $x < $t; $x++) {
            if (isset($_POST['btnThanhToan'])) {
                $email = $_SESSION['$email'];
                $tenve = $_POST['txtTenVe-' . $x];
                $soluong = $_POST['txtSoLuong-' . $x];
                $dongia = $_POST['txtDonGia-' . $x];
                $thanhtien = $_POST['txtThanhTien-' . $x];

                $check_email = $this->muave->muave_email($tenve, $email);

                if ($soluong > 0 && $thanhtien > 0 && mysqli_num_rows($check_email) > 0) {
                    $row = mysqli_fetch_array($check_email);
                    $sl = $row['SoLuong'];
                    $ttien = $row['ThanhTien'];
                    $soluong += $sl;
                    $thanhtien += $ttien;
                    $kq = $this->muave->muave_upd($tenve, $email, $soluong, $thanhtien);
                    if ($kq) {
                        // echo "<script> alert('ok rồi') </script>";
                        $count++;
                    } else {
                        echo "<script> alert('không ổn') </script>";
                        $this->view('TrangChuMuaVe_v', [
                            'page' => 'Muave_v',
                            'dulieu' => $this->dsve->ve_find(''),
                            'soluong' => '0',
                            'thanhtien' => '0',
                            'email' => $_SESSION['$email'],
                        ]);
                    }
                } else if ($soluong > 0 && $thanhtien > 0) {
                    $kq = $this->muave->muave_ins($tenve, $email, $soluong, $dongia, $thanhtien);
                    if ($kq) {
                        // echo "<script> alert('ok rồi nha') </script>";
                        $count++;
                    } else {
                        echo "<script> alert('không ổn nha') </script>";
                        $this->view('TrangChuMuaVe_v', [
                            'page' => 'Muave_v',
                            'dulieu' => $this->dsve->ve_find(''),
                            'soluong' => '0',
                            'thanhtien' => '0',
                            'email' => $_SESSION['$email'],
                        ]);
                    }
                }
            }
        }
        if ($count != 0) {
            $this->view('TrangChuCaNhan_v', [
                'page' => 'ThanhToan_v',
                'dulieu' => $this->tt->Giohang_find($_SESSION['$email'])
            ]);
        } else {
            echo "<script> alert('Vui Lòng Chọn Vé!') </script>";
            $this->view('TrangChuMuaVe_v', [
                'page' => 'Muave_v',
                'dulieu' => $this->dsve->ve_find(''),
                'soluong' => '0',
                'thanhtien' => '0',
                'email' => $_SESSION['$email'],
            ]);
        }
    }
}
?>
<!--  -->