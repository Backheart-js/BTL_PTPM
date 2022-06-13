<?php
require "./partials-front/header.php";
?>
<head> 
    <title>Gửi câu hỏi</title>
    <link rel="stylesheet" href="./style/formChuyenKhau.css">
</head>
<body>

    <div class="main container" style="background-color: #f5f5f5;">
        <div class="mt-2 mb-2">
            <a href="index.php" class="text-decoration-none d-flex align-items-center"><span class="material-icons">
                    arrow_back
                </span> <span>Quay lại</span> </a>
        </div>
        <div>
            <?php
                if(isset($_GET['phanhoi'])){
                    ?>
                    <p class="fw-bold fs-6"><?php echo $_GET['phanhoi'] ?></p>
                    <?php
                }
            ?>
        </div>
        <form action="process-cauhoi.php" method="POST" class="form mt-5 ps-5 pe-5 pt-5 pb-5 container" id="form-2" enctype="multipart/form-data">
            <h3 class="heading text-center mb-5">BIỂU MẪU</h3>
            <span class="note"><strong>Ghi chú: </strong>Các thông tin có dấu <span class="icon-required">(*)</span> là thông tin bắt buộc phải nhập</span>

            <div class="form-content">
                <h5 class="heading-content mt-3">PHÂN LOẠI YÊU CẦU (VUI LÒNG CHỌN ĐỂ HIỆN Ô NHẬP THÔNG TIN)</h5>
                <hr class="mb-3 line-space">

                <div class="form-group mb-5">
                    <label for="type" class="form-label">Phân loại <span class="icon-required">(*)</span></label>
                    <select id="type" name="type" class="form-control">
                        <?php
                        if(isset($_GET['dang']) && $_GET['dang']==1){
                        ?>
                        <option value="1" selected>Gửi Câu Hỏi</option>
                        <?php
                        }else{
                        ?>
                        <option value="1">Gửi Câu Hỏi</option>
                        <?php
                        }
                        ?>
                        <?php
                        if(isset($_GET['dang']) && $_GET['dang']==2){
                        ?>
                        <option selected value="2">Yêu cầu chuyển khẩu</option>
                        <?php
                        }else{
                        ?>
                        <option value="2">Yêu cầu chuyển khẩu</option>
                        <?php
                        }
                        ?>
                    </select>
                    <span class="form-message"></span>
                </div>
                <div class="form-group mb-5" id="hdch">
                    
                </div>

                <h5 class="heading-content mt-5">TỜ KHAI THÔNG TIN</h5>
                <hr class="mb-3 line-space">
                <div id="form-cauhoi" style="display: none;">
                <div class="row">
                    <div class="form-group mb-2 col-lg-12">
                        <label for="fullname" class="form-label">Họ và tên <span class="icon-required">(*)</span></label>
                        <input id="fullname" name="fullname" type="text" placeholder="VD: Bình Nguyễn" class="form-control">
                        <span class="form-message"></span>
                    </div>
                </div>
                <div id="form-lydo" style="display: none">
                    <h5 class="heading-content mt-5">LÝ DO</h5>
                    <hr class="mb-3 line-space">
                    <div class="form-group mb-5">
                        <label for="content" class="form-label">Nội dung</label>
                        <textarea style="height:300px" maxlength="2000" row="30" id="content" name="content" placeholder="Nhập nội dung..." class="form-control">

                        </textarea>
                        <span class="form-message"></span>
                    </div>
                </div>
                <div id="form-file" style="display: none">
                    <h5 class="heading-content mt-5">TẠO YÊU CẦU CHUYỂN KHẨU</h5>
                    <hr class="mb-3 line-space">
                    <label for="content" class="form-label">Tải file dưới đây để nhập dữ liệu và gửi vào ô phía dưới!</label><br>
                    <a href="GiayChuyenHoKhau.docx" class="mb-4">Giấy khai báo chuyển khẩu</a><br><br><br>
                    <label for="content" class="form-label">Nơi gửi file</label><br>
                    <input type="file" name="file" id="fileupload">
                </div>
                <h5 class="heading-content mt-5">THÔNG TIN NHẬN PHẢN HỒI</h5>
                <hr class="mb-3 line-space">

                <div class="row">
                    <div class="form-group col-lg-6 mb-4">
                        <label for="number" class="form-label">Số điện thoại <span class="icon-required">(*)</span></label>
                        <input id="number" name="number" type="text" placeholder="VD: 09xxxxxxx" class="form-control">
                        <span class="form-message"></span>
                    </div>
                    
                    <div class="form-group col-lg-6 mb-4">
                        <label for="email" class="form-label">Email <span class="icon-required">(*)</span></label>
                        <input id="email" name="email" type="text" placeholder="VD: binhnguyen123@gmail.com" class="form-control">
                        <span class="form-message"></span>
                    </div>
                </div>

                <button type="submit" class="form-submit btn btn-primary" name="btnSubmit" >Gửi yêu cầu</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/Validator.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        // Validator({
        //     form: '#form-2',
        //     formGroupSelector: '.form-group',
        //     errorSelector: '.form-message',
        //     rules: [
        //         // Validator.isRequired('#type','Vui lòng chọn loại hồ sơ'),
        //         Validator.isRequired('#fullname','Vui lòng điền đầy đủ họ tên'),
        //         Validator.isRequired('#content','Điền đầy đủ nội dung yêu cầu'),
        //         Validator.isRequired('#number','Vui lòng điền số điên thoại'),
        //         Validator.isRequired('#email','Vui lòng điền Email'),
        //         Validator.isEmail('#email','Vui lòng nhập đúng email')
        //     ]
        // })
    </script>
<?php
        require "partials-front/footer.php"
    ?>