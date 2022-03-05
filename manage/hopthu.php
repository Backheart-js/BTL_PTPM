<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../model.php');
    include('partials-front/header.php');
    $ps = new Process();
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-start">
                    <div class="col-md-2 nav flex-column nav-pills mt-2 me-3 border border-secondary rounded shadow-sm" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <h5 class="text-center text-secondary">MENU</h5>
                        <hr>
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Giải Đáp Thông Tin</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Chuyển Khẩu</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Tách Khẩu</button>
                        <button class="nav-link" id="v-pills-luutru-tab" data-bs-toggle="pill" data-bs-target="#v-pills-luutru" type="button" role="tab" aria-controls="v-pills-luutru" aria-selected="false">Lưu Trữ</button>
                        <button class="nav-link" id="v-pills-timkiem-tab" data-bs-toggle="pill" data-bs-target="#v-pills-timkiem" type="button" role="tab" aria-controls="v-pills-timkiem" aria-selected="false">Tìm Kiếm</button>
                    </div>
                    <!-- style="background-color: #fafafa;" -->
                    <div class="tab-content col-md-10" id="v-pills-tabContent">
                        <div class="tab-pane fade show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row border border-secondary rounded">
                                <div class="col-md-3 border-end border-secondary">
                                    <small>EMAIL: DAODAN2612@GMAIL.COM</small><br>
                                    <small>NGÀY HỎI: 5/3/2022</small><br>
                                    <small>HỌ TÊN: ĐÀO DUY ĐÁN</small><br>
                                    <small>Tình Trạng: ĐANG CHỜ XỬ LÝ</small>
                                </div>
                                <div class="col-md-7 border-end border-secondary">
                                    <p>Lý do: Bởi vì</p>
                                </div>
                                <div class="col-md-2 p-2">
                                    <button class="btn btn-primary mb-2">Hoàn Tất</button><br>
                                    <button class="btn btn-primary">Xóa</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-2" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                        </div>
                        <div class="tab-pane fade p-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                        </div>
                        <div class="tab-pane fade p-2" id="v-pills-luutru" role="tabpanel" aria-labelledby="v-pills-luutru-tab">

                        </div>
                        <div class="tab-pane fade p-2" id="v-pills-timkiem" role="tabpanel" aria-labelledby="v-pills-timkiem-tab">
                            <div class="col-md-4 mt-2">
                                <form class="flex-row">
                                    <input class="form-control me-2" type="search" id="mashk" placeholder="Tìm kiếm câu hỏi (Nhập Ngày, Email)" aria-label="Search">
                                    <button class="btn btn-success mt-1" id="searchSHK" type="button">Tìm kiếm</button>
                                </form>
                            </div>
                            <div class="">
                                <div class="row border border-secondary rounded mt-2">
                                    <div class="col-md-3 border-end border-secondary">
                                        <small>EMAIL: DAODAN2612@GMAIL.COM</small><br>
                                        <small>NGÀY HỎI: 5/3/2022</small><br>
                                        <small>HỌ TÊN: ĐÀO DUY ĐÁN</small><br>
                                        <small>Tình Trạng: ĐANG CHỜ XỬ LÝ</small>
                                    </div>
                                    <div class="col-md-7 border-end border-secondary">
                                        <p>Lý do: Bởi vì</p>
                                    </div>
                                    <div class="col-md-2 p-2">
                                        <button class="btn btn-primary mb-2">Hoàn Tất</button><br>
                                        <button class="btn btn-primary">Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include("partials-front/footer.php");
} else {
    header("location: ../index.php");
}
?>