<?php
class TraiNghiemCongVienNuoc extends controller{
    protected $cvn;
    function __construct(){
        $this->cvn=$this->model('congviennuoc');
    }
    function Get_data(){
        $this->view('TrangChuNguoiDung_v',[
            'page'=>'TraiNghiemCongVienNuoc_v',
            'dulieu'=>$this->cvn->congviennuoc_find('','')

        ]);
    }
}