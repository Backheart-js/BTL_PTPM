<?php
session_start();
require "./partials-front/header.php";
?>
<head>
    <title>Tải xuống thủ tục</title>
      <link rel="stylesheet" href="./style/formKhaibao.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
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