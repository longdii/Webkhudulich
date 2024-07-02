<?php 
class TinTuc_them extends controller{
    protected $tnb;
    function __construct()
    {
        $this->tnb=$this->model('TinTucNoiBat');
    }
    function Get_data(){
        $this->view('MasterLayout_admin',[
            'page'=>'TinTucNoiBat_them_v',
            'anhve'=>'',
            'tieude'=>'',
            'mota'=>''
        ]);
    }
    function themmoi(){
        $anhve=$_POST['txtAnhVe'];
        $td=$_POST['txtTenTin'];
        $mta=$_POST['txtMota'];
        if(isset($_POST['btnThem'])){
            if($anhve==""||$td==""||$mta==""){
                echo "<script>alert('Không được để trống các trường!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TinTucNoiBat_them_v',
                    'anhve'=>'',
                    'tieude'=>'',
                    'mota'=>'',
                    'email' => $_SESSION['$email'],
                ]);
            }else{
            $kq=$this->tnb->checktrung($td);
            if(!$kq){ 
                $this->tnb->tintucnoibat_ins($anhve,$td,$mta);
                echo "<script>alert('Thêm mới thành công!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TinTucNoiBat_admin_v',
                    'dulieu'=>$this->tnb->tintucnoibat_find(''),
                    'timkiem'=>"",
                    'email' => $_SESSION['$email'],
                ]);    
             } else{
                echo "<script>alert('Thêm mới thất bại!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TinTucNoiBat_them_v',
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
            'page'=>'TinTucNoiBat_admin_v',
            'dulieu'=>$this->tnb->tintucnoibat_find(''),
            'timkiem'=>"",
            'email' => $_SESSION['$email'],
        ]);    

    }
   
}

}


?>