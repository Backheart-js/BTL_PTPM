<?php
if (isset($_POST['mashk']) && isset($_POST['cccd'])) {
    include('../../config/config.php');
    if (isset($_SESSION['LoginOK'])) {
        include('../../model.php');
        $ps = new Process();
    } else {
        header("location: ../../index.php");
    }
} else if (isset($_GET['mashk']) && isset($_GET['cccd'])) {
} else {
    header("location: ../index.php");
}

if (isset($_POST['mashk']) && isset($_POST['cccd']) || isset($_GET['mashk']) && isset($_GET['cccd'])) {
    if (isset($_POST['mashk']) && isset($_POST['cccd'])) {
        $ma_shkcu = $_POST['mashk'];
        $cccd = $_POST['cccd'];
    } else if (isset($_GET['mashk']) && isset($_GET['cccd'])) {
        $ma_shkcu = $_GET['mashk'];
        $cccd = $_GET['cccd'];
    }
    $rownc = $ps->getCB($cccd, "cccd", "thanhvien");
?>
    <div class="col-md-8 ms-auto me-auto mb-5 pt-2 bg-white rounded shadow-sm">
        <h4 class="text-center">THÊM THÔNG TIN CHO SỔ HỘ KHẨU MỚI</h4>
        <form class="needs-validation" action="process-tachkhau.php" method="POST" onsubmit="return checkaddshk2()" id="form-check" validate>
            <div class="row g-3">
                <div class="col-md-12 form-group">
                    <label for="validationCustom01" class="form-label">MÃ SỔ HỘ KHẨU</label>
                    <input type="text" class="form-control" id="mashk" name="mashk" required>
                    <div class="grmessage-checkshk"><span id='message-checkshk'></span></div>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">HỌ VÀ TÊN CHỦ HỘ</label>
                    <input type="text" class="form-control" value="<?php echo $rownc['hoten'] ?>" id="hotenchuho" name="hotenchuho" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">NƠI THƯỜNG TRÚ</label>
                    <input type="text" class="form-control" id="noithuongtru" name="noithuongtru" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">NGÀY CẤP</label>
                    <input type="date" class="form-control" id="ngaycap" name="ngaycap" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">THÀNH PHỐ</label>
                    <input type="text" class="form-control" id="thanhpho" name="thanhpho" required>
                    <span class="form-message"></span>
                </div>
            </div>
            <div class="row g-3 mt-2">
                <h4 class="text-center">THÔNG TIN CHỦ HỘ</h4>
                <div class="col-md-6 form-group">
                    <label for="validationCustom01" class="form-label">MÃ CĂN CƯỚC CÔNG DÂN</label>
                    <input type="text" class="form-control" id="cccd" value="<?php echo $rownc['cccd'] ?>" name="cccd" readonly required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">HỌ VÀ TÊN CHỦ HỘ</label>
                    <input type="text" class="form-control" id="hoten" value="<?php echo $rownc['hoten'] ?>" name="hoten" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">HỌ VÀ TÊN KHÁC</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['hotenkhac'] ?>" name="hotenkhac">
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">NGÀY SINH</label>
                    <input type="date" class="form-control" id="ngaysinh" value="<?php echo $rownc['ngaysinh'] ?>" name="ngaysinh" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">GIỚI TÍNH</label>
                    <select class="form-select" aria-label="Default select example" id="gioitinh" name="gioitinh">
                        <?php
                        if ($rownc['gioitinh'] == "Nam") {
                        ?>
                            <option selected value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        <?php
                        } else {
                        ?>
                            <option value="Nam">Nam</option>
                            <option selected value="Nữ">Nữ</option>
                        <?php
                        }
                        ?>
                    </select>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">NGUYÊN QUÁN</label>
                    <input type="text" class="form-control" id="nguyenquan" value="<?php echo $rownc['nguyenquan'] ?>" name="nguyenquan" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">DÂN TỘC</label>
                    <input type="text" class="form-control" id="dantoc" value="<?php echo $rownc['dantoc'] ?>" name="dantoc" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">TÔN GIÁO</label>
                    <input type="text" class="form-control" id="tongiao" value="<?php echo $rownc['tongiao'] ?>" name="tongiao">
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">QUỐC TỊCH</label>
                    <input type="text" class="form-control" id="quoctich" value="<?php echo $rownc['quoctich'] ?>" name="quoctich" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">NGHỀ NGHIỆP NƠI LÀM VIỆC</label>
                    <input type="text" class="form-control" id="nghenghiepnoilamviec" value="<?php echo $rownc['nghenghiepnoilamviec'] ?>" name="nghenghiepnoilamviec" required>
                    <span class="form-message"></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="validationCustom02" class="form-label">NƠI THƯỜNG TRÚ TRƯỚC ĐÂY</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['noithuongtrutruocday'] ?>" name="noithuongtrutruocday">
                </div>
                <div class="col-12 d-flex justify-content-end mb-3">
                    <button class="btn btn-primary" type="submit" name="btnSubmitTachSHK">HOÀN TẤT TÁCH KHẨU</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/Validator.js"></script>
    <script src="../../js/script.js"></script>
    
<?php
}
//}
?>