<?php
class CapTreoNuHoang_admin_m extends connectDB
{
    function captreo_ins($act, $tct, $mtct)
    {
        $sql = "INSERT INTO cap_treo_nu_hoang_va_khu_doi_huyen_bi VALUES('','$act','$tct','$mtct')";
        return mysqli_query($this->con, $sql);
    }
    function captreo_upd($mct, $act, $tct, $mtct)
    {
        $sql = "UPDATE cap_treo_nu_hoang_va_khu_doi_huyen_bi SET AnhCapTreo = '$act', TenCapTreo = '$tct', MoTaCapTreo = '$mtct' WHERE MaCapTreo = '$mct'";
        return mysqli_query($this->con, $sql);
    }
    function captreo_del($mct)
    {
        $sql = "DELETE FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi WHERE MaCapTreo = '$mct'";
        return mysqli_query($this->con, $sql);
    }
    function captreo_find($tkct)
    {
        $sql = "SELECT * FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi WHERE MaCapTreo = '$tkct'or TenCapTreo like '%$tkct%'";
        return mysqli_query($this->con, $sql);
    }
    function checktrung($tct)
    {
        $sql = "SELECT * FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi WHERE TenCapTreo = '$tct'";
        $dta = mysqli_query($this->con, $sql);
        $kq = false;
        if (mysqli_num_rows($dta) > 0) {
            $kq = true;
        }
        return $kq;
    }
    function captreo_sua($tk)
    {
        $sql = "SELECT * FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi WHERE MaCapTreo = '$tk'";
        return mysqli_query($this->con, $sql);
    }
    function captreo_select()
    {
        $sql = "SELECT * FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi";
        return mysqli_query($this->con, $sql);
    }
    
    function captreo_export()
    {
        $sql = "SELECT * FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi";
        return mysqli_query($this->con, $sql);
    }

    // Dũng
    function captreo_list()
    {
        $sql = "SELECT * FROM cap_treo_nu_hoang_va_khu_doi_huyen_bi";
        return mysqli_query($this->con, $sql);
    }
}
?>
<!--  -->