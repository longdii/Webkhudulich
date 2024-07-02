<?php
class Muave_m extends connectDB
{
    function muave_ins($tenve, $email, $soluong, $dongia, $thanhtien)
    {
        $sql = "INSERT INTO giohang VALUES('$tenve','$email','$soluong','$dongia','$thanhtien')";
        return mysqli_query($this->con, $sql);
    }

    function muave_upd($tenve, $email, $soluong, $thanhtien)
    {
        $sql = "UPDATE giohang SET SoLuong = '$soluong', ThanhTien = '$thanhtien'WHERE TenVe = '$tenve' AND Email = '$email'";
        return mysqli_query($this->con, $sql);
    }

    function muave_find($tenve)
    {
        $sql = "SELECT * FROM giohang WHERE TenVe = '$tenve'";
        return mysqli_query($this->con, $sql);
    }

    function muave_email($tenve, $email)
    {
        $sql = "SELECT * FROM giohang WHERE TenVe = '$tenve' AND Email = '$email'";
        return mysqli_query($this->con, $sql);
    }
}
