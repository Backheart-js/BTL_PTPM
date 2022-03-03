<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../BTL_QLNK/style/style.css">
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
                            <button class="btn btn-outline-success" type="submit">Đăng nhập</button>
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
                        <a href="#2" class="list-group-item list-group-item-action">Nguyễn Thị F</a>
                        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    </div>
                </div>
                <div class="col-md-8 pt-2 ms-auto">
                    <div id="home" style="color:white" class="bg-danger shadow-sm p-2">
                        <h5 class="text-center">Công An Thành Phố Hà Nội</h5>
                        <h4 class="text-center">SỔ HỘ KHẨU</h4>
                        <h5 class="text-center">SỐ: 0102039</h5>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Họ và tên chủ hộ: </span><span class="fs-5">Đào Văn A</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Nơi thường trú: </span><span class="fs-5">PX-PY-HN</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Ngày cấp: </span><span class="fs-4">Ngày 27, Tháng 02, Năm 2008</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">TRƯỞNG CÔNG AN XÃ: </span><span class="fs-5">Vũ Đại C</span>
                        </div>
                    </div>
                    <div id="chuho" class="mt-2 bg-white shadow-sm p-2">
                        <h4 class="text-center">CHỦ HỘ</h4>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Họ và tên: </span><span class="fs-4">Đào Văn A</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Họ và tên gọi khác(nếu có):</span><span class="fs-4"></span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Ngày, tháng, năm sinh: </span><span class="fs-4">1/1/1999</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Giới tính: </span><span class="fs-4">Nam</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Quê quán: </span><span class="fs-4">Phú Yên - Phú Xuyên - Hà Nội</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Dân tộc: </span><span class="fs-4">Kinh</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Tôn giáo: </span><span class="fs-4">Không</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">CCCD số: </span><span class="fs-4">001201023000</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Hộ chiếu số: </span><span class="fs-4">A</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Nghề nghiệp, nơi làm việc: </span><span class="fs-4">Nông dân</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Cán bộ đăng ký: </span><span class="fs-4">Nguyễn Văn D</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Trưởng công an H: </span><span class="fs-4">Vũ Đại C</span>
                        </div>
                    </div>
                    <div id="2" class="mt-2 bg-white shadow-sm p-2">
                        <h4 class="text-center">QUAN HỆ VỚI CHỦ HỘ: Vợ</h4>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Họ và tên: </span><span class="fs-4">Nguyễn Thị F</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Họ và tên gọi khác(nếu có):</span><span class="fs-4"></span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Ngày, tháng, năm sinh: </span><span class="fs-4">1/1/2000</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Giới tính: </span><span class="fs-4">Nữ</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Quê quán: </span><span class="fs-4">Phú Yên - Phú Xuyên - Hà Nội</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Dân tộc: </span><span class="fs-4">Kinh</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Tôn giáo: </span><span class="fs-4">Không</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">CCCD số: </span><span class="fs-4">001201023001</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Hộ chiếu số: </span><span class="fs-4">A</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Nghề nghiệp, nơi làm việc: </span><span class="fs-4">Nông dân</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Cán bộ đăng ký: </span><span class="fs-4">Nguyễn Văn D</span>
                        </div>
                        <div class="border-bottom d-flex justify-content-between mt-2 pb-2">
                            <span class="fw-bold fs-6">Trưởng công an H: </span><span class="fs-4">Vũ Đại C</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require "./partials-front/footer.php";
    ?>