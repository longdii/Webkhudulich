<?php
class congvienrong extends connectDB
{
    function congvienrong_ins($anhve, $tde, $mta)
    {
        $sql = "INSERT INTO congvienrong VALUES('','$anhve','$tde','$mta')";
        return mysqli_query($this->con, $sql);
    }
    function congvienrong_find($id)
    {
        $sql = "SELECT * FROM congvienrong WHERE ID like'%$id%' ";
        return mysqli_query($this->con, $sql);
    }
    function congvienrong_del($id)
    {
        $sql = "DELETE FROM congvienrong WHERE ID='$id'";
        return mysqli_query($this->con, $sql);
    }
    function congvienrong_upd($id, $anhve, $tde, $mta)
    {
        $sql = "UPDATE congvienrong SET AnhVe='$anhve', TieuDe='$tde' , MoTa='$mta' WHERE ID='$id'";
        return mysqli_query($this->con, $sql);
    }
    function checktrung($tde)
    {
        $sql = "SELECT * FROM congvienrong WHERE TieuDe = '$tde'";
        $dt = mysqli_query($this->con, $sql);
        $kq = false;
        if (mysqli_num_rows($dt) > 0) {
            $kq = true;
        }
        return $kq;
    }

    // Dũng
    function congvienrong_list()
    {
        $sql = "SELECT * FROM congvienrong";
        return mysqli_query($this->con, $sql);
    }
}

?>
<!--  -->