
<?php
class haidang extends connectDB{
       
        function haidang_ins($anhve,$tde,$mta){
            $sql="INSERT INTO hai_dang_sun_world VALUES('','$anhve','$tde','$mta')";
            return mysqli_query($this->con,$sql);
        }
        function haidang_find($id){
            $sql="SELECT * FROM hai_dang_sun_world  WHERE ID like'%$id%' ";
            return mysqli_query($this->con,$sql);
        }
        function haidang_del($id){
            $sql="DELETE FROM hai_dang_sun_world  WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function haidang_upd($id,$anhve,$tde,$mta){
            $sql="UPDATE hai_dang_sun_world  SET AnhVe='$anhve', TieuDe='$tde' , MoTa='$mta' WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function checktrung($tde)
        {
            $sql = "SELECT * FROM hai_dang_sun_world  WHERE TieuDe = '$tde'";
            $dt = mysqli_query($this->con, $sql);
            $kq = false;
            if (mysqli_num_rows($dt) > 0) {
                $kq = true;
            }
            return $kq;
    
    }
}

        ?>