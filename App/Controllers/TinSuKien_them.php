<?php
class TinSuKien_them extends controller
{
    protected $tsk;
    function __construct()
    {
        $this->tsk = $this->model('SuKien');
    }
    function Get_data()
    {
        $this->view('MasterLayout_admin', [
            'page' => 'SuKien_them_v',
            'anhve' => '',
            'tieude' => '',
            'mota' => ''
        ]);
    }
    
    function themmoi()
    {
        $anhve = $_POST['txtAnhVe'];
        $td = $_POST['txtTenTin'];
        $mta = $_POST['txtMota'];
        if (isset($_POST['btnThem'])) {
            if ($anhve == "" || $td == "" || $mta == "") {
                echo "<script>alert('Không được để trống các trường!')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'SuKien_them_v',
                    'anhve' => '',
                    'tieude' => '',
                    'mota' => '',
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                $kq = $this->tsk->checktrung($td);
                if (!$kq) {
                    $this->tsk->sukien_ins($anhve, $td, $mta);
                    echo "<script>alert('Thêm mới thành công!')</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'SuKien_admin_v',
                        'dulieu' => $this->tsk->sukien_find(''),
                        'timkiem' => "",
                        'email' => $_SESSION['$email'],
                    ]);
                } else {
                    echo "<script>alert('Thêm mới thất bại!')</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'SuKien_them_v',
                        'anhve' => '',
                        'tieude' => '',
                        'mota' => '',
                        'email' => $_SESSION['$email'],
                    ]);
                }
            }
        }

        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'SuKien_admin_v',
                'dulieu' => $this->tsk->sukien_find(''),
                'timkiem' => "",
                'email' => $_SESSION['$email'],
            ]);
        }
    }
}


?>
<!--  -->