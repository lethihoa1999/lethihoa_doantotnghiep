<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg" style="opacity: 0.8; ">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Đăng Ký</h2>
                            <p class="mb-0">Chào mừng bạn đến với sổ sức khỏe điện tử</p>
                        </div>
                        <div class="p-40">
                            <form id="checkout-form" name="frmregister" method="POST">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                        <input type="text" name="ho_ten" id="ho_ten" class="form-control ps-15 bg-transparent" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                        <input type="email" name="email" id="email" class="form-control ps-15 bg-transparent" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-signal"></i></span>
                                        <input type="text" name="so_dien_thoai" id="so_dien_thoai" class="form-control ps-15 bg-transparent" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" name="password" id="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
                                    </div>
                                </div>
                                <?php
                                include_once ("views/error.php");
                                $errorClass = new CError();
                                $errorClass->showError($error_1);
                                $errorClass->showError($success);
                                //Error::showError($error_1);
                                ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">Tôi đồng ý với các <a href="#" class="text-warning"><b>Điều khoản</b></a></label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" name="btnsubmit" class="tst1 btn btn-info margin-top-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-15 mb-0">Bạn có sẵn sàng để tạo một tài khoản?<a href="login.php" class="text-danger ms-5"> Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>