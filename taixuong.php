<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải xuống thủ tục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style/formKhaibao.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php
        require "./partials-front/header.php";
    ?>
    <main>
        <div class="container rounded" style="background-color: #fafafa; min-height:662px">
            <div class="row">
            <a href="index.php" class="text-decoration-none d-flex align-items-center"><span class="material-icons">
                        arrow_back
                    </span> <span>Quay lại</span> </a>
                <div class="col-md-8 ms-auto me-auto mb-5">
                    <h4 class="text-center mt-3">TRA CỨU THÔNG TIN THỦ TỤC VÀ TẢI XUỐNG</h4>
                    <form class="flex-row mt-5">
                        <label for="validationCustom02" class="form-label">Nhập mã thủ tục để tìm kiếm</label>
                        <input class="form-control me-2" type="search" id="madon" placeholder="" aria-label="Search">
                        <button class="btn btn-success mt-1" id="searchTT" type="button">Tìm kiếm</button>
                    </form>
                    <div id="info-thutuc">

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    require("partials-front/footer.php")
    ?>