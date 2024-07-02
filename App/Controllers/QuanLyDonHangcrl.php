
<?php
class QuanLyDonHangcrl extends controller{
    protected $qldh;
    function __construct()
    {
        $this->qldh=$this->model('QuanLyDonHang');
    }
    function Get_data(){
        $this->view('TrangChuCaNhan_v',[
            'page'=>'QuanLiDonHang_v',
            'dulieu'=>$this->qldh->Quanlydonhang_find($_SESSION['$email'])
        ]);
    }
}