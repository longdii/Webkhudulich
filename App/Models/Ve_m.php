<?php
class Ve_m extends connectDB
{
    function ve_ins($anhve, $tenve, $giave, $khuvuivhoi)
    {
        $sql = "INSERT INTO ve VALUES('','$anhve','$tenve','$giave','$khuvuivhoi')";
        return mysqli_query($this->con, $sql);
    }

    function ve_upd($mave, $anhve, $tenve, $giave, $khuvuivhoi)
    {
        $sql = "UPDATE ve SET TenVe = '$tenve', AnhVe = '$anhve', GiaVe = '$giave', KhuVuiChoi = '$khuvuivhoi' WHERE Mave = '$mave'";
        return mysqli_query($this->con, $sql);
    }

    function ve_del($mave)
    {
        $sql = "DELETE FROM ve WHERE MaVe ='$mave'";
        return mysqli_query($this->con, $sql);
    }

    function ve_find($tk)
    {
        $sql = "SELECT * FROM ve WHERE MaVe = '$tk' or TenVe like '%$tk%' or GiaVe like '%$tk%'";
        return mysqli_query($this->con, $sql);
    }

    function ve_sua($tk)
    {
        $sql = "SELECT * FROM ve WHERE MaVe = '$tk'";
        return mysqli_query($this->con, $sql);
    }

    function ve_export()
    {
        $sql = "SELECT * FROM ve";
        return mysqli_query($this->con, $sql);
    }


    function checktrung($tenve)
    {
        $sql = "SELECT * FROM ve WHERE TenVe = '$tenve'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;
        if (mysqli_num_rows($dt) > 0) {
            $kq = true;
        }
        return $kq;
    }
}
