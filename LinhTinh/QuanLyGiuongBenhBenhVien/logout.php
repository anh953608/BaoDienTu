<?php
/**
 * Created by PhpStorm.
 * User: Q.Anh
 * Date: 12/11/2017
 * Time: 9:46 AM
 */
?>
<?php

    ob_start();
    session_start();
    unset($_SESSION['ten']);
    unset($_SESSION['IDMan']);
    header("Location:index.php")
?>
