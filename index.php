<?php
require "./partials-front/header.php";
?>
<head>
    <title>Trang chủ</title>
</head>
<main style="padding-bottom: 100px;" id="body-index">
    <div>
        <div class="main-background">
            <div class="background-wrapper container">
                <div class="pt-3">
                    <h2 class="heading text-title" style="color:#fff;">Trang Thông Tin Nhân Khẩu Của Quận</h2>
                    <h2 class="heading text-title" style="color:#fff;">Hoàn Kiếm</h2>
                </div>
                <div class="row mt-2 pb-4">
                    <div class="col-md-5 ms-auto me-auto">
                        <form action="shkinformation.php" method="POST">
                            <div class="d-grid gap-2">
                                <h4 class="text-title" style="color:#fff;">Tra Cứu Thông Tin Sổ Hộ Khẩu</h4>
                                <input class="form-control me-2" type="search" placeholder="Nhập mã sổ hộ khẩu" name="mashk" aria-label="Search">
                                <button class="tracuu-btn btn ms-auto me-auto" name="tracuu" type="submit">Tra Cứu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-procedure">
            <div class="container">
                <div class="row mt-5 mb-3">
                    <div class="col-md-6 ms-auto me-auto">
                        <h1 class="text-center" style="font-weight:600; color: #333;">Chọn dịch vụ bên dưới</h1>
                    </div>
                </div>
                <div class="row mt-2 mb-5">
                    <div class="col-md-3 col-sm-6 ms-auto me-auto mb-2">
                        <a href="khaibaoOnline.php?dang=1" class="text-decoration-none">
                            <div class="d-grid gap-2">
                                <span style="height: 40px; transition: all 0.3s ease-out;" class="procedure-opiton btn shadow-sm" type="button">
                                    <h5 class="fw-bold text-white">Khai báo thủ tục</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 ms-auto me-auto mb-2">
                        <a href="cauhoi.php?dang=1" class="text-decoration-none">
                            <div class="d-grid gap-2">
                                <span style="height: 40px; transition: all 0.3s ease-out;" class="procedure-opiton btn shadow-sm" type="button">
                                    <h5 class="fw-bold text-white">Gửi Câu Hỏi</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 ms-auto me-auto mb-2">
                        <a href="cauhoi.php?dang=2" class="text-decoration-none">
                            <div class="d-grid gap-2">
                                <span style="height: 40px; transition: all 0.3s ease-out;" class="procedure-opiton btn shadow-sm" type="button">
                                    <h5 class="fw-bold text-white">Thủ Tục Chuyển Khẩu</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 ms-auto me-auto mb-2">
                        <a href="taixuong.php" class="text-decoration-none">
                            <div class="d-grid gap-2">
                                <span style="height: 40px; transition: all 0.3s ease-out;" class="procedure-opiton btn shadow-sm" type="button">
                                    <h5 class="fw-bold text-white">Tải Xuống Bản Đăng Ký</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-contact container mt-5" id="contact">
            <div class="row mt-5 mb-4">
                <div class="col-md-6 ms-auto me-auto">
                    <h1 class="text-center" style="font-weight:600; color: #333;">Liên hệ chúng tôi</h1>
                </div>
            </div>

            <div class="main__contact-content row">
                <div class="main__contact-map col-lg-6 col-md-12">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.98839009514!2d105.81945407552648!3d21.022738704089793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1653234076232!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-1"></div>
                <div class="main__contact-info col-lg-5 col-md-12">
                    <h4 class="contact__info-desc">
                        Mọi thắc mắc, khiếu nại hoặc ý kiến trực tiếp vui lòng liên hệ đường dây nóng hoặc địa chỉ thư điện tử bên dưới với chúng tôi
                    </h4>
                    <div class="contact mt-4">
                        <div class="mb-2 contact-phone">
                            <i class=" conntact__icon fa-solid fa-phone"></i>
                            +84 0124 986 666
                        </div>
                        <div class="mb-2 contact-email">
                            <i class=" conntact__icon fa-solid fa-envelope"></i>
                            hanoisp.support@email.gov
                        </div>
                        <div class="mb-2 contact-address">
                            <i class=" conntact__icon fa-solid fa-location-dot"></i>
                            Ha Noi - Viet Nam
                        </div>
                    </div>
                    <h5 class="mt-5 mb-3">Nhận thông báo mới nhất</h5>
                    <div class="contact__noti">
                        <input class="contact__input" type="email" placeholder="abc@email.com">
                        <input class="contact__submit btn-dark" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require "./partials-front/footer.php";
?>