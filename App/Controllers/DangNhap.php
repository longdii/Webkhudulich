<?php
class DangNhap extends controller
{
    protected $tk;

    function __construct()
    {
        $this->tk = $this->model('TaiKhoan');
    }

    function Get_data()
    {
        $this->view('MasterLayout', [
            'page' => 'DangNhap_v',
            'email' => '',
            'mk' => ''
        ]);
    }


    function KiemTraDangNhap()
    {
        if (isset($_POST['btndangnhap'])) {
            $email = $_POST['txtemail'];
            $mk = $_POST['txtpass'];
            $ktrand = $this->tk->CheckTK($email, $mk, 0);
            $ktraadmin = $this->tk->CheckTK($email, $mk, 1);
            $dulieu = $this->tk->taikhoan_find($email);
            $row = mysqli_fetch_array($dulieu);
            if (isset($row) and is_array($row)) {
                $_SESSION['$mataikhoan'] = $row['MaTaiKhoan'];
                $_SESSION['$email'] = $row['Email'];
                $_SESSION['$hoten'] = $row['HoTen'];
                $_SESSION['$diachi'] = $row['DiaChi'];
                $_SESSION['$dienthoai'] = $row['DienThoai'];
            }

            if ($ktrand == true) {
                $this->view('TrangChuCaNhan_v', [
                    'page' => 'ThongTinTaiKhoan_v',
                ]);
            } else if ($ktraadmin == true) {
                echo "<script>alert('Bạn là admin!!!')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'HomeAdmin_v',
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                echo "<script>alert('Đăng nhập thất bại!!!')</script>";
                $this->view('MasterLayout', [
                    'page' => 'DangNhap_v',
                ]);
            }
        }
    }
}