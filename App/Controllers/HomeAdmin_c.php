<?php
class HomeAdmin_c extends controller
{
    function Get_data()
    {
        $this->view('MasterLayout_admin', [
            'page' => 'HomeAdmin_v',
            'email' => $_SESSION['$email']
        ]);
    }
}
?>
<!--  -->