<?php
require "../../config/config.php";
require "../../model.php";
$ps = new Process();
if (!isset($_SESSION['LoginOK'])) {
    header('location: ../../index.php');
} else {
    if(isset($_POST['cccd'])){
        $return = $ps->getCB($_POST['cccd'],'cccd', 'thanhvien');
        if($return!=false){
            echo "<span id='message-checkcccd' style='color:red'>Căn cước công dân đã tồn tại!</span>";
        }else{
            echo "<span id='message-checkcccd' style='color:green'>Căn cước công dân hợp lệ!</span>";
        }
    }
}
?>