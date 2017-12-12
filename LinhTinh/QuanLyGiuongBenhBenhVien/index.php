<?php
/**
 * Created by PhpStorm.
 * User: Q.Anh
 * Date: 12/3/2017
 * Time: 1:27 AM
 */
include ('header.php');
?>
<!--/ Navigation bar-->
<!--Modal box-->
<!--/ Modal box-->
<!--Banner-->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="banner-text text-center">
                    <div class="text-border">
                        <h2 class="text-dec">Website quản lý giường bệnh</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-4">
                        <div class="intro-para text-center quote">
                            <div class="login-box-body">
                                <p class="login-box-msg">ĐĂNG NHẬP</p>
                                <div class="form-group">
                                    <form action="index.php" method="post">
                                        <div class="form-group has-feedback"> <!----- username -------------->
                                            <input class="form-control square" style="border-radius:0px;" placeholder="Tên đăng nhập"  id="loginid" name="loginid" type="text" />
                                            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        </div>
                                        <div class="form-group has-feedback"><!----- password -------------->
                                            <input class="form-control " style="border-radius:0px;" placeholder="Mật khẩu" id="loginpsw" name="loginpsw" type="password" />
                                            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>
                                        <?php
                                            if(isset($_REQUEST['status'])){
                                                if($_REQUEST['status']==0){
                                                    echo "<p style='color: #e8dcdc; font-size: 14px;'>Tài khoản hoặc mật khẩu không chính xác!</p>";
                                                }
                                                else if($_REQUEST['status']==1){
                                                    echo "<p style='color: #e8dcdc; font-size: 14px;'>Bạn chưa đăng nhập!</p>";
                                                }
                                            }
                                        ?>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn btn-green btn-block btn-flat" style="border-radius:0px;">Đăng nhập</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_REQUEST['loginid'])&&isset($_REQUEST['loginpsw'])){
        $usermane = $_REQUEST['loginid'];
        $password = $_REQUEST['loginpsw'];
        $result = mysqli_query($con,"SELECT * FROM manager WHERE Username ='$usermane' AND Pass ='$password'" );
        $numRow =  mysqli_num_rows($result);
        if($numRow != 0){
            while ( $row = mysqli_fetch_row($result) )
            {
                $_SESSION["ten"] = $row[4];
                $_SESSION["IDMan"] = $row[0];
            }
            header("Location:Wellcome.php");

        }
        else{
            header('Location:index.php?status=0');
        }
    }
?>
</body>
</html>
