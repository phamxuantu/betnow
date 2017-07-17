<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:800,400,300,700,300i|Open+Sans:300i,400,600"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css_tinhtoan.css"/>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body onload="startTime()">

<div class="wrapper">
    <div class="header"><!--  HEADER-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <img src="css/KYAT 4D logo.png"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header_right">
                        <p id="curentTime"></p>
                        <?php if($username != ''){?>
                            <a href="index.php?action=logout"><?php echo $username?> </a>
                        <?php } else{?>
                            <a href="index.php?action=login">Login </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Đóng HEADER-->
    <div class="content"><!-- CONTENT-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu"><!-- MENU -->
                        <ul>
                            <li><a href="">Introduction to 4D</a></li>
                            <li><a href="">Payout Rate</a></li>
                            <li><a href="">How to Best</a></li>
                        </ul>
                    </div>
                    <div class="frm_bet"><!-- BET FORM -->
                        <center><h3> Bet Now</h3></center>
                        <form role="form" class="form_test" method="POST"
                              action="?action=addData">
                            <div class="more-row">
                                <div class="row_tinh">
                                    <input type="text" name="nhapso[]"/>
                                    <input type="text" name="nhapso[]"/>
                                    <input type="text" name="nhapso[]"/>
                                    <input type="text" name="nhapso[]"/>
                                    <p> X </p>
                                    <input type="text" name="nhapso[]"/>
                                    <p> N units, </p>
                                    <input type="text" name="nhapso[]"/>
                                    <p>$ units </p>
                                </div>
                            </div>
                            <a id="add" onclick="myfunction()">ADD </a>
                            <div class="sum_unit row_tinh"><!-- TÍNH SUM SỐ UNIT-->
                                <input type="text" name="sum_unit_n"  value="0"/>
                                <p> N units for </p>
                                <input type="text" name="days"/>
                                <p> days </p>
                                <input type="text" name="sum_unit_s"  value="0"/>
                                <p> S units for </p>
                                <input type="text" name="days"/>
                                <p> days </p>
                            </div>
                            <div class="total">
                                <h5> Total: </h5>
                                <p id="price">0 ks </p>
                            </div>
                            <input type="submit" class="button" name="add" value="SUBMIT">
                        </form>
                        <div class="test" style="display:none;"><!-- THÊM KHI CLICK ADD-->
                            <div class="row_tinh">
                                <input type="text" name="nhapso[]"/>
                                <input type="text" name="nhapso[]"/>
                                <input type="text" name="nhapso[]"/>
                                <input type="text" name="nhapso[]"/>
                                <p> X </p>
                                <input type="text" name="nhapso[]"/>
                                <p> N units, </p>
                                <input type="text" name="nhapso[]"/>
                                <p>$ units </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ĐÓNG CONTENT-->
</div>
</body>
<script src="js/process.js"></script>
</html>