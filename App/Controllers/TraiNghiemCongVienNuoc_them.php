<?php 
class TraiNghiemCongVienNuoc_them extends controller{
    protected $cvn;
    function __construct()
    {
        $this->cvn=$this->model('congviennuoc');
    }
    function Get_data(){
        $this->view('MasterLayout',[
            'page'=>'TraiNghiemCongVienNuoc_them_v',
            'anhve'=>'',
            'tieude'=>'',
            'mota'=>''
        ]);
    }
    function themmoi(){
        $anhve=$_POST['txtAnhVe'];
        $td=$_POST['txtTentn'];
        $mta=$_POST['txtmota'];
        if(isset($_POST['btnThem'])){
            if($anhve==""||$td==""||$mta==""){
                echo "<script>alert('Không được để trống các trường!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TraiNghiemCongVienNuoc_them_v',
                    'anhve'=>'',
                    'tieude'=>'',
                    'mota'=>'',
                    'email' => $_SESSION['$email'],
                ]);
            }else{
            $kq=$this->cvn->checktrung($td);
            if(!$kq){ 
                $this->cvn->congviennuoc_ins($anhve,$td,$mta);
                echo "<script>alert('Thêm mới thành công!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TraiNghiemCongVienNuoc_admin_v',
                    'dulieu'=>$this->cvn->congviennuoc_find(''),
                    'timkiem'=>"",
                    'email' => $_SESSION['$email'],
                ]);    
             } else{
                echo "<script>alert('Thêm mới thất bại!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TraiNghiemCongVienNuoc_them_v',
                    'anhve'=>'',
                    'tieude'=>'',
                    'mota'=>'',
                    'email' => $_SESSION['$email'],
                ]);
             }
    }
}
    if(isset($_POST['btnTroVe'])){
        $this->view('MasterLayout_admin',[
            'page'=>'TraiNghiemCongVienNuoc_admin_v',
            'dulieu'=>$this->cvn->congviennuoc_find(''),
            'timkiem'=>"",
            'email' => $_SESSION['$email'],
        ]);    

    }
   
}

}


?>