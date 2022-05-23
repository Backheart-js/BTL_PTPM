<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../BTL_QLNK/style/style.css">
</head>

<body>
    <header id="header">
            <nav class="navbar navbar-expand-lg" style="background-color: #1e2d3b;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: unset;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                            <li class="navbar-list">
                                <a href="/BTL_QLNK/index.php" class="navbar-link">Trang chủ</a>
                            </li>
                            <li class="navbar-list">
                                <a href="" class="navbar-link">Thông tin về chúng tôi</a>
                            </li>
                            <li class="navbar-list">
                                <a href="#contact" class="navbar-link">Liên hệ</a>
                            </li> 
                        </ul>
                        <form class="d-flex">
                            <?php
                            if(!isset($_SESSION['LoginOK'])){
                            ?>
                            <a href="login.php"><button class="btn btn-warning" type="button">Đăng nhập</button></a>
                            <?php
                            }else{
                            ?>
                            <a href="manage/index.php"><button class="btn btn-warning me-2" type="button">Quản Lý</button></a>
                            <a href="logout.php"><button class="btn btn-warning" type="button">Đăng xuất</button></a>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </nav>
    </header>