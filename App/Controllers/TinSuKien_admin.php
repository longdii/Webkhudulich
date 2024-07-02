<?php
class TinSuKien_admin extends controller{
    protected $tnb;
        function __construct(){
            $this->tnb=$this->model('SuKien');
        }
    function Get_data(){
        $this->view('MasterLayout_admin',[
            'page'=>'SuKien_admin_v',
            'dulieu'=>$this->tnb->sukien_find(''),
            'timkiem'=>"",
            'email' => $_SESSION['$email'],

        ]);
    } 
    function xoa($id){
        $kq=$this->tnb->sukien_del($id);
        if($kq)
        echo "<script> alert('Xoa thanh cong!')</script>";
    else 
    echo "<script> alert('Xoa that bai!')</script>";
         $this->view('MasterLayout_admin',[
        'page'=>'SuKien_admin_v',
        'dulieu'=>$this->tnb->sukien_find(''),
        'timkiem'=>"" ,
        'email' => $_SESSION['$email'],


    ]);
     }
     function timkiem()
     {
        if(isset($_POST['btnTroVe'])){
            $this->view('MasterLayout_admin', [
                'page' => 'SuKien_admin_v',
                'dulieu' => $this->tnb->sukien_find(''),
                'timkiem'=>"",
                'email' => $_SESSION['$email'],
          
            ]);
        }
        if(isset($_POST['btnThem'])){
            $this->view('MasterLayout_admin', [
                'page' => 'SuKien_them_v',
                'dulieu' => $this->tnb->sukien_find(''),
                'timkiem'=>"",
                'email' => $_SESSION['$email'],
          
            ]);
        }
       
         if (isset($_POST['btnTimKiem'])) {
             $tk = $_POST['txtTimKiem'];
             if ($tk == "") {
                 echo "<script>alert('Vui lòng nhập thông tin tìm kiếm')</script>";
                 $this->view('MasterLayout_admin', [
                     'page' => 'SuKien_admin_v',
                     'dulieu' => $this->tnb->sukien_find(''),
                     'timkiem'=>"",
                     'email' => $_SESSION['$email'],
               
                 ]);
             } else {

                 $this->view('MasterLayout_admin', [
                     'page' => 'SuKien_admin_v',
                     'dulieu' => $this->tnb->sukien_find($tk),
                     'timkiem'=>$tk,
                     'email' => $_SESSION['$email'],
                    
                    
                 ]);
             }
         }
     

     }
     function sua($id){
        $this->view('MasterLayout_admin',[
            'page'=>'SuKien_sua_v',
            'dulieu'=>$this->tnb->sukien_find($id,''),
            'email' => $_SESSION['$email'],
          

        ]);
     }
     function suadl()
    {
        if (isset($_POST['btnSua'])) {
            $id = $_POST['txtID'];
            $anhve = $_POST['txtAnhVe'];
            $tde = $_POST['txtTenTin'];
            $mta = $_POST['txtMota'];
            $check = $this->tnb->checktrung($tde);
            if ($check) {
                echo "<script>alert('Tên trải nghiệm đã tồn tại')</script>";
                // echo "<script>window.location.href = 've_sua_v.php';</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'SuKien_sua_v',
                    'dulieu' => $this->tnb->sukien_find($id),
                    'email' => $_SESSION['$email'],
                   
                ]);
            } else {

                if ($anhve == $_POST['txtAnhVeCu']) {
                    echo "<script>alert('Ảnh trải nghiệm đã tồn tại')</script>";
                    // echo "<script>window.location.href = 've_sua_v.php';</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'SuKien_sua_v',
                        'dulieu' => $this->tnb->sukien_find($id),
                        'email' => $_SESSION['$email'],
                       
                    ]);
                } else {
                    if ($anhve == "") {
                        $anhve = $_POST['txtAnhVeCu'];
                    }

                    $kq = $this->tnb->sukien_upd($id, $anhve, $tde, $mta);
                    if ($kq) {
                        echo "<script>alert('Sửa thành công')</script>";
                    } else {
                        echo "<script>alert('Sửa thất bại')</script>";
                    }
                    $this->view('MasterLayout_admin', [
                        'page' => 'SuKien_admin_v',
                        'dulieu' => $this->tnb->sukien_find(''),
                        'timkiem'=>'',
                        'email' => $_SESSION['$email'],
                    ]);
                }
            }
        }
        if (isset($_POST['btnTroVe'])) {
                    $this->view('MasterLayout_admin', [
                        'page' => 'SuKien_admin_v',
                        'dulieu' => $this->tnb->sukien_find(''),
                        'timkiem' => "",
                        'email' => $_SESSION['$email'],
                    ]);
                }
        
    }
   
     }