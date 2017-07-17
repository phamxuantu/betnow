<?php
class Run
{
    function run()
    {
        require_once('Controllers/betnowController.php');
        $bnController = new betnowController();
        if (isset($_GET['action'])) {
            $bnController->$_GET['action']();
        } else {
            $bnController->home();
        }
    }
}
?>