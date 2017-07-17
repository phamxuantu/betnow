<?php
require_once('dbConnect.php');

class betnowModel extends DB_Connect
{
    public function addData($arr, $id)
    {
        $data = split(',', $arr);
        $rows = (count($data) - 1) / 6;
        $numbers = '';
        $n = '';
        $s = '';
        for($r = 0; $r < $rows; $r++){
            $number = '';
            for ($i = 0; $i < 4; $i++) {
                $number .= $data[$r * 6 + $i];
            }
            $numbers .= $number . ',';
            $n .= $data[$r * 6 + 4] . ',';
            $s .= $data[$r * 6 + 5] . ',';
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `betnow` (`id`, `idUser`, `number`, `N units`, `S units`, `date`) VALUES (NULL, '" . $id . "', '" . $numbers . "', '" . $n . "', '" . $s . "', '". $date ."');";
        $con = $this->connect();
        $rs = $con->query($sql);
        return $rs;
    }

    public function getData($id)
    {
        $sql = 'SELECT * FROM `betnow` WHERE idUser =' . $id;
        $con = $this->connect();
        $rs = $con->query($sql);
        $betnow = array();
        if ($rs->num_rows > 0) {
            while ($bn = $rs->fetch_assoc()) {
                $betnow[] = $bn;
            }
        }
        return $betnow;
    }

    public function checkLogin($u)
    {
        $con = $this->connect();
        $result = $con->query('SELECT * FROM users');
        $users = array();
        $check = '';
        if ($result->num_rows > 0) {
            while ($rs = $result->fetch_assoc()) {
                $users[] = $rs;
            }
        }
        foreach ($users as $user):
            if (($user['username'] == $u['username']) && ($user['password'] == $u['password'])) {
                $check = $user['id'];
            }
        endforeach;
        return $check;
    }
}

?>