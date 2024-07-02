<?php
    class TinKhuyenMai extends controller{
        protected $tkm;
            function __construct(){
                $this->tkm=$this->model('KhuyenMai');
            }
        function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'KhuyenMai_v',
                'dulieu'=>$this->tkm->khuyenmai_find('','')
            ]);
        } 
    }
?>
