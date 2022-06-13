<?php
require "../../config/config.php";
require "../../model.php";
$ps = new Process();
if (!isset($_SESSION['LoginOK'])) {
    header('location: ../../index.php');
} else {
    if (isset($_POST['btnDoiChuHo'])) {
        $count = 0;
        $cccdnew = $_POST['cccdchnew'];
        $sql = "Update thanhvien set chuho = 1, quanhech = '' where cccd = '{$cccdnew}'";
        if(mysqli_query($conn, $sql)){
            $count++;
        }
        $resultchuho = $ps->getCB($cccdnew, "cccd", "thanhvien");
        $result = $ps->getALL($cccdnew, "cccd", "thanhvien");
        $row = $result[0];
        $resultall = $ps->getALL($row['ma_shk'], "ma_shk", "thanhvien");
        for($i = 0; $i < count($resultall); $i++){
            $rowi = $resultall[$i];
            if($rowi['cccd']!=$cccdnew){
                $quanhech = $_POST['quanhechuho'.$rowi['cccd']];
                $sql = "Update thanhvien set chuho = 0, quanhech = '{$quanhech}' where cccd = '{$rowi['cccd']}'";
                if(mysqli_query($conn, $sql)){
                    $count++;
                }
            }
        }
        
        if(count($resultall)==$count){
            $sql = "Update sohokhau set hotenchuho = '{$resultchuho['hoten']}' where ma_shk = '{$resultchuho['ma_shk']}'";
            mysqli_query($conn, $sql);
            $done = "Thay đổi chủ hộ hoàn tất!";
            header("location: ../shkmanage.php?mashk={$row['ma_shk']}&done=$done");
        }
    }
}
?>