<?php
class Trainghiemtong extends controller{
    protected $tn;
    function Get_data(){
        $this->view('TrangChuNguoiDung_v',[
            'page'=>'Trainghiem_tong_v'
        ]);
    } 
}