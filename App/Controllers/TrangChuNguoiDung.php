<?php
class TrangChuNguoiDung extends controller{
    protected $tcnd;

    function __construct()
    {
        $this->tcnd=$this->model('TinTucNoiBat');
    }
     function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'Home_v',
                'dulieu'=>$this->tcnd->Tintucnoibat_find('',''),
                'tintuc'=>$this->tcnd->Tintucnoibat_find('','')
            ]);
        }
    }