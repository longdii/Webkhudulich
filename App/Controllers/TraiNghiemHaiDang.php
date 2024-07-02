<?php
class TraiNghiemHaiDang extends controller{
    protected $hd;
    function __construct(){
        $this->hd=$this->model('haidang');
    }
    function Get_data(){
        $this->view('TrangChuNguoiDung_v',[
            'page'=>'TraiNghiemHaiDang_v',
            'dulieu'=>$this->hd->haidang_find('','')
        ]);
    }
}