<?php
include('../../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../../model.php');
    $ps = new Process();
    if (isset($_POST['btnSubmitTachSHK'])) {
        $count = 0;
        $ma_shk = $_POST['mashk'];
        $hotenchuho = $_POST['hotenchuho'];
        $noithuongtru = $_POST['noithuongtru'];
        $ngaycap = $_POST['ngaycap'];
        $truongcongana = $_POST['truongcongana'];
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
        $stmt = $dbh->prepare("UPDATE `thanhvien` SET `ma_shk`= ?,`chuho`= ?,`quanhech`= ?,`hoten`= ?,`hotenkhac`= ?,`ngaysinh`= ?,`gioitinh`= ?,`nguyenquan`= ?,`dantoc`= ?,`tongiao`= ?,`quoctich`= ?,`nghenghiepnoilamviec`= ?,`noithuongtrutruocday`= ? WHERE `cccd`= ?");
        $stmt->bindParam(1, $ma_shk);
        $stmt->bindParam(2, $chuho);
        $stmt->bindParam(3, $quanhech);
        $stmt->bindParam(4, $hoten);
        $stmt->bindParam(5, $hotenkhac);
        $stmt->bindParam(6, $ngaysinh);
        $stmt->bindParam(7, $gioitinh);
        $stmt->bindParam(8, $nguyenquan);
        $stmt->bindParam(9, $dantoc);
        $stmt->bindParam(10, $tongiao);
        $stmt->bindParam(11, $quoctich);
        $stmt->bindParam(12, $nghenghiepnoilamviec);
        $stmt->bindParam(13, $noithuongtrutruocday);
        $stmt->bindParam(14, $cccd);
        if($stmt->execute()){
            $count++;
        }
        $stmt = $dbh->prepare("INSERT INTO `sohokhau_taikhoan`(`ma_shk`, `ma_taikhoan`) VALUES (?, ?)");
        $stmt->bindParam(1, $ma_shk);
        $stmt->bindParam(2, $canbodangky);
        if($stmt->execute()){
            $count++;
        }
        $stmt = $dbh->prepare("UPDATE `taikhoan_thanhvien` SET `ma_taikhoan` = ? WHERE `cccd` = ?");
        $stmt->bindParam(1, $canbodangky);
        $stmt->bindParam(2, $cccd);
        if($stmt->execute()){
            $count++;
        }
        if($count==4){
            $done = "Tách khẩu hoàn tất!";
            header("location: ../shkmanage.php?mashk=$ma_shk&done=$done");
        }
    }
}
?>