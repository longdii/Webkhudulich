<?php 
    class TinTucNoiBat extends connectDB{
        function tintucnoibat_ins($anhve,$tde,$mta){
            $sql="INSERT INTO tin_tuc_noi_bat VALUES('','$anhve','$tde','$mta')";
            return mysqli_query($this->con,$sql);
        }
        function tintucnoibat_find($id){
            $sql="SELECT * FROM tin_tuc_noi_bat WHERE ID like'%$id%' ";
            return mysqli_query($this->con,$sql);
        }
        function tintucnoibat_del($id){
            $sql="DELETE FROM tin_tuc_noi_bat WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function tintucnoibat_upd($id,$anhve,$tde,$mta){
            $sql="UPDATE tin_tuc_noi_bat SET AnhVe='$anhve', TieuDe='$tde' , MoTa='$mta' WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function checktrung($tde){
            $sql = "SELECT * FROM tin_tuc_noi_bat WHERE TieuDe = '$tde'";
            $dt = mysqli_query($this->con, $sql);
            $kq = false;
            if (mysqli_num_rows($dt) > 0) {
                $kq = true;
            }
            return $kq;
        }


    }
?>