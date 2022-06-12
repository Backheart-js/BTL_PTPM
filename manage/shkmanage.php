<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../model.php');
    $ps = new Process();
    if (isset($_GET['mashk'])) {
        $mashk = $_GET['mashk'];
        $ps = new Process();
        $result = $ps->getALL($mashk, "ma_shk", "sohokhau");
        if ($result != false) {
            $row = $result[0];
            $resultct = $ps->getALL($mashk, "ma_shk", "thanhvien");
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Trang quản lý sổ hộ khẩu</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <link rel="stylesheet" href="../style/style.css">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
                <script src="../../BTL_QLNK/js/jquery-3.6.0.min.js"></script>
            </head>

            <body class="bg-light">
                <header>
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow-sm">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.php">Trang chủ</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    </ul>
                                    <form class="d-flex">
                                        <?php
                                        if (!isset($_SESSION['LoginOK'])) {
                                        ?>
                                            <a href="../login.php"><button class="btn btn-outline-success" type="button">Đăng nhập</button></a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="index.php"><button class="btn btn-outline-success me-2" type="button">Quản Lý</button></a>
                                            <a href="../logout.php"><button class="btn btn-outline-success" type="button">Đăng xuất</button></a>
                                        <?php
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                <main style="background-color: #fafafa;">
                    <div class="container mt-3 mb-5">
                        <div class="row">
                            <div class="col-md-3" id="sidebar-info">
                                <div class="list-group bg-white shadow-sm p-2">
                                    <h4>Danh sách nhân khẩu trong sổ hộ khẩu</h4>
                                    <a href="#home" class="list-group-item list-group-item-action active" aria-current="true">
                                        Trang chính
                                    </a>
                                    <a href="#chuho" class="list-group-item list-group-item-action">Chủ hộ</a>
                                    <?php
                                    for ($i = 0; $i < count($resultct); $i++) {
                                        $ngdan = $resultct[$i];
                                        if ($ngdan['chuho'] != 1) {
                                    ?>
                                            <a href="#<?php echo $ngdan['cccd'] ?>" class="list-group-item list-group-item-action"><?php echo $ngdan['hoten'] ?></a>
                                    <?php
                                        } else {
                                            continue;
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-8 pt-2 ms-auto">
                                <?php
                                if (isset($_GET['done'])) {
                                    echo "<p style='color:blue'>{$_GET['done']}</p>";
                                }
                                ?>
                                <div class="col-md-2">
                                    <a href="index.php" class="text-decoration-none btn btn-primary mb-2"><i class="bi bi-arrow-left"></i> Quay Lại</a>
                                </div>
                                <button type="button" class="btn btn-primary me-2 mb-2" data-toggle="modal" data-target="#exampleModal">
                                    <a href="themthanhvien/themthanhvienshk.php?mashk=<?php echo $mashk ?>" class="text-white text-decoration-none">Thêm thành viên</a><br>
                                </button>
                                <button type="button" class="btn btn-primary me-2 mb-2" data-toggle="modal" data-target="#exampleModal">
                                    <a href="doichuho/doichuho.php?mashk=<?php echo $mashk ?>" class="text-white text-decoration-none">Đổi chủ hộ</a><br>
                                </button>
                                <div id="home" style="color:white" class="bg-danger shadow-sm p-2">
                                    <h5 class="text-center">Công An Thành Phố <?php echo $row['thanhpho'] ?></h5>
                                    <h4 class="text-center">SỔ HỘ KHẨU</h4>
                                    <h5 class="text-center">SỐ: <?php echo $row['ma_shk'] ?></h5>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Họ và tên chủ hộ: </span><span class="fs-5"><?php echo $row['hotenchuho'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Nơi thường trú: </span><span class="fs-5"><?php echo $row['noithuongtru'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Ngày cấp: </span><span class="fs-4"><?php echo $ps->getDate($row['ngaycap']) ?></span>
                                    </div>
                                    <?php
                                    $cbdkhk = $ps->getCB($row['ma_shk'], 'ma_shk', 'sohokhau_taikhoan');
                                    $hotencbdkhk = $ps->getCB($cbdkhk['ma_taikhoan'], 'ma_taikhoan', 'taikhoan');
                                    ?>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Cán bộ đăng ký: </span><span class="fs-4"><?php echo $hotencbdkhk['hoten'] ?></span>
                                    </div>
                                </div>
                                <?php
                                for ($i = 0; $i < count($resultct); $i++) {
                                    $ch = $resultct[$i];
                                    if ($ch['chuho'] == true) {
                                        break;
                                    }
                                }
                                ?>
                                <div id="chuho" class="mt-2 bg-white shadow-sm p-2">
                                    <h4 class="text-center">CHỦ HỘ</h4>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Họ và tên: </span><span class="fs-4"><?php echo $ch['hoten'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Họ và tên gọi khác(nếu có):</span><span class="fs-4"><?php echo $ch['hotenkhac'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Ngày, tháng, năm sinh: </span><span class="fs-4"><?php echo $ps->getDate($ch['ngaysinh']) ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Giới tính: </span><span class="fs-4"><?php echo $ch['gioitinh'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Quê quán: </span><span class="fs-4"><?php echo $ch['nguyenquan'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Dân tộc: </span><span class="fs-4"><?php echo $ch['dantoc'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Tôn giáo: </span><span class="fs-4"><?php echo $ch['tongiao'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Quốc tịch: </span><span class="fs-4"><?php echo $ch['quoctich'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">CCCD số: </span><span class="fs-4"><?php echo $ch['cccd'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Nghề nghiệp, nơi làm việc: </span><span class="fs-4"><?php echo $ch['nghenghiepnoilamviec'] ?></span>
                                    </div>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Nơi thường trú trước đây: </span><span class="fs-4"><?php echo $ch['noithuongtrutruocday'] ?></span>
                                    </div>
                                    <?php
                                    $cbdkch = $ps->getCB($ch['cccd'], 'cccd', 'taikhoan_thanhvien');
                                    $hotencbdkch = $ps->getCB($cbdkch['ma_taikhoan'], 'ma_taikhoan', 'taikhoan');
                                    ?>
                                    <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                        <span class="fw-bold fs-6">Cán bộ đăng ký: </span><span class="fs-4"><?php echo $hotencbdkch['hoten'] ?></span>
                                    </div>
                                    <div class="d-flex mt-3 mb-3 justify-content-center">
                                        <button type="button" class="btn btn-primary me-2" data-toggle="modal" data-target="#exampleModal">
                                            <a href="suathongtin/updateTTND.php?cccd=<?php echo $ch['cccd']?>" class="text-white text-decoration-none">Sửa thông tin</a><br>
                                        </button>
                                    </div>
                                </div>
                                <?php
                                for ($i = 0; $i < count($resultct); $i++) {
                                    $ngdan = $resultct[$i];
                                    if ($ngdan['chuho'] != 1) {
                                ?>
                                        <div id="<?php echo $ngdan['cccd'] ?>" class="mt-2 bg-white shadow-sm p-2">
                                            <h4 class="text-center">QUAN HỆ VỚI CHỦ HỘ: <?php echo $ngdan['quanhech'] ?></h4>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Họ và tên: </span><span class="fs-4"><?php echo $ngdan['hoten'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Họ và tên gọi khác(nếu có):</span><span class="fs-4"><?php echo $ngdan['hotenkhac'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Ngày, tháng, năm sinh: </span><span class="fs-4"><?php echo $ps->getDate($ngdan['ngaysinh']) ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Giới tính: </span><span class="fs-4"><?php echo $ngdan['gioitinh'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Quê quán: </span><span class="fs-4"><?php echo $ngdan['nguyenquan'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Dân tộc: </span><span class="fs-4"><?php echo $ngdan['dantoc'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Tôn giáo: </span><span class="fs-4"><?php echo $ngdan['tongiao'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Quốc tịch: </span><span class="fs-4"><?php echo $ngdan['quoctich'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">CCCD số: </span><span class="fs-4"><?php echo $ngdan['cccd'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Nghề nghiệp, nơi làm việc: </span><span class="fs-4"><?php echo $ngdan['nghenghiepnoilamviec'] ?></span>
                                            </div>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Nơi thường trú trước đây: </span><span class="fs-4"><?php echo $ngdan['noithuongtrutruocday'] ?></span>
                                            </div>
                                            <?php
                                            $cbdktv = $ps->getCB($ngdan['cccd'], 'cccd', 'taikhoan_thanhvien');
                                            $hotencbdktv = $ps->getCB($cbdktv['ma_taikhoan'], 'ma_taikhoan', 'taikhoan');
                                            ?>
                                            <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                                                <span class="fw-bold fs-6">Cán bộ đăng ký: </span><span class="fs-4"><?php echo $hotencbdktv['hoten'] ?></span>
                                            </div>
                                            <div class="d-flex mt-3 mb-3 justify-content-center">
                                                <button type="button" class="btn btn-primary me-2" data-toggle="modal" data-target="#exampleModal">
                                                    <a href="suathongtin/updateTTND.php?cccd=<?php echo $ngdan['cccd']?>" class="text-white text-decoration-none">Sửa thông tin</a><br>
                                                </button>
                                                <button type="button" class="btn btn-primary me-2" data-toggle="modal" data-target="#exampleModal">
                                                    <a onclick="return confirm('Bạn chắc chắn muốn gỡ người này khỏi hộ khẩu?')" href="xoathanhvien/process-deleteshk.php?mashk=<?php echo $ngdan['ma_shk'] ?>&cccd=<?php echo $ngdan['cccd'] ?>" class="text-white text-decoration-none">Gỡ người dân</a><br>
                                                </button>
                                                <button type="button" class="btn btn-primary me-2" data-toggle="modal" data-target="#exampleModal">
                                                    <a href="chuyenhokhau/chuyenkhau.php?cccd=<?php echo $ngdan['cccd'] ?>" class="text-white text-decoration-none">Chuyển khẩu</a><br>
                                                </button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    <a href="tachkhau/tachkhau.php?mashk=<?php echo $ngdan['ma_shk'] ?>&cccd=<?php echo $ngdan['cccd'] ?>" class="text-white text-decoration-none">Tách khẩu</a><br>
                                                </button>
                                            </div>
                                        </div>
                                <?php
                                    } else {
                                        continue;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </main>

    <?php
            require "./partials-front/footer.php";
        } else {
            echo "<h1>Không tìm thấy sổ hộ khẩu này!</h1>";
        }
    } else {
        header("location: index.php");
    }
}
    ?>