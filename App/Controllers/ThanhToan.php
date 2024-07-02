<?php
class ThanhToan extends controller{
    protected $tt;
    protected $qly;
    protected $dsve;
    function __construct()
    {
        $this->tt=$this->model('GioHang');
        $this->qly=$this->model('QuanLyDonHang');
        $this->dsve = $this->model('Ve_m');
    }
    function Get_data(){
        $this->view('TrangChuCaNhan_v',[
            'page'=>'ThanhToan_v',
            'dulieu'=>$this->tt->Quanlydonhang_find($_SESSION['$email'])
        ]);
    }
    function xacnhan(){
        if(isset($_POST['btnquaylai'])){
            $this->view('TrangChuMuaVe_v',[
                'page'=>'Muave_v',
                'dulieu' => $this->dsve->ve_find(''),
            'soluong' => '0',
            'thanhtien' => '0',
            'email' => $_SESSION['$email'],
            $this->tt->Giohang_del(),
            ]);
        }
        if(isset($_POST['btnxacnhan'])){
            echo "<script>alert('Thanh toán thành công !!!')</script>";
$this->view('TrangChuCaNhan_v',[
    'page'=>'QuanLiDonHang_v',
    $this->qly->Quanlydonhang_ins(),
    $this->tt->Giohang_del(),
    'dulieu'=>$this->qly->Quanlydonhang_find($_SESSION['$email'])
]);
        }   
        if(isset($_POST['btnkhuyenmai'])){
            $this->view('TrangChuCaNhan_v',[
                'page'=>'ThanhToan_v',
                'dulieu'=>$this->tt->Giohang_find($_SESSION['$email'])
            ]);
                    }   
    }
}