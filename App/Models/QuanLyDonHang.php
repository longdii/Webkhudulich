<?php 
    class QuanLyDonHang extends connectDB{
        function Quanlydonhang_ins(){
            $sql="INSERT INTO quanlydonhang(TenVe,Email,SoLuong,DonGia,ThanhTien,Ngay) SELECT TenVe,Email,SoLuong,DonGia,ThanhTien,CURRENT_DATE() FROM giohang";
            return mysqli_query($this->con,$sql);
        }
        function Quanlydonhang_find($email){
            $sql ="SELECT * FROM quanlydonhang WHERE Email='$email' ";
            return mysqli_query($this->con,$sql);
        }
        function Quanlydonhang_del($id){
            $sql="DELETE FROM quanlydonhang WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function Quanlydonhang_upd($id,$td,$anh,$mt){
            $sql="UPDATE quanlydonhang SET  ID='$id',TieuDe='$td',AnhVe='$anh', MoTa='$mt' WHERE ID='$id'";
            return mysqli_query($this->con,$sql);
        }
        function ThongKe($bd,$kt){
            $sql ="SELECT TenVe, SUM(SoLuong) as SoLuong ,Sum(ThanhTien) as DoanhThu FROM quanlydonhang  WHERE Ngay >= '$bd' AND Ngay <= '$kt' GROUP BY TenVe";
            return mysqli_query($this->con,$sql);
        }

        function thongke_export()
        {
            $sql = "SELECT * FROM quanlydonhang";
            return mysqli_query($this->con, $sql);
        }
    }
?>