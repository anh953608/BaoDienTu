<?php
/**
 * Created by PhpStorm.
 * User: Q.Anh
 * Date: 12/11/2017
 * Time: 10:42 AM
 */
?>
<div id="sidebar-wrapper" style="margin-top: 62px;">
    <ul class="sidebar-nav" style="margin-left:0;">
        <li class="sidebar-brand">
            <a href="#menu-toggle"  id="menu-toggle" style="margin-top:20px;float:right;" > <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true"></i> </a>
        </li>
        <br>
        <li>
            <a href="#"> <i class="fa fa-th" aria-hidden="true"> </i> <span style="margin-left:10px;">QL giường bệnh</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-hospital-o" aria-hidden="true"> </i> <span style="margin-left:10px;">QL phòng bệnh</span> </a>
        </li>
        <li>
            <a href="#"> <i class="fa fa-address-card" aria-hidden="true"> </i> <span style="margin-left:10px;">QL cán bộ</span> </a>
        </li>

        <li>
            <a href="#"><i class="	fa fa-wheelchair" aria-hidden="true"> </i> <span style="margin-left:10px;">QL người bệnh</span>  </a>
        </li>
    </ul>
</div>
<script>
    $(document).ready(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });

</script>
