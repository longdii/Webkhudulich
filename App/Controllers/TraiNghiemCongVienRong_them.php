<?php 
class TraiNghiemCongVienRong_them extends controller{
    protected $cvr;
    function __construct()
    {
        $this->cvr=$this->model('congvienrong');
    }
    function Get_data(){
        $this->view('MasterLayout_admin',[
            'page'=>'TraiNghiemCongVienRong_them_v',
            'anhve'=>'',
            'tieude'=>'',
            'mota'=>'',
            'email'=>$_SESSION['$email']
        ]);
    }
    function themmoi(){
        $anhve=$_POST['txtAnhVe'];
        $tde=$_POST['txtTentn'];
        $mta=$_POST['txtmota'];
        if(isset($_POST['btnThem'])){
            //Lấy dữ liệu trên các control của form
            if($anhve==""||$tde==""||$mta==""){
                echo "<script>alert('Không được để trống các trường!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TraiNghiemCongVienRong_them_v',
                    'anhve'=>'',
                    'tieude'=>'',
                    'mota'=>'',
                    'email' => $_SESSION['$email'],
                ]);
            }else{
           $kq= $this->cvr->checktrung($tde);
            if(!$kq){
                echo "<script>alert('Thêm mới thành công!')</script>";
                $this->cvr->congvienrong_ins($anhve,$tde,$mta);
                $this->view('MasterLayout_admin', [
                    'page' => 'TraiNghiemCongVienRong_admin_v',
                    'dulieu' => $this->cvr->congvienrong_find(''),
                    'email' => $_SESSION['$email'],
                ]);
             }else{
                echo "<script>alert('Thêm mới thất bại!')</script>";
                $this->view('MasterLayout_admin',[
                    'page'=>'TraiNghiemCongVienRong_them_v',
                    'anhve'=>$anhve,
                    'tieude'=>$tde,
                    'mota'=>$mta,
                    'email'=>$_SESSION['$email']
                ]);   
             }
    }
}
    if(isset($_POST['btnTroVe'])){
        $this->view('MasterLayout_admin', [
            'page' => 'TraiNghiemCongVienRong_admin_v',
            'dulieu' => $this->cvr->congvienrong_find(''),
            'timkiem'=>"",
            'email'=>$_SESSION['$email']
      
        ]);

    }
   
}

}


?>