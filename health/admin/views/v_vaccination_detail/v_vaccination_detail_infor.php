<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Thông tin tiêm chủng</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Thông tin tiêm chủng</li>
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
                    <h4 class="box-title">Chi tiết thông tin đăng ký tiêm chủng Covid-19</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="" name="frmvaccin_details" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Loại vaccin<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="loai_vaccin" id="select" required class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="Vaccine AstraZeneca">Vaccine AstraZeneca</option>
                                                    <option value="Vaccine Verocel">Vaccine Verocel</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Nơi tiêm<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" value="<?php echo $check_id; ?>" name="noi_tiem" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Ngày tiêm <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="ngay_tiem" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Trạng thái tiêm<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="trang_thai" id="select" required class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="1">Đã tiêm</option>
                                                    <option value="2">Chưa tiêm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" name="btnsubmit" class="btn btn-info">Submit</button>
                                        <button type="button" onclick="window.location.href='vaccination_infor.php'" class="btn btn-warning me-1">Cancel</button>
                                    </div>
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

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Chi tiết thông tin đăng ký tiêm chủng Covid-19</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" name="frmvaccin">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Họ & Tên <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="ho_ten" disabled class="form-control" value="<?php echo $show_vaccin->ho_ten; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Ngày sinh <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="ngay_sinh" disabled class="form-control" value="<?php echo $show_vaccin->ngay_sinh; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Giới tính <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="gioi_tinh" id="select" disabled required class="form-select">
                                                    <?php if ($show_vaccin->gioi_tinh != "") { ?>
                                                    <option value="--><?php if ($show_vaccin->gioi_tinh == 0) {
                                                    $name = "Nam";
                                                    } else {
                                                    $name = "Nữ";
                                                    }?>"><?php echo $name;?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>CMND/CCCD/Hộ chiếu <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="can_cuoc_cong_dan" disabled class="form-control" value="<?php echo $show_vaccin->can_cuoc_cong_dan; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số thẻ BHYT <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_the_bao_hiem" disabled class="form-control" value="<?php echo $show_vaccin->so_the_bao_hiem; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Thời gian mong muốn tiêm <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="thoi_gian_tiem" disabled class="form-control" value="<?php echo $show_vaccin->thoi_gian_mong_muon_tiem; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Nghề nghiệp <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="nghe_nghiep" disabled class="form-control" value="<?php echo $show_vaccin->nghe_nghiep; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số điện thoại <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_dien_thoai" disabled class="form-control" value="<?php echo $show_vaccin->so_dien_thoai; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Số nhà, phố, tổ dân phố <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="dia_chi" disabled class="form-control" value="<?php echo $show_vaccin->dia_chi; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>1.Tiền sử phản vệ từ độ 2 trở lên <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group1" disabled type="radio" id="radio_1" value="<?php if ($show_vaccin->cau_1 == 0) { ?>">
                                                        <label class="text-white" for="radio_1">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_1">không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>2. Tiền sử bị COVID-19 trong vòng 6 tháng <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group2" disabled type="radio" id="radio_3" value="<?php if ($show_vaccin->cau_2 == 0) { ?>">
                                                        <label class="text-white"  for="radio_3">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_3">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>3. Tiền sử tiêm vaccin khác trong 14 ngày qua <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group3" disabled type="radio" id="radio_5" value="<?php if ($show_vaccin->cau_3 == 0) { ?>">
                                                        <label class="text-white"  for="radio_5">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_5">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>4. Tiền sử giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan,... <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group4" disabled type="radio" id="radio_7" value="<?php if ($show_vaccin->cau_4 == 0) { ?>">
                                                        <label class="text-white"  for="radio_7">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_7">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>5. Đang dùng thuốc ức chế miễn dịch, corticoid liều cao (tương đương hoặc hơn 2mg prednisolon/kg/ngày trong ít nhất 7 ngày) hoặc điều trị hóa trị, xạ trị <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group5" disabled type="radio" id="radio_9" value="<?php if ($show_vaccin->cau_5 == 0) { ?>">
                                                        <label class="text-white"  for="radio_9">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_9">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>6. Bệnh cấp tính <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group6" disabled type="radio" id="radio_11" value="<?php if ($show_vaccin->cau_6 == 0) { ?>">
                                                        <label class="text-white"  for="radio_11">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_11">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>7. Tiền sử bệnh mãn tính, đang tiến triển <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group7" disabled type="radio" id="radio_13" value="<?php if ($show_vaccin->cau_7 == 0) { ?>">
                                                        <label class="text-white"  for="radio_13">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_13">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>8. Tiền sử bệnh mãn tính đã điều trị ổn <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group8" disabled type="radio" id="radio_15" value="<?php if ($show_vaccin->cau_8 == 0) { ?>">
                                                        <label class="text-white"  for="radio_15">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_15">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>9. Tiền sử rối loạn đông máu/cầm máu hoặc đang dùng thuốc chống đông <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group9" disabled type="radio" id="radio_17" value="<?php if ($show_vaccin->cau_9 == 0) { ?>">
                                                        <label class="text-white"  for="radio_17">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_17">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>10. Tiền sử dị ứng với các dị nguyên khác <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group10" disabled type="radio" id="radio_19" value="<?php if ($show_vaccin->cau_10 == 0) { ?>">
                                                        <label class="text-white"  for="radio_19">Có</label>
                                                    <?php } else {?>
                                                        <label class="text-white"  for="radio_19">Không</label>
                                                    <?php } ?>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
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
