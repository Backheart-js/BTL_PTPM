<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('partials-front/header.php');
?>
    <main>
        <div class="container">
            <div class="row">
                <h4 class="text-center mt-2">QUẢN LÝ NHÂN KHẨU</h4>
                <h5 class="text-center mt-2">CÁN BỘ: NGUYỄN VĂN B</h5>
                <div class="col-md-12 bg-secondary mt-3 ms-3 me-3">
                    <div>
                        <button type="button" class="btn btn-primary mt-2">THÊM HỘ KHẨU</button>
                        <button type="button" class="btn btn-primary mt-2">HỘP THƯ</button>
                        <button type="button" class="btn btn-primary mt-2">CHUYỂN KHẨU</button>
                        <button type="button" class="btn btn-primary mt-2">TÁCH KHẨU</button>
                    </div>
                    <div class="col-md-4 mt-2">
                        <form class="flex-row">
                            <input class="form-control me-2" type="search" placeholder="Tìm kiếm sổ hộ khẩu" aria-label="Search">
                            <button class="btn btn-success mt-1" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <hr class="text-white">
                </div>
                <div class="col-md-12 bg-secondary mb-3 ms-3 me-3 pb-5">
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">010827325</h5>
                                    <a href="#" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include('partials-front/footer.php');
} else {
}
?>