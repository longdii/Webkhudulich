<?php 
    class Home extends controller{

        function Get_data(){
                $this->view('MasterLayout',[
                    'page'=>'DangNhap_v'
                ]);
            } 
    }
?>