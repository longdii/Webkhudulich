<?php
    class TinSuKien extends controller{
        protected $tsk;
        function __construct(){
            $this->tsk=$this->model('SuKien');
        }
        function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'SuKien_v',
                'dulieu'=>$this->tsk->sukien_find('','')
            ]);
        }      
    }
?>