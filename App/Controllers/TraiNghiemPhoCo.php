<?php
    class TraiNghiemPhoCo extends controller{
        protected $dspc;
        function __construct()
        {
            $this->dspc=$this->model('PhoCo_admin_m');
        }
        function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'TraiNghiemPhoCo_v',
                'dulieu'=>$this->dspc->phoco_select('')
            ]);
        }
    }
?>