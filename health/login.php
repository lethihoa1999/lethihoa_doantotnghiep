<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-dark/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 10:31:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://rhythm-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Rhythm Admin - Log in </title>

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.0/css/pro.min.css">

    <!-- Vendors Style-->
    <link rel="stylesheet" href="public/layout/main-dark/css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="public/layout/main-dark/css/style.css">
    <link rel="stylesheet" href="public/layout/main-dark/css/skin_color.css">

</head>

<!-- <body class="hold-transition theme-primary bg-img" style="background-image: url(public/layout/images/auth-bg/bg-1.jpg)"> -->
<body class="hold-transition theme-primary bg-img" style="background-image: url(public/layout/images/anhdoan/tiem-vac-xin-viem-gan-b-bao-lau-thi-co-khang-the-1.jpg)">

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg" style="opacity: 0.8;">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Đăng nhập</h2>
                            <p class="mb-0">Chào mừng bạn đến với sổ sức khỏe điện tử</p>
                        </div>
                        <div class="p-40">
                            <form action="log_login.php" name="frmlogin" id="frmlogin" method="POST">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                        <input type="text" class="form-control ps-15 bg-transparent" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['error_login'])) {?>
                                <div class="alert alert-danger"> Đăng nhập không thành công. </div>
                                <?php } ?>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">Remember Me</label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <div class="fog-pwd text-end">
                                            <a href="auth_user_pass.html" class="hover-warning"><i class="fad fa-lock-alt"></i> Quên mật khẩu?</a><br>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" name="btnlogin" class="btn btn-danger mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-15 mb-0">Không có tài khoản? <a href="auth_register.php" class="text-warning ms-5">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="text-center">
                        <p class="mt-20 text-white">- Sign up With -</p>
                        <p class="gap-items-2 mb-20">
                            <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Vendor JS -->
<script src="public/layout/main-dark/js/vendors.min.js"></script>
<script src="public/layout/main-dark/js/pages/chat-popup.js"></script>
<script src="public/layout/assets/icons/feather-icons/feather.min.js"></script>

</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main-dark/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 10:31:04 GMT -->
</html>
