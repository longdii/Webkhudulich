<?php
    class PhoCo_admin_m extends connectDB{
        function phoco_ins($apc,$tpc,$mtpc){
            $sql="INSERT INTO kiosk_pho_co_sun_world VALUES('','$apc','$tpc','$mtpc')";
            return mysqli_query($this->con,$sql);
        }
        function phoco_upd($mpc,$apc,$tpc,$mtpc){
            $sql="UPDATE kiosk_pho_co_sun_world SET AnhPhoCo = '$apc', TenPhoCo = '$tpc', MoTaPhoCo = '$mtpc' WHERE MaPhoCo = '$mpc'";
            return mysqli_query($this->con,$sql);
        }
        function phoco_del($mpc){
            $sql="DELETE FROM kiosk_pho_co_sun_world WHERE MaPhoCo = '$mpc'";
            return mysqli_query($this->con,$sql);
        }
        function phoco_find($tkpc){
            $sql="SELECT * FROM kiosk_pho_co_sun_world WHERE MaPhoCo = '$tkpc'or TenPhoCo like '%$tkpc%'";
            return mysqli_query($this->con,$sql);
        }
        function checktrung($tpc){
            $sql = "SELECT * FROM kiosk_pho_co_sun_world WHERE TenPhoCo = '$tpc'";
            $dta= mysqli_query($this->con,$sql);
            $kq=false;
            if(mysqli_num_rows($dta)>0){
                $kq=true;
            }
            return $kq;
        }
        function phoco_sua($tk){
            $sql="SELECT * FROM kiosk_pho_co_sun_world WHERE MaPhoCo = '$tk'";
            return mysqli_query($this->con,$sql);
        }
        function phoco_select(){
            $sql="SELECT * FROM kiosk_pho_co_sun_world";
            return mysqli_query($this->con,$sql);
        }
        function phoco_export(){
            $sql ="SELECT * FROM kiosk_pho_co_sun_world";
            return mysqli_query($this->con,$sql);
        }
    }
?>