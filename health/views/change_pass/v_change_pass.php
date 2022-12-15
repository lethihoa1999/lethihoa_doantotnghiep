<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Đổi Mật Khẩu</h2>
                            <p class="mb-0">Sổ sức khỏe điện tử</p>
                        </div>
                        <div class="p-40">
                            <form id="checkout-form" name="frmchange_pass" method="POST">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" name="pass_old" class="form-control ps-15 bg-transparent" placeholder="Mật khẩu cũ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" name="pass_new" class="form-control ps-15 bg-transparent" placeholder="Mật khẩu mới">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" name="check_pass_new" class="form-control ps-15 bg-transparent" placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                                <?php
                                include_once ("views/error.php");
                                $errorClass = new CError();
                                $errorClass->showError($done);
                                $errorClass->showError($error);
                                //Error::showError($error_1);
                                ?>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" name="btnchange" class="btn btn-info margin-top-10">Change</button>
                                        <button type="button" onclick="window.location.href='patient-details.php'" class="btn btn-warning me-1">Cancel</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="text-center">
                        <p class="mt-20 text-white">- Sign up with -</p>
                        <p class="gap-items-2 mb-20">
                            <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
