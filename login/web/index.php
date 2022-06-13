<?php
if (!isset($_SESSION['LoginOK'])) {
?>

<!DOCTYPE html>
<html>

<head>
     <script type="application/x-javascript">
          addEventListener("load", function () {
               setTimeout(hideURLbar, 0);
          }, false);

          function hideURLbar() {
               window.scrollTo(0, 1);
          }
     </script>
     <!-- //custom-theme  -->
     <link rel="stylesheet" href="css/style.css">
     <!-- font-awesome icons -->
     <link href="css/font-awesome.css" rel="stylesheet">
     <!-- //font-awesome icons -->
     <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
     <title>Đăng nhập</title>

</head>

<body>
     <div class="login-form w3_form">
          <!--  Title-->
          <div class="login-title w3_title">
               <h1>Đăng nhập</h1>
          </div>
          <div class="login w3_login">
               <h2 class="login-header w3_header">Log in</h2>
               <div class="w3l_grid">
                    <form class="login-container" action="/BTL_PTPM/process-login.php" method="POST">
                         <label for="exampleInputEmail1" class="form-label">Tài Khoản</label>
                         <input placeholder="tên người dùng" type="text" id="exampleInputEmail1" aria-describedby="emailHelp" name="taikhoan">

                         <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                         <input placeholder="mật khẩu" type="password" class="form-control" id="exampleInputPassword1" name="password">

                         <input type="submit" name="btnsignin" value="Submit">
                    </form>
                    

                    <div class="bottom-text w3_bottom_text">
                         <h4> <a href="#">Quên mật khẩu?</a></h4>
                    </div>
                    <?php
                    if (isset($_GET['error'])) {
                    echo "<p style='color: red'>{$_GET['error']}</p>";
                    }
                    ?>
               </div>
          </div>
     </div>
</body>

</html>
<?php
} else {
    header("location: index.php");
}
?>