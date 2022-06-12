<?php
// session_start();
require "../../config/config.php";
require('../partials-front/header.php');
//$ps = new Process();
if (!isset($_SESSION['LoginOK'])) {
    header('location: ../../index.php');
} else {
    if(isset($_GET['cccd'])){
        $cccd = $_GET['cccd'];
        $sql = "Select* from thanhvien where cccd = '$cccd'";
        $result = mysqli_query($conn, $sql);
        $rowinfoshk = mysqli_fetch_assoc($result);
?>
    <head>
        <title>Quản lý thành viên</title>
    </head>
    <div class="container" style="margin-top: 72px;">
        <div class="mt-2 mb-2">
            <a href="../shkmanage.php?mashk=<?php echo $rowinfoshk['ma_shk'] ?>" class="text-decoration-none d-flex align-items-center"><span class="material-icons">
                    arrow_back
                </span> <span>Quay lại</span> </a>
        </div>
        <div class="bg-secondary rounded shadow-sm p-2 mb-2 text-white">
            <h5>Mã căn cước: <?php echo $cccd ?></h5>
            <input type="text" readonly style="display: none;" id="cccdmainde" value="<?php echo $cccd ?>">
            <h5>Họ Và Tên : <?php echo $rowinfoshk['hoten'] ?></h5>
            <h5>Số sổ hộ khẩu: <?php echo $rowinfoshk['ma_shk'] ?></h5>

        </div>
        <div class="row mb-5">
            <div class="col-md">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <h5>Sửa thông tin cho người dân</h5>
                    </div>
                </nav>
                <!-- Chỉnh sửa  -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <form action="process-updateTTNguoiDan.php" method="POST" id="form-check" novalidate>
                            <div class="d-flex flex-row align-items-center justify-content-between">
                                <span class="me-2 fw-bold fs-3">Mã số cccd của người cần sửa: </span>
                                <input class="form-control mt-2" name="cccdupdate" value="<?php echo $cccd; ?>" style="max-width: 150px;" readonly>
                            </div>
                           
                            <div>
                                <div class="displayblockshk">
                                
                                <div class="col-md me-1 mt-3 form-group">
                                
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Họ và tên</label>
                                    <input type="text" class="form-control informationshkupdate" id="hotenupdate" name="hotenupdate" value="<?php echo $rowinfoshk['hoten'] ?>" aria-describedby="emailHelp" required >
                                    <span class="form-message"></span>
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Họ và tên khác</label>
                                    <input type="text" class="form-control informationshkupdate" name="hotenkhacupdate" value="<?php echo $rowinfoshk['hotenkhac'] ?>" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Quan hệ với chủ hộ (Chủ hộ thì để trống)</label>
                                    <input type="text" class="form-control informationshkupdate" name="quanhechupdate" value="<?php echo $rowinfoshk['quanhech'] ?>" aria-describedby="emailHelp" >
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="validationCustom02" class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control informationshkupdate" id="ngaysinhupdate" name="ngaysinhupdate" id="validationCustom02" value="<?php echo $rowinfoshk['ngaysinh'] ?>" required >
                                    <span class="form-message"></span>
                                 </div>
                                 <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Giới tính</label>
                                    <input type="text" class="form-control informationshkupdate" id="gioitinhupdate" name="gioitinhupdate" value="<?php echo $rowinfoshk['gioitinh'] ?>" aria-describedby="emailHelp" required >
                                    <span class="form-message"></span>
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Quê quán</label>
                                    <input type="text" class="form-control informationshkupdate" id="nguyenquanupdate" name="nguyenquanupdate" value="<?php echo $rowinfoshk['nguyenquan'] ?>" aria-describedby="emailHelp" required >
                                    <span class="form-message"></span>
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Dân tộc</label>
                                    <input type="text" class="form-control informationshkupdate" id="dantocupdate" name="dantocupdate" value="<?php echo $rowinfoshk['dantoc'] ?>" aria-describedby="emailHelp" required >
                                    <span class="form-message"></span>
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Tôn giáo</label>
                                    <input type="text" class="form-control informationshkupdate" name="tongiaoupdate" value="<?php echo $rowinfoshk['tongiao'] ?>" aria-describedby="emailHelp" >
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Quốc tịch</label>
                                    <input type="text" class="form-control informationshkupdate" id="quoctichupdate" name="quoctichupdate" value="<?php echo $rowinfoshk['quoctich'] ?>" aria-describedby="emailHelp" required >
                                    <span class="form-message"></span>
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Nghề nghiệp </label>
                                    <input type="text" class="form-control informationshkupdate" id="nghenghiepnoilamviecupdate" name="nghenghiepnoilamviecupdate" value="<?php echo $rowinfoshk['nghenghiepnoilamviec'] ?>" aria-describedby="emailHelp" required >
                                    <span class="form-message"></span>
                                </div>
                                <div class="col-md me-1 mt-3 form-group">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Nơi thường trú trước đây</label>
                                    <input type="text" class="form-control informationshkupdate" name="noithuongtrutruocdayupdate" value="<?php echo $rowinfoshk['noithuongtrutruocday'] ?>" aria-describedby="emailHelp">
                                    <span class="form-message"></span>
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit" id="smUpdateshk" name="smUpdateshk">Xác Nhận Sửa</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        Validator({
                form: '#form-check',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#hotenupdate', 'Vui lòng điền đầy đủ họ tên'),
                    Validator.isRequired('#ngaysinhupdate', 'Vui lòng điền đầy đủ ngày sinh'),
                    Validator.isRequired('#gioitinhupdate', 'Vui lòng chọn giới tính'),
                    Validator.isRequired('#nguyenquanupdate', 'Vui lòng điền đầy đủ nguyên quán'),
                    Validator.isRequired('#dantocupdate', 'Vui lòng nhập dân tộc'),
                    Validator.isRequired('#quoctichupdate', 'Vui lòng nhập quốc tịch'),
                    Validator.isRequired('#nghenghiepnoilamviecupdate', 'Vui lòng điền nghề nghiệp và nơi làm việc'),
                    Validator.isRequired('#canbodangky', 'Vui lòng chọn cán bộ đăng ký'),
                    Validator.isRequired('#truongconganb', 'Vui lòng chọn trưởng công an phê duyệt')
                ]
            })
    </script>
    
<?php
require("../partials-front/footer.php");
    }
}

?>
</body>

</html>