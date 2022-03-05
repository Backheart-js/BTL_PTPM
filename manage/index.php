<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('partials-front/header.php');
    include('../model.php');
    $ps = new Process();
?>
    <main>
        <div class="container">
            <div class="row">
                <h4 class="text-center mt-2">QUẢN LÝ NHÂN KHẨU</h4>
                <h5 class="text-center mt-2">CÁN BỘ: NGUYỄN VĂN B</h5>
                <div class="col-md-12 bg-secondary mt-3 ms-3 me-3">
                    <div>
                        <a href="add-shk.php"><button type="button" class="btn btn-primary mt-2">THÊM HỘ KHẨU</button></a>
                        <a href="hopthu.php"><button type="button" class="btn btn-primary mt-2">HỘP THƯ</button></a>
                        <button type="button" class="btn btn-primary mt-2">CHUYỂN KHẨU</button>
                        <a href="tachkhau.php"><button type="button" class="btn btn-primary mt-2">TÁCH KHẨU</button></a>
                    </div>
                    <div class="col-md-4 mt-2">
                        <form class="flex-row">
                            <input class="form-control me-2" type="search" id="mashk" placeholder="Tìm kiếm sổ hộ khẩu" aria-label="Search">
                            <button class="btn btn-success mt-1" id="searchSHK" type="button">Tìm kiếm</button>
                        </form>
                    </div>
                    <hr class="text-white">
                </div>
                <div class="col-md-12 bg-secondary mb-3 ms-3 me-3 pb-5">
                    <div class="row" id="allshk">
                        <?php
                        $result = $ps->getALLElements('tb_sohokhau');
                        for($i = 0; $i < count($result); $i++){
                            $row = $result[$i];
                        ?>
                        <div class="col-md-2 mt-2">
                            <div class="card">
                                <img src="../images/background/2.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['ma_shk']?></h5>
                                    <a href="shkmanage.php?mashk=<?php echo $row['ma_shk']?>" class="btn btn-primary">Xem thông tin</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include('partials-front/footer.php');
} else {
    header("location: ../index.php");
}
?>