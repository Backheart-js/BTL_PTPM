<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../model.php');
    include('partials-front/header.php');
    $ps = new Process();
    $resultca = $ps->getALL("1","loaichucvu","tb_chucvu");
    $resultcb = $ps->getALL("2","loaichucvu","tb_chucvu");
?>
    <main style="background-color: #fafafa;" class="container rounded">
        <div class="col-md-2">
            <a href="index.php" class="text-decoration-none btn btn-primary"><i class="bi bi-arrow-left"></i> Quay Lại</a>
        </div>
        <div class="container pt-2  ms-3 me-3">
            <h4 class="text-center">TẠO SỔ HỘ KHẨU MỚI</h4>
            <div class="col-md-8 ms-auto me-auto bg-white rounded shadow-sm p-2">
                <form class="needs-validation" action="process-addSHK.php" method="POST" novalidate>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">MÃ SỔ HỘ KHẨU</label>
                            <input type="text" class="form-control" id="validationCustom01" name="mashk" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">HỌ VÀ TÊN CHỦ HỘ</label>
                            <input type="text" class="form-control" id="validationCustom02" name="hotenchuho" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">NƠI THƯỜNG TRÚ</label>
                            <input type="text" class="form-control" id="validationCustom02" name="noithuongtru" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">NGÀY CẤP</label>
                            <input type="date" class="form-control" id="validationCustom02" name="ngaycap" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">TRƯỞNG CÔNG AN</label>
                            <select class="form-select" aria-label="Default select example" name="truongcongana">
                                <?php
                                for($i = 0; $i < count($resultca); $i++){
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
                            <input type="text" class="form-control" id="validationCustom01" name="cccd" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">HỌ VÀ TÊN CHỦ HỘ</label>
                            <input type="text" class="form-control" id="validationCustom02" name="hoten" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">HỌ VÀ TÊN KHÁC</label>
                            <input type="text" class="form-control" id="validationCustom02" name="hotenkhac" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">NGÀY SINH</label>
                            <input type="date" class="form-control" id="validationCustom02" name="ngaysinh" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">GIỚI TÍNH</label>
                            <select class="form-select" aria-label="Default select example" name="gioitinh">
                                <option selected value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">NGUYÊN QUÁN</label>
                            <input type="text" class="form-control" id="validationCustom02" name="nguyenquan" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">DÂN TỘC</label>
                            <input type="text" class="form-control" id="validationCustom02" name="dantoc" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">TÔN GIÁO</label>
                            <input type="text" class="form-control" id="validationCustom02" name="tongiao" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">QUỐC TỊCH</label>
                            <input type="text" class="form-control" id="validationCustom02" name="quoctich" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">NGHỀ NGHIỆP NƠI LÀM VIỆC</label>
                            <input type="text" class="form-control" id="validationCustom02" name="nghenghiepnoilamviec" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">NƠI THƯỜNG TRÚ TRƯỚC ĐÂY</label>
                            <input type="text" class="form-control" id="validationCustom02" name="noithuongtrutruocday" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">CÁN BỘ ĐĂNG KÝ</label>
                            <select class="form-select" aria-label="Default select example" name="canbodangky">
                                <?php
                                for($i = 0; $i < count($resultcb); $i++){
                                    $rowcb = $resultcb[$i];
                                ?>
                                <option value="<?php echo $rowcb['ma_chucvu'] ?>"><?php echo $rowcb['hoten'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">TRƯỞNG CÔNG AN</label>
                            <select class="form-select" aria-label="Default select example" name="truongconganb">
                                <?php
                                for($i = 0; $i < count($resultca); $i++){
                                    $rowca = $resultca[$i];
                                ?>
                                <option value="<?php echo $rowca['ma_chucvu'] ?>"><?php echo $rowca['hoten'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end mb-3">
                            <button class="btn btn-primary" type="submit" name="btnSubmitAddSHK">HOÀN TẤT ĐĂNG KÝ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
include("partials-front/footer.php");
} else {
    header("location: ../index.php");
}
?>