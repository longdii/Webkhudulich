<?php
class TraiNghiemCongVienNuoc_admin extends controller{
    protected $cvn;
        function __construct(){
            $this->cvn=$this->model('congviennuoc');
        }
    function Get_data(){
        $this->view('MasterLayout_admin',[
            'page'=>'TraiNghiemCongVienNuoc_admin_v',
            'dulieu'=>$this->cvn->congviennuoc_find('',''),
            'timkiem'=>"",
            'email' => $_SESSION['$email'],

        ]);
    } 
    function xoa($id){
        $kq=$this->cvn->congviennuoc_del($id);
        if($kq)
        echo "<script> alert('Xoa thanh cong!')</script>";
    else 
    echo "<script> alert('Xoa that bai!')</script>";
         $this->view('MasterLayout_admin',[
        'page'=>'TraiNghiemCongVienNuoc_admin_v',
        'dulieu'=>$this->cvn->congviennuoc_find('',''),
        'timkiem'=>"",
        'email' => $_SESSION['$email'],


    ]);
     }
     function timkiem()
     {
        if(isset($_POST['btnTroVe'])){
            $this->view('MasterLayout_admin', [
                'page' => 'TraiNghiemCongVienNuoc_admin_v',
                'dulieu' => $this->cvn->congviennuoc_find(''),
                'timkiem'=>"",
                'email' => $_SESSION['$email'],
          
            ]);
        }
        if(isset($_POST['btnThem'])){
            $this->view('MasterLayout_admin', [
                'page' => 'TraiNghiemCongVienNuoc_them_v',
                'dulieu' => $this->cvn->congviennuoc_find(''),
                'timkiem'=>"",
                'email' => $_SESSION['$email'],
          
            ]);
        }
       
         if (isset($_POST['btnTimKiem'])) {
             $tk = $_POST['txtTimKiem'];
             if ($tk == "") {
                 echo "<script>alert('Vui lòng nhập thông tin tìm kiếm')</script>";
                 $this->view('MasterLayout_admin', [
                     'page' => 'TraiNghiemCongVienNuoc_admin_v',
                     'dulieu' => $this->cvn->congviennuoc_find(''),
                     'timkiem'=>"",
                     'email' => $_SESSION['$email'],
               
                 ]);
             } else {

                 $this->view('MasterLayout_admin', [
                     'page' => 'TraiNghiemCongVienNuoc_admin_v',
                     'dulieu' => $this->cvn->congviennuoc_find($tk),
                     'timkiem'=>$tk,
                     'email' => $_SESSION['$email'],
                    
                    
                 ]);
             }
         }
     

     }
     function sua($id){
        $this->view('MasterLayout_admin',[
            'page'=>'CongVienNuoc_sua_v',
            'dulieu'=>$this->cvn->congviennuoc_find($id)
        ]);
     }
     function suadl()
    {
        if (isset($_POST['btnSua'])) {
            $id = $_POST['txtID'];
            $anhve = $_POST['txtAnhVe'];
            $tde = $_POST['txtTentn'];
            $mta = $_POST['txtmota'];
           

            $check = $this->cvn->checktrung($tde);
            if ($check) {
                echo "<script>alert('Tên trải nghiệm đã tồn tại')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'CongVienNuoc_sua_v',
                    'dulieu' => $this->cvn->congviennuoc_find($id),
                ]);
            }else{
                if ($anhve == $_POST['txtAnhVeCu']) {
                    echo "<script>alert('Ảnh trải nghiệm đã tồn tại')</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'CongVienNuoc_sua_v',
                        'dulieu' => $this->cvn->congviennuoc_find($id),
                       
                    ]);
                } else {
                    if ($anhve == "") {
                        $anhve = $_POST['txtAnhVeCu'];
                    }

                    $kq = $this->cvn->congviennuoc_upd($id, $anhve, $tde, $mta);
                    if ($kq) {
                        echo "<script>alert('Sửa thành công')</script>";
                    } else {
                        echo "<script>alert('Sửa thất bại')</script>";
                    }
                    $this->view('MasterLayout_admin', [
                        'page' => 'TraiNghiemCongVienNuoc_admin_v',
                        'dulieu' => $this->cvn->congviennuoc_find(''),
                       
                    ]);
                }
            }
        }
        if (isset($_POST['btnTroVe'])) {
                    $this->view('MasterLayout_admin', [
                        'page' => 'TraiNghiemCongVienRong_admin_v',
                        'dulieu' => $this->cvn->congviennuoc_find(''),
                        
                    ]);
                }
        
    }
   
     }


    

    

?>