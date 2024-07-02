<?php 
class Haidang_them extends controller{
    protected $hd;
    function __construct()
    {
        $this->hd=$this->model('haidang');
    }
    function Get_data(){
        $this->view('MasterLayout_admin',[
            'page'=>'Haidang_them_v',
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
                    'page'=>'Haidang_them_v',
                    'anhve'=>'',
                    'tieude'=>'',
                    'mota'=>'',
                    'email' => $_SESSION['$email'],
                ]);
            }else{
            $kq=$this->hd->checktrung($td);
            if(!$kq){ 
                $this->hd->haidang_ins($anhve,$td,$mta);
                echo "<script>alert('Thêm mới thành công!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'Haidang_admin_v',
                    'dulieu'=>$this->hd->haidang_find(''),
                    'timkiem'=>"",
                    'email' => $_SESSION['$email'],
                ]);    
             } else{
                echo "<script>alert('Thêm mới thất bại!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'Haidang_them_v',
                    'anhve'=>'',
                    'tieude'=>'',
                    'mota'=>'',
                    'email' => $_SESSION['$email'],
                ]);
             }
    }
}
    if(isset($_POST['btnTroVe'])){
        $this->view('MasterLayout_admin', [
            'page' => 'Haidang_admin_v',
            'dulieu' => $this->hd->haidang_find(''),
            'timkiem'=>""
      
        ]);

    }
   
}

}


?>