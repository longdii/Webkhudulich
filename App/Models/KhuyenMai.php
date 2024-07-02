<?php
    class KhuyenMai extends connectDB{
        
        function khuyenmai_ins($anhve,$tde,$mta){
            $sql="INSERT INTO khuyenmai VALUES('','$anhve','$tde','$mta')";
            return mysqli_query($this->con,$sql);
        }
        function khuyenmai_find($id){
            $sql="SELECT * FROM khuyenmai WHERE ID like'%$id%' ";
            return mysqli_query($this->con,$sql);
        }
        function khuyenmai_del($id){
            $sql="DELETE FROM khuyenmai WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function khuyenmai_upd($id,$anhve,$tde,$mta){
            $sql="UPDATE khuyenmai SET AnhVe='$anhve', TieuDe='$tde' , MoTa='$mta' WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function checktrung($tde){
            $sql = "SELECT * FROM khuyenmai WHERE TieuDe = '$tde'";
            $dt = mysqli_query($this->con, $sql);
            $kq = false;
            if (mysqli_num_rows($dt) > 0) {
                $kq = true;
            }
            return $kq;
        }

    }
?>