<?php
class congviennuoc extends connectDB
{
    // function congvienrong_ins($an,$tl,$mt){
    //     $sql="INSERT INTO loa VALUES('$maloai','$tl','$mt')";
    //     return mysqli_query($this->con,$sql);
    // }
    function congviennuoc_ins($anhve, $tde, $mta)
    {
        $sql = "INSERT INTO congviennuoc VALUES('','$anhve','$tde','$mta')";
        return mysqli_query($this->con, $sql);
    }
    function congviennuoc_find($id)
    {
        $sql = "SELECT * FROM congviennuoc WHERE ID like'%$id%' ";
        return mysqli_query($this->con, $sql);
    }
    function congviennuoc_del($id)
    {
        $sql = "DELETE FROM congviennuoc WHERE ID='$id'";
        return mysqli_query($this->con, $sql);
    }
    function congviennuoc_upd($id, $anhve, $tde, $mta)
    {
        $sql = "UPDATE congviennuoc SET AnhVe='$anhve', TieuDe='$tde' , MoTa='$mta' WHERE ID='$id'";
        return mysqli_query($this->con, $sql);
    }
    function Checktrung($td)
    {
        $sql = "SELECT * FROM congviennuoc WHERE TieuDe='$td'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false; //khoong trung ma loai
        if (mysqli_num_rows($dt) > 0) {
            $kq = true; //Trungf max loai
        }
        return $kq;
    }
    //     function congvienrong_find($id)
    // {
    //     $sql = "SELECT * FROM cong_vien_rong WHERE ID = '$id' or TieuDe like '%$tde%' or MoTa like '%$mota%'";
    //     return mysqli_query($this->con, $sql);
    // }

    // Dũng
    function congviennuoc_list()
    {
        $sql = "SELECT * FROM congviennuoc";
        return mysqli_query($this->con, $sql);
    }
}

?>

<!--  -->