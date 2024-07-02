<?php
class Haidang_admin extends controller{
    protected $hd;
        function __construct(){
            $this->hd=$this->model('haidang');
        }
    function Get_data(){
        $this->view('MasterLayout_admin',[
            'page'=>'Haidang_admin_v',
            'dulieu'=>$this->hd->haidang_find('',''),
            'timkiem'=>"",
            'email' => $_SESSION['$email'],

        ]);
    } 
    function xoa($id){
        $kq=$this->hd->haidang_del($id);
        if($kq)
        echo "<script> alert('Xoa thanh cong!')</script>";
    else 
    echo "<script> alert('Xoa that bai!')</script>";
         $this->view('MasterLayout_admin',[
        'page'=>'Haidang_admin_v',
        'dulieu'=>$this->hd->haidang_find('',''),
        'timkiem'=>"",
        'email' => $_SESSION['$email'],


    ]);
     }
     function timkiem()
     {
        if(isset($_POST['btnTroVe'])){
            $this->view('MasterLayout_admin', [
                'page' => 'Haidang_admin_v',
                'dulieu' => $this->hd->haidang_find(''),
                'timkiem'=>"",
                'email' => $_SESSION['$email'],
          
            ]);
        }
        if(isset($_POST['btnThem'])){
            $this->view('MasterLayout_admin', [
                'page' => 'Haidang_them_v',
                'dulieu' => $this->hd->haidang_find(''),
                'timkiem'=>"",
                'email' => $_SESSION['$email'],
          
            ]);
        }
       
         if (isset($_POST['btnTimKiem'])) {
             $tk = $_POST['txtTimKiem'];
             if ($tk == "") {
                 echo "<script>alert('Vui lòng nhập thông tin tìm kiếm')</script>";
                 $this->view('MasterLayout_admin', [
                     'page' => 'Haidang_admin_v',
                     'dulieu' => $this->hd->haidang_find(''),
                     'timkiem'=>"",
                     'email' => $_SESSION['$email'],
               
                 ]);
             } else {

                 $this->view('MasterLayout_admin', [
                     'page' => 'Haidang_admin_v',
                     'dulieu' => $this->hd->haidang_find($tk),
                     'timkiem'=>$tk,
                     'email' => $_SESSION['$email'],
                    
                    
                 ]);
             }
         }
     

     }
     function sua($id){
        $this->view('MasterLayout_admin',[
            'page'=>'Haidang_sua_v',
            'dulieu'=>$this->hd->haidang_find($id,''),
            'email' => $_SESSION['$email'],

        ]);
     }
     function suadl()
    {
        if (isset($_POST['btnSua'])) {
            $id = $_POST['txtID'];
            $anhve = $_POST['txtAnhVe'];
            $tde = $_POST['txtTentn'];
            $mta = $_POST['txtmota'];
           

            $check = $this->hd->checktrung($tde);
            if ($check) {
                echo "<script>alert('Tên trải nghiệm đã tồn tại')</script>";
                // echo "<script>window.location.href = 've_sua_v.php';</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'Haidang_sua_v',
                    'dulieu' => $this->hd->haidang_find($id),
                    'email' => $_SESSION['$email'],
                   
                ]);
            } else {

                if ($anhve == $_POST['txtAnhVeCu']) {
                    echo "<script>alert('Ảnh trải nghiệm đã tồn tại')</script>";
                    // echo "<script>window.location.href = 've_sua_v.php';</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'Haidang_sua_v',
                        'dulieu' => $this->hd->haidang_find($id),
                        'email' => $_SESSION['$email'],
                       
                    ]);
                } else {
                    if ($anhve == "") {
                        $anhve = $_POST['txtAnhVeCu'];
                    }

                    $kq = $this->hd->haidang_upd($id, $anhve, $tde, $mta);
                    if ($kq) {
                        echo "<script>alert('Sửa thành công')</script>";
                    } else {
                        echo "<script>alert('Sửa thất bại')</script>";
                    }
                    $this->view('MasterLayout_admin', [
                        'page' => 'Haidang_admin_v',
                        'dulieu' => $this->hd->haidang_find(''),
                        'email' => $_SESSION['$email'],
                       
                    ]);
                }
            }
        }
        if (isset($_POST['btnTroVe'])) {
                    $this->view('MasterLayout_admin', [
                        'page' => 'Haidang_admin_v',
                        'dulieu' => $this->hd->haidang_find(''),
                        'email' => $_SESSION['$email'],
                        
                    ]);
                }
        
    }
   
     }


    

    

?>