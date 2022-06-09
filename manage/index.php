<?php
include('../config/config.php');
if (isset($_SESSION['LoginOK'])) {
    include('../model.php');
    $ps = new Process();
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="d-flex" style="overflow-x:hidden;">
        <?php
            include('./sidebar/index.php');
        ?>
        <div id="wrapper">
            <?php
                include('./partials-front/header.php');
            ?>
            <main>
                <div class="content">
                    <div class="row">
                        <h2 class="text-center mt-4 content-title">QUẢN LÝ TRANG</h2>
                        <div class="container">
                            <div class="search-wrapper col-md-12 mt-4">
                                <div class=" col-md-6 mt-4 text-center">
                                    <form class="flex-row">
                                        <input class="search-input me-2" type="search" id="mashk" placeholder="Tìm kiếm sổ hộ khẩu theo mã sổ hộ khẩu hoặc cccd" aria-label="Search">
                                        <button class="search-btn btn mt-1" id="searchSHK" type="button">Tìm kiếm</button>
                                    </form>
                                </div>
                            </div>
                            <div class="result-wrapper col-md-12 mb-3 pb-5 px-4">
                                <div class="row" id="allshk">
                                    <?php
                                    $result = $ps->getALLElements('sohokhau');
                                    if($result!=false){
                                    for($i = 0; $i < count($result); $i++){
                                        $row = $result[$i];
                                    ?>
                                    <div class="col-md-3 mt-2">
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
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/Validator.js"></script>
    <script src="../js/theme-mode.js"></script>
</body>
</html>
<?php
} else {
    header("location: /BTL_PTPM/login/web/index.php");
}
?>