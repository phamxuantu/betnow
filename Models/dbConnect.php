<?php
class DB_Connect {
    public function connect(){
        $con = mysqli_connect('localhost', 'root', '', 'test');
        mysqli_set_charset($con,"utf8");
        return $con;
    }

}
?>