<?php 
    class controller{
        public function model($model){
            include_once './App/Models/'.$model.'.php';
            return new $model;
        }
        public function view($view,$data=[]){
                 include_once './App/Views/'.$view.'.php';     
        }
    }
?>