<?php
include('../../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../../model.php');
    $ps = new Process();
    if (isset($_GET['mashk']) && isset($_GET['cccd'])) {
        $count = 0;
        $sql0 = "Delete from taikhoan_thanhvien where cccd = {$_GET['cccd']}";
        if(mysqli_query($conn, $sql0)){
            $count+=1;
        }
        $sql = "Delete from thanhvien where ma_shk = {$_GET['mashk']} and cccd = {$_GET['cccd']}";
        if(mysqli_query($conn, $sql)){
            $count+=1;
        }
        if($count==2){
            $done = "Sửa hoàn tất!";
            header("location: ../shkmanage.php?mashk={$_GET['mashk']}&done={$done}");
        }
    }else{
        header("location: ../index.php");
    }
}else{
    header("location: ../../index.php");
}
?>