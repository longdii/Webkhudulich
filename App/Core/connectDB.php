<?php 
class connectDB{
    public $con;
    protected $servername="localhost";
    protected $username="root";
    protected $password="admin";
    protected $dbname="db_api_qlkvc";
    function __construct(){
        $this->con=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}
?>
