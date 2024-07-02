<?php
    class AmThucVaMuaSam_admin_m extends connectDB{
        function amthuc_ins($aat,$tat,$dcat,$mtat){
            $sql="INSERT INTO am_thuc_va_mua_sam VALUES('','$aat','$tat','$dcat','$mtat')";
            return mysqli_query($this->con,$sql);
        }
        function amthuc_upd($mat,$aat,$tat,$dcat,$mtat){
            $sql="UPDATE am_thuc_va_mua_sam SET AnhAmThuc = '$aat', TenAmThuc = '$tat',DiaChiAmThuc = '$dcat', MoTaAmThuc = '$mtat' WHERE MaAmThuc = '$mat'";
            return mysqli_query($this->con,$sql);
        }
        function amthuc_del($mat){
            $sql="DELETE FROM am_thuc_va_mua_sam WHERE MaAmThuc = '$mat'";
            return mysqli_query($this->con,$sql);
        }
        function amthuc_find($tkat){
            $sql="SELECT * FROM am_thuc_va_mua_sam WHERE MaAmThuc = '$tkat'or TenAmThuc like '%$tkat%'";
            return mysqli_query($this->con,$sql);
        }
        function checktrung($tat){
            $sql = "SELECT * FROM am_thuc_va_mua_sam WHERE TenAmThuc = '$tat'";
            $dta= mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dta)>0){
                $kq=true;
            }
            return $kq;
        }
        function amthuc_sua($tk){
            $sql="SELECT * FROM am_thuc_va_mua_sam WHERE MaAmThuc = '$tk'";
            return mysqli_query($this->con,$sql);
        }

        function amthuc_select(){
            $sql="SELECT * FROM am_thuc_va_mua_sam";
            return mysqli_query($this->con,$sql);
        }
        function amthuc_export(){
            $sql ="SELECT * FROM am_thuc_va_mua_sam";
            return mysqli_query($this->con,$sql);
        }
    }
?>