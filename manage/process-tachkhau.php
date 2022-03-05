<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../model.php');
    $ps = new Process();
    if (isset($_POST['btnSubmitTachSHK'])) {
        $count = 0;
        $ma_shk = $_POST['mashknew'];
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
        $canbodangky = $_POST['canbodangky'];
        $truongconganb = $_POST['truongconganb'];

    }
}
?>