<?php
require "../../config/config.php";
require "../../model.php";
$ps = new Process();
if (!isset($_SESSION['LoginOK'])) {
    header('location: ../../index.php');
} else {
    if(isset($_POST['mashk'])){
        $return = $ps->getCB($_POST['mashk'],'ma_shk', 'sohokhau');
        if($return!=false){
            echo "<span id='message-checkshk' style='color:red'>Mã sổ hộ khẩu đã tồn tại</span>";
        }else{
            echo "<span id='message-checkshk' style='color:green'>Mã sổ hộ khẩu hợp lệ</span>";
        }
    }
}
?>