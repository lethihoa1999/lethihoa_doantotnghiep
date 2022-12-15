<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Nhập thông tin hồ sơ sức khỏe</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Nhập thông tin</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <?php
            include_once ("views/error.php");
            $errorClass = new CError();
            $errorClass->showError($done);
            $errorClass->showError($error);
            //Error::showError($error_1);
            ?>
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Thêm thông tin hồ sơ sức khỏe</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="hidden" class="form-control" id="id_khach_hang" name="ma_khach_hang"  placeholder="" value="<?php echo $_GET['ma_khach_hang'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Họ & Tên <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="ho_ten" disabled class="form-control" value="<?php echo $health_record_customer->ho_ten;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Chiều cao <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="chieu_cao" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Cân nặng <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="can_nang" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Huyết áp<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="huyet_ap" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Nhịp tim <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="nhip_tim" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Nhiệt độ <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="nhiet_do" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Nhóm máu<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="nhom_mau" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Ngày khám <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="ngay_kham" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Thông tin bệnh </label>
                                            <textarea rows="5" name="thong_tin_benh" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" name="btnsubmit" class="btn btn-info">Submit</button>
                                        <button type="button" onclick="window.location.href='health_record.php'" class="btn btn-warning me-1">Cancel</button>
                                    </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
</div>
