<?php
    class SuKien extends connectDB{
        
        function sukien_ins($anhve,$tde,$mta){
            $sql="INSERT INTO sukien VALUES('','$anhve','$tde','$mta')";
            return mysqli_query($this->con,$sql);
        }
        function sukien_find($id){
            $sql="SELECT * FROM sukien WHERE ID like'%$id%' ";
            return mysqli_query($this->con,$sql);
        }
        function sukien_del($id){
            $sql="DELETE FROM sukien WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function sukien_upd($id,$anhve,$tde,$mta){
            $sql="UPDATE sukien SET AnhVe='$anhve', TieuDe='$tde' , MoTa='$mta' WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function checktrung($tde){
            $sql = "SELECT * FROM sukien WHERE TieuDe = '$tde'";
            $dt = mysqli_query($this->con, $sql);
            $kq = false;
            if (mysqli_num_rows($dt) > 0) {
                $kq = true;
            }
            return $kq;
        }

    }
?>