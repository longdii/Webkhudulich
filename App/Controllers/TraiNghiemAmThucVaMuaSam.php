<?php
    class TraiNghiemAmThucVaMuaSam extends controller{
        protected $dsat;
        function __construct()
        {
            $this->dsat=$this->model('AmThucVaMuaSam_admin_m');
        }
        function Get_data(){
            $this->view('TrangChuNguoiDung_v',[
                'page'=>'TraiNghiemAmThucVaMuaSam_v',
                'dulieu'=>$this->dsat->amthuc_select()
            ]);
        }
    }
?>