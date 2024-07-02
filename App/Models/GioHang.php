<?php 
    class GioHang extends connectDB{
        function Giohang_ins($td,$anh,$mt){
            $sql="INSERT INTO tin_tuc_noi_bat VALUES('','$td','$anh','$mt')";
            return mysqli_query($this->con,$sql);
        }
        function Giohang_find($email){
            $sql ="SELECT * FROM giohang WHERE Email='$email' ";
            return mysqli_query($this->con,$sql);
        }
        function Giohang_del(){
            $sql="DELETE FROM giohang";
            return mysqli_query($this->con,$sql);
        }
        function Giohang_upd($id,$td,$anh,$mt){
            $sql="UPDATE tin_tuc_noi_bat SET  ID='$id',TieuDe='$td',AnhVe='$anh', MoTa='$mt' WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }


    }
?>