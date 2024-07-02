<?php
    class TinTuc extends controller{
        protected $tnb;
            function __construct(){
                $this->tnb=$this->model('TinTucNoiBat');
            }
        function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'TinTucNoiBat_v',
                'dulieu'=>$this->tnb->Tintucnoibat_find('','')
            ]);
        } 
    }
?>
