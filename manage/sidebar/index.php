<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    
</style>
<body>
    <div id="sidebar" class="position-fixed">
        <a class="home-title" href="">
            <div class="homepage">
                Trang chủ
            </div>
        </a>
        <hr style="background-color: #ccc; margin: 0;">

        <ul class="sidebar-list">
            <h5>
                MENU
            </h5>
            <a href="/BTL_PTPM/manage/taosohokhau/add-shk.php" class="sidebar-link">
                <li class="sidebar-item">
                    Tạo hộ khẩu mới
                </li>
            </a>
            <a href="" class="sidebar-link">
                <li class="sidebar-item">
                    Quản lý nhân khẩu
                </li>
            </a>
            <a href="/BTL_PTPM/manage/tachkhau/tachkhau.php" class="sidebar-link">
                <li class="sidebar-item">
                    Tách khẩu
                </li>
            </a>
            <a href="" class="sidebar-link">
                <li class="sidebar-item">
                    Khai báo tạm vắng/tạm trú
                </li>
            </a>
            <a href="" class="sidebar-link">
                <li class="sidebar-item">
                    Giải đáp thắc mắc
                </li>
            </a>
        </ul>
        <hr style="background-color: #ccc; margin: 0;">

        <div class="analytic">
            <i class="fa-solid fa-chart-line pe-3"></i>
            <span>Thống kê</span>
        </div>
        <hr style="background-color: #ccc; margin: 0;">

        <div class="setting d-flex">
            <div class="setting-wrapper">
                <i class="fa-solid fa-gear pe-3"></i>
                <span>Cài đặt</span>
            </div>
            <div class="setting-wrapper">
                <i class="fa-solid fa-angle-down "></i>
            </div>
        </div>
        <div class="setting-options">
            <ul class="setting-options-list">
                <li class="setting-options-item">
                    <div class="language d-flex">
                        <span>Ngôn ngữ</span>
                        <select name="" id="">
                            <option value="">Vietnamese</option>
                            <option value="">English</option>
                        </select>
                    </div>
                </li>
                <li class="setting-options-item">
                    <div class="background d-flex">
                        <span>Chủ đề</span>
                        <div id="toggleBtn"></div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="admin">
            <i class="fa-solid fa-circle-user me-1"></i>
            <span>ADMIN</span>
        </div>
        
    </div>

    <!-- <script>
        const setting = document.querySelector('.setting');
        let isOpen = false;

        const handleClick = () => {
            let setting_options = document.querySelector('.setting-options');
            isOpen = !isOpen;

            setting_options.classList.toggle('d-block', isOpen);
            setting_options.classList.toggle('d-hidden', !isOpen);
        }

        setting.addEventListener('click', handleClick);
    </script> -->

    <script src="../../js/theme-mode.js"></script>
</body>
</html>