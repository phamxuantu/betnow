<?php
class betnowView{
    public function showhome($username){
        require_once('Templates/home.php');
    }

    public function showData($betnow){
        require_once('Templates/list.php');
    }

    public function login(){
        require_once('Templates/formLogin.php');
    }
}
?>