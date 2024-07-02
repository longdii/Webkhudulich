<?php
class TraiNghiemCongVienRong extends controller{
    protected $cvr;
        function __construct(){
            $this->cvr=$this->model('congvienrong');
        }
    function Get_data(){
        $this->view('TrangChuNguoiDung_v',[
            'page'=>'TraiNghiemCongVienRong_v',
            'dulieu'=>$this->cvr->congvienrong_find('','')

        ]);
    } 
}
?>