<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../model.php');
    $ps = new Process();
    $resultca = $ps->getALL("1","loaichucvu","tb_chucvu");
    $resultcb = $ps->getALL("2","loaichucvu","tb_chucvu");
    
    if (isset($_POST['mashk'])&&isset($_POST['cccd'])) {
        $ma_shkcu = $_POST['mashk'];
        $cccd = $_POST['cccd'];
        $rownc = $ps->getCB($cccd, "cccd", "tb_chitietshk");
        ?>
    <div class="col-md-8 ms-auto me-auto mb-5 pt-2 bg-white rounded shadow-sm">
        <h4 class="text-center">THÊM THÔNG TIN CHO SỔ HỘ KHẨU MỚI</h4>
        <form class="needs-validation" action="process-addSHK.php" method="POST" onsubmit="return checkTK()" novalidate>
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">MÃ SỔ HỘ KHẨU</label>
                    <input type="text" class="form-control" id="mashknew" name="mashknew" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">HỌ VÀ TÊN CHỦ HỘ</label>
                    <input type="text" class="form-control" value="<?php echo $rownc['hoten'] ?>" id="validationCustom02" name="hotenchuho" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NƠI THƯỜNG TRÚ</label>
                    <input type="text" class="form-control" id="noithuongtru" name="noithuongtru" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NGÀY CẤP</label>
                    <input type="date" class="form-control" id="ngaycap" name="ngaycap" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">TRƯỞNG CÔNG AN</label>
                    <select class="form-select" aria-label="Default select example" id="truongcongana" name="truongcongana">
                        <?php
                        for ($i = 0; $i < count($resultca); $i++) {
                            $rowca = $resultca[$i];
                        ?>
                            <option value="<?php echo $rowca['ma_chucvu'] ?>"><?php echo $rowca['hoten'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">THÀNH PHỐ</label>
                    <input type="text" class="form-control" id="validationCustom02" name="thanhpho" required>
                </div>
            </div>
            <div class="row g-3 mt-2">
                <h4 class="text-center">THÔNG TIN CHỦ HỘ</h4>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">MÃ CĂN CƯỚC CÔNG DÂN</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $rownc['cccd'] ?>" name="cccd" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">HỌ VÀ TÊN CHỦ HỘ</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['hoten'] ?>" name="hoten" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">HỌ VÀ TÊN KHÁC</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['hotenkhac'] ?>" name="hotenkhac" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NGÀY SINH</label>
                    <input type="date" class="form-control" id="validationCustom02" value="<?php echo $rownc['ngaysinh'] ?>" name="ngaysinh" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">GIỚI TÍNH</label>
                    <select class="form-select" aria-label="Default select example" name="gioitinh">
                        <?php
                        if($rownc['gioitinh']=="Nam"){
                        ?>
                        <option selected value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <?php
                        }else{
                            ?>
                            <option value="Nam">Nam</option>
                            <option selected value="Nữ">Nữ</option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NGUYÊN QUÁN</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['nguyenquan'] ?>" name="nguyenquan" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">DÂN TỘC</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['dantoc'] ?>" name="dantoc" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">TÔN GIÁO</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['tongiao'] ?>" name="tongiao" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">QUỐC TỊCH</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['quoctich'] ?>" name="quoctich" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NGHỀ NGHIỆP NƠI LÀM VIỆC</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['nghenghiepnoilamviec'] ?>" name="nghenghiepnoilamviec" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NƠI THƯỜNG TRÚ TRƯỚC ĐÂY</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $rownc['noithuongtrutruocday'] ?>" name="noithuongtrutruocday" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">CÁN BỘ ĐĂNG KÝ</label>
                    <select class="form-select" aria-label="Default select example" name="canbodangky">
                        <?php
                        for ($i = 0; $i < count($resultcb); $i++) {
                            $rowcb = $resultcb[$i];
                            if($rowcb['ma_chucvu']==$rownc['canbodangky']){
                        ?>
                            <option value="<?php echo $rowcb['ma_chucvu'] ?>" selected><?php echo $rowcb['hoten'] ?></option>
                        <?php
                            }else{
                                ?>
                                <option value="<?php echo $rowcb['ma_chucvu'] ?>"><?php echo $rowcb['hoten'] ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">TRƯỞNG CÔNG AN</label>
                    <select class="form-select" aria-label="Default select example" name="truongconganb">
                        <?php
                        for ($i = 0; $i < count($resultca); $i++) {
                            $rowca = $resultca[$i];
                            if($rowca['ma_chucvu']==$rownc['truongcongan']){
                            ?>
                            <option value="<?php echo $rowca['ma_chucvu'] ?>" selected><?php echo $rowca['hoten'] ?></option>
                        <?php
                            }else{
                                ?>
                                <option value="<?php echo $rowca['ma_chucvu'] ?>"><?php echo $rowca['hoten'] ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-end mb-3">
                    <button class="btn btn-primary" type="submit" name="btnSubmitTachSHK">HOÀN TẤT TÁCH KHẨU</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/script.js"></script>
<?php
    }
}
?>