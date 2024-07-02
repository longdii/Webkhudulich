<?php
class TaiKhoan extends connectDB
{
    function TaiKhoan_ins($email, $mk, $hoten, $dc, $dt)
    {
        $sql = "INSERT INTO taikhoan VALUES('','$email','$mk','$hoten','$dt','$dc',0)";
        return mysqli_query($this->con, $sql);
    }
    function CheckTK($email, $mk, $quyen)
    {
        $sql = "SELECT * FROM taikhoan WHERE Email='$email' AND MatKhau='$mk' and Quyen=$quyen";
        $dt = mysqli_query($this->con, $sql);
        $kq = false; //khoong trung ma loai
        if (mysqli_num_rows($dt) > 0) {
            $kq = true; //Trungf max loai
        }
        return $kq;
    }
    function CheckEmail($email)
    {
        $sql = "SELECT * FROM taikhoan WHERE Email='$email'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false; //khoong trung ma loai
        if (mysqli_num_rows($dt) > 0) {
            $kq = true; //Trungf max loai
        }
        return $kq;
    }
    function TaiKhoan_find($email)
    {
        $sql = "SELECT * FROM taikhoan WHERE Email = '$email'";
        return mysqli_query($this->con, $sql);
    }
    function TaiKhoan_del($mtk)
    {
        $sql = "DELETE FROM taikhoan WHERE MaTaiKhoan='$mtk'";
        return mysqli_query($this->con, $sql);
    }
    function TaiKhoan_upd($mtk, $email, $hoten, $dc, $dt)
    {
        $sql = "UPDATE taikhoan SET  HoTen='$hoten',DiaChi='$dc',DienThoai='$dt', Email='$email' WHERE MaTaiKhoan='$mtk'";
        return mysqli_query($this->con, $sql);
    }

    function TaiKhoanadmin_find($email)
    {
        $sql = "SELECT * FROM taikhoan WHERE Email != 'admin@gmail.com' and Email like '%$email%'";
        return mysqli_query($this->con, $sql);
    }

    function taikhoan_export()
        {
            $sql = "SELECT * FROM taikhoan WHERE Quyen=0";
            return mysqli_query($this->con, $sql);
        }
}
