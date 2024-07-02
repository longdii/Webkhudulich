
<?php
class ThongTinTaiKhoan extends controller{
    protected $tttk;
    function __construct()
    {
        $this->tttk=$this->model('TaiKhoan');
    }
    function Get_data(){
        $this->view('TrangChuCaNhan_v',[
            'page'=>'ThongTinTaiKhoan_v'
        ]);
    }
    function CapNhat(){
        if(isset($_POST['btncapnhat'])){
            $data=false;
            $email= $_POST['txtemail'];
            $hoten=$_POST['txthoten'];
            $diachi=$_POST['txtdiachi'];
            $dienthoai=$_POST['txtdienthoai'];
            if($email==''||$hoten==''||$diachi==''||$dienthoai==''){
                echo "<script>alert('Không Được Để Trống Các Mục!!!')</script>"; 
                $this->view('TrangChuCaNhan_v',[
                    'page'=>'ThongTinTaiKhoan_v'
                ]);
            }else{
                if($email!=$_SESSION['$email']){
                    $data=$this->tttk->CheckEmail($email);
                  
                 } 
                   if($data){
                       echo "<script>alert('Email đã tồn tại')</script>";  
                       $this->view('TrangChuCaNhan_v',[
                           'page'=>'ThongTinTaiKhoan_v'
                       ]);
                   }else{    
                   $this->tttk->TaiKhoan_upd($_SESSION['$mataikhoan'],$email,$hoten,$diachi,$dienthoai);
                   $dulieu= $this->tttk->TaiKhoan_find($email);
                    $row=mysqli_fetch_array($dulieu);
                    if(isset($row) and is_array($row)){
                   $_SESSION['$email']=$row['Email'];
                   $_SESSION['$hoten']=$row['HoTen'];
                   $_SESSION['$diachi']=$row['DiaChi'];
                   $_SESSION['$dienthoai']=$row['DienThoai'];
                   }
                   echo "<script>alert('Cập nhật thành công!!!')</script>";  
                       $this->view('TrangChuCaNhan_v',[
                           'page'=>'ThongTinTaiKhoan_v'
                       ]);
                 
                   }
            }

    
        }
    }
}