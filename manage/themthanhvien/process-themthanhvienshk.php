<?php
include('../../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../../model.php');
    $ps = new Process();
    if(isset($_POST['btnSubmitAddMSHK'])){
        $count = 0;
        $ma_shk = $_POST['mashk'];
        $cccd = $_POST['cccd'];
        $quanhech = $_POST['quanhech'];
        $hoten = $_POST['hoten'];
        $hotenkhac = $_POST['hotenkhac'];
        $ngaysinh = $_POST['ngaysinh'];
        $gioitinh = $_POST['gioitinh'];
        $nguyenquan = $_POST['nguyenquan'];
        $dantoc = $_POST['dantoc'];
        $tongiao = $_POST['tongiao'];
        $quoctich = $_POST['quoctich'];
        $nghenghiepnoilamviec = $_POST['nghenghiepnoilamviec'];
        $noithuongtrutruocday = $_POST['noithuongtrutruocday'];
        $canbodangky = $_SESSION['LoginOK'][1];
        $chuho = false;
        $tamvang = false;
        $stmt = $dbh->prepare("INSERT INTO `thanhvien`(`ma_shk`, `cccd`, `chuho`, `quanhech`, `hoten`, `hotenkhac`, `ngaysinh`, `gioitinh`, `nguyenquan`, `dantoc`, `tongiao`, `quoctich`, `nghenghiepnoilamviec`, `noithuongtrutruocday`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $ma_shk);
        $stmt->bindParam(2, $cccd);
        $stmt->bindParam(3, $chuho);
        $stmt->bindParam(4, $quanhech);
        $stmt->bindParam(5, $hoten);
        $stmt->bindParam(6, $hotenkhac);
        $stmt->bindParam(7, $ngaysinh);
        $stmt->bindParam(8, $gioitinh);
        $stmt->bindParam(9, $nguyenquan);
        $stmt->bindParam(10, $dantoc);
        $stmt->bindParam(11, $tongiao);
        $stmt->bindParam(12, $quoctich);
        $stmt->bindParam(13, $nghenghiepnoilamviec);
        $stmt->bindParam(14, $noithuongtrutruocday);
        if($stmt->execute()){
            $count++;
        }
        $stmt = $dbh->prepare("INSERT INTO `taikhoan_thanhvien`(`ma_taikhoan`, `cccd`) VALUES (?, ?)");
        $stmt->bindParam(1, $canbodangky);
        $stmt->bindParam(2, $cccd);
        if($stmt->execute()){
            $count++;
        }
        if($count==2){
            $done = "Thêm hoàn tất!";
            header("location: ../shkmanage.php?mashk=$ma_shk&done=$done");
        }
    }else{
        header("location: ../index.php");
    }
}else{
    header("location: ../../index.php");
}
?>