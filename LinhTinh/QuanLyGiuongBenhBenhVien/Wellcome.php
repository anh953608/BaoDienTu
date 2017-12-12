<?php
/**
 * Created by PhpStorm.
 * User: Q.Anh
 * Date: 12/3/2017
 * Time: 1:27 AM
 */
include ('header.php');
?>
<?php
    if(!isset($_SESSION['ten'])){
        header("Location:index.php?status=1");
    }
?>
<div id="wrapper">
    <?php
    include ('menu.php');
    ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="banner" style="margin-top: 42px;">
            <div class="bg-color">
                <div class="banner-text text-center">
                    <div class="container">
                        <div class="text-border">
                            <h4 class="text-dec">Đề tài: Website quản lý giường bệnh</h4>
                        </div>
                        <div class="col-sm-offset-4 col-sm-4">
                            <div class="intro-para text-center quote" style="font-size: 19px;">
                                <p style="margin-top: 7px;">GVHD: Mai Văn Hà</p>
                                <p>SVTH: Nguyễn Quốc Anh</p>
                                <p>&numsp; Đỗ Đức Huy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
