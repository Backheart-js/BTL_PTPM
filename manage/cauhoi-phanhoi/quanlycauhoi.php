<?php
include('../../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../../model.php');
    include('../partials-front/header.php');
    $ps = new Process();
?>

<head>

    <title>Câu hỏi</title>
</head>
    <main style="background-color: #fafafa;" class="container rounded">
        <div class="col-md-2">
            <a href="../index.php" class="text-decoration-none btn btn-primary"><i class="bi bi-arrow-left"></i> Quay Lại</a>
        </div>
        <div class="container pt-2  ms-3 me-3">
            <h4 class="text-uppercase">Câu hỏi</h4>
                        <div class="col-md-4 mt-2 mb-2">
                            <form class="flex-row">
                                <input class="form-control me-2" type="search" id="cauhoi" placeholder="TÌM KIẾM CÂU HỎI" aria-label="Search">
                                <button class="btn btn-primary mt-1" id="searchCH" type="button">Tìm kiếm</button>
                            </form>
                        </div>
                        <div id="cauHoiCanGiaiDap">
                            <?php
                            $querySelectallcauhoi = "SELECT* from cauhoi where ( trangthai = 0 or trangthai = 2 ) and loaicauhoi = 1";
                            $querySelectcauhoidangxuly = "SELECT* from cauhoi where trangthai = 2 and loaicauhoi = 1";
                            $resultServiceallcauhoi = mysqli_query($conn, $querySelectallcauhoi);
                            $resultServicecauhoidangxuly = mysqli_query($conn, $querySelectcauhoidangxuly);
                            $SEDArr = [];
                            if(mysqli_num_rows($resultServiceallcauhoi)>0 ){
                                $bds = mysqli_fetch_all($resultServiceallcauhoi, MYSQLI_ASSOC);
                                $SEDArr = $bds;
                                $cauHoi= $SEDArr;
                            }            
                            if(mysqli_num_rows($resultServicecauhoidangxuly)>0){
                                $row = mysqli_fetch_assoc($resultServicecauhoidangxuly);
                                $isDangXuLy= $row['ma_cauhoi'];
                            }


                            // $querySelect = "SELECT* from cauhoi where trangthai = 2 and loaicauhoi = 2";
                            // $resultService = mysqli_query($conn, $querySelect);
                            // if(mysqli_num_rows($resultService)>0){
                            //     $row = mysqli_fetch_assoc($resultService);
                            //     return $row['ma_cauhoi'];
                            // }else{
                            //     return false;
                            // }

                            


                            if ($cauHoi != false) {
                                for ($i = 0; $i < count($cauHoi); $i++) {
                                    $row = $cauHoi[$i];
                                    $classCH = $row['ma_cauhoi'];
                                    if($row['trangthai']==0){
                                        $trangthai = "Đang chờ xử lý";
                                    }else if($row['trangthai']==2){
                                        $trangthai = "Đang xử lý";
                                    }
                            ?>
                                    <div class="row border-start border-top border-end mb-4">
                                        <div class="col-md-12 mt-1 mb-1 cauhoi p-2">
                                            <span class="text-uppercase"><i class="bi bi-envelope icon-email"></i>EMAIL: <?php echo $row['email'] ?></span>
                                        </div>
                                        <div class="col-md-12 mt-1 mb-1 cauhoi p-2">
                                            <span class="text-uppercase"><i class="bi bi-code-slash icon-email"></i>Mã: <?php echo $row['ma_cauhoi'] ?></span>
                                        </div>
                                        
                                        <div class="col-md-12 mt-1 mb-1 cauhoi p-2">
                                            <span class="text-uppercase"><i class="bi bi-code-slash icon-email"></i>Trạng thái: <?php echo $trangthai ?></span>
                                        </div>
                                        
                                        <div class="col-md-12 mb-1 cauhoi p-2">
                                            <?php
                                            $p = $row['lydo'];
                                            $text = substr($p, 0, 100);
                                            $text = $text . ' . . .';
                                            ?>
                                            <h5 class="text-uppercase">Nội dung</h5>
                                            <span><?php echo $text ?></span>
                                        </div>
                                        <div class="col-md-12 mb-1 cauhoi p-2">
                                            <h5 class="text-uppercase">Thao tác</h5>
                                            <a data-bs-toggle="modal" id="<?php echo $classCH ?>" data-bs-target="#exampleModal" class="xemchitiet text-decoration-none" role="button"><span class="thaotac"><i class="bi bi-eye"></i> CHI TIẾT</span></a>
                                            <?php
                                                if($trangthai=="Đang xử lý"){
                                            ?>
                                            <a href="index.php?controller=PhanHoi&action=phanhoicauhoi&macauhoi=<?php echo $row['ma_cauhoi'] ?>" class="text-decoration-none"><span class="thaotac"><i class="bi bi-reply-fill"></i> PHẢN HỒI</span></a>
                                            <?php
                                                }
                                            ?>
                                            <?php
                                                if($isDangXuLy==false){
                                            ?>
                                            <a href="index.php?controller=PhanHoi&action=chuyentrangthai&macauhoi=<?php echo $row['ma_cauhoi'] ?>" class="text-decoration-none"><span class="thaotac"><i class="bi bi-toggle-on"></i></i> CHUYỂN TRẠNG THÁI</span></a>
                                            <?php
                                            }
                                            ?>
                                            <a href="index.php?controller=PhanHoi&action=xoacauhoi&macauhoi=<?php echo $row['ma_cauhoi'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa câu hỏi này?')" class="text-decoration-none"><span class="thaotac"><i class="bi bi-trash"></i> XÓA</span></a>
                                        </div>
                                    </div>
                                    <hr>
                            <?php
                                }
                            }
                            ?>
                        </div>
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/Validator.js"></script>
    <script src="../../js/script.js"></script>
<?php
    //include("../partials-front/footer.php");
}
?>