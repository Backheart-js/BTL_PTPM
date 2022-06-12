<?php

include('../../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../../model.php');
    $ps = new Process();
    if(isset($_POST['btnSubmitAddSHK'])){
        $count = 0;
        $ma_shk = $_POST['mashk'];
        $hotenchuho = $_POST['hotenchuho'];
        $noithuongtru = $_POST['noithuongtru'];
        $ngaycap = $_POST['ngaycap'];
        $thanhpho = $_POST['thanhpho'];
        $cccd = $_POST['cccd'];
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
        $stmt = $dbh->prepare("INSERT INTO `sohokhau`(`ma_shk`, `hotenchuho`, `noithuongtru`, `ngaycap`, `thanhpho`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $ma_shk);
        $stmt->bindParam(2, $hotenchuho);
        $stmt->bindParam(3, $noithuongtru);
        $stmt->bindParam(4, $ngaycap);
        $stmt->bindParam(5, $thanhpho);
        if($stmt->execute()){
            $count++;
        }
        $chuho = true;
        $quanhech = "";
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
        $stmt = $dbh->prepare("INSERT INTO `sohokhau_taikhoan`(`ma_shk`, `ma_taikhoan`) VALUES (?, ?)");
        $stmt->bindParam(1, $ma_shk);
        $stmt->bindParam(2, $canbodangky);
        if($stmt->execute()){
            $count++;
        }
        $stmt = $dbh->prepare("INSERT INTO `taikhoan_thanhvien`(`ma_taikhoan`, `cccd`) VALUES (?, ?)");
        $stmt->bindParam(1, $canbodangky);
        $stmt->bindParam(2, $cccd);
        if($stmt->execute()){
            $count++;
        }
        if($count==4){
            $link = "../shkmanage.php?mashk=$ma_shk";
            echo "Hoàn tất đăng ký. Để xem chi tiết và thêm thông tin <a href='$link'>nhấn vào đây!</a>";
        }
    }else{
        header("location: add-shk.php");
    }
}else{
    header("location: ../../index.php");
}

?>