<?php
class DangKi extends controller{
    protected $di;
    function Get_data(){
        $this->view('MasterLayout',[
            'page'=>'DangKi_v'
        ]);
    }
    function __construct()
    {
        $this->di=$this->model('TaiKhoan');
    }

    function themmoi(){
        $email=$_POST['txtEmail'];
        $mk=$_POST['txtMatkhau'];
        $hoten=$_POST['txtHoten'];
        $dt=$_POST['txtDienthoai'];
        $dc=$_POST['txtDiachi'];
        if(isset($_POST['btndangki'])){
                $data=$this->di->CheckEmail($email);
                if($data){
                    echo "<script>alert('Email đã tồn tại!!!')</script>";    
                    $this->view('MasterLayout',[
                        'page'=>'DangKi_v'
                    ]);
                }else{
                    $this->di->taikhoan_ins($email,$mk,$hoten,$dc,$dt);
                    echo "<script>alert('Đăng kí thành công!!!')</script>";  
                    $this->view('MasterLayout',[
                        'page'=>'DangNhap_v'
                    ]);
                }
           
        }
       
    }
}