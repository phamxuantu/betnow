<?php
session_start();
require_once('Views/betnowView.php');
require_once('Models/betnowModel.php');

class betnowController
{

    public function home()
    {
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
        } else {
            $username = '';
        }
        $bnView = new betnowView();
        $bnView->showhome($username);
    }

    public function addData()
    {
        if(isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $bnModel = new betnowModel();
            $data = count($_POST['nhapso']);
            $arr = '';
            for ($r = 0; $r < $data; $r++) {
                $arr .= $_POST['nhapso'][$r] . ',';
            }
            $rs = $bnModel->addData($arr, $id);
            if ($rs) {
                $betnow = $bnModel->getData($id);
                $bnView = new betnowView();
                $bnView->showData($betnow);
            }
        }
        else{
            echo '<script type="text/javascript">alert("Bạn chưa đăng nhập!!!")</script>';
            $this->login();
        }
    }

    public function login()
    {
        $bnView = new betnowView();
        $bnView->login();
    }

    public function checkLogin()
    {
        if ($_POST['execute'] == 'Đăng nhập') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $u = array('username' => $username,
                'password' => $password,);
            $bnModel = new betnowModel();
            $check = $bnModel->checkLogin($u);
            if ($check != '') {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $check;
                header("location: index.php?action=home");
            } else {
                echo '<script type="text/javascript">alert("Sai tên tài khoản hoặc mật khẩu!!!")</script>';
                $this->login();
            }
        } else {
            header("location: index.php?action=register");
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['id']);
        header('location: index.php?action=home');
    }
}

?>