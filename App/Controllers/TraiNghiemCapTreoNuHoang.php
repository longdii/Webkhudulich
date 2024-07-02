<?php
    class TraiNghiemCapTreoNuHoang extends controller{
        protected $dsct;
        function __construct()
        {
            $this->dsct=$this->model('CapTreoNuHoang_admin_m');
        }
        function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'TraiNghiemCapTreoNuHoang_v',
                'dulieu'=>$this->dsct->captreo_select('')
            ]);
        }
    }
?>