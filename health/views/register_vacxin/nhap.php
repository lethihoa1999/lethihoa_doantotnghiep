<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Đăng ký tiêm chủng</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Forms</li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng ký tiêm chủng</li>
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
                    <h4 class="box-title" style="color: cornsilk; display: flex; justify-content: center; margin-top: 1%; ">ĐĂNG KÝ TIÊM CHỦNG</h4>
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
                                                <input type="text" name="ho_ten" class="form-control"
                                                       <?php if ($read_email->ho_ten != "") { ?>
                                                           value="<?php echo $read_email->ho_ten;?>"
                                                       <?php } else { ?>
                                                           value=""
                                                       <?php } ?>
                                                       required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Ngày sinh <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="ngay_sinh" class="form-control"
                                                    <?php if ($read_email->ngay_sinh != "") { ?>
                                                        value="<?php echo $read_email->ngay_sinh;?>"
                                                    <?php } else { ?>
                                                        value=""
                                                    <?php } ?>
                                                       required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Giới tính <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="gioi_tinh" id="select" required class="form-select">
<!--                                                    --><?php //if ($read_email->gioi_tinh != "") { ?>
<!--                                                        <option value="--><?php //if ($read_email->gioi_tinh == 0) {
//                                                            $name = "Nam";
//                                                        } else {
//                                                            $name = "Nữ";
//                                                        }?><!--">--><?php //echo $name;?><!--</option>-->
<!--                                                    --><?php //} else { ?>
                                                    <option value="">Select</option>
                                                    <option value="0">Nam</option>
                                                    <option value="1">Nữ</option>
<!--                                                    --><?php //} ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số điện thoại liên hệ <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_dien_thoai" class="form-control"
                                                    <?php if ($read_email->so_dien_thoai != "") { ?>
                                                        value="<?php echo $read_email->so_dien_thoai;?>"
                                                    <?php } else { ?>
                                                        value=""
                                                    <?php } ?>
                                                       required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Thời gian mong muốn tiêm <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="thoi_gian_tiem" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số thẻ BHYT (nếu có)</h5>
                                            <div class="controls">
                                                <input type="text" name="so_the_bao_hiem" class="form-control"
                                                    <?php if ($read_email->so_the_bao_hiem != "") { ?>
                                                        value="<?php echo $read_email->so_the_bao_hiem;?>"
                                                    <?php } else { ?>
                                                        value=""
                                                    <?php } ?>
                                                       required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>                                  
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Tỉnh thành <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="tinh" id="select" required class="form-select tinh">
                                                    <option value="">--Chọn tỉnh--</option>
                                                    <?php
                                                    foreach ($m_province as $key) { ?>
                                                        <option value="<?php echo $key->id;?>"><?php echo $key->ten_tinh_thanh_pho;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Quận / huyện <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="quan" id="select" required class="form-select quan">
                                                    <option value="">--Chọn quận/huyện--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Phường / xã <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="phuong" id="select" required class="form-select phuong">
                                                    <option value="">--Chọn phường/xã--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Địa chỉ</h5>
                                            <div class="controls">
                                                <input type="text" name="dia_chi" class="form-control"
                                                    <?php if ($read_email->dia_chi != "") { ?>
                                                        value="<?php echo $read_email->dia_chi;?>"
                                                    <?php } else { ?>
                                                        value=""
                                                    <?php } ?>
                                                       required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Cơ sở tiêm<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="co_so_tiem" id="select" required class="form-select tinh">
                                                    <option value="">--Chọn cơ sở tiêm--</option>
                                                    <?php
                                                    foreach ($m_facility as $key) { ?>
                                                        <option value="<?php echo $key->id;?>"><?php echo $key->ten_co_so_tiem;?></option>
                                                    <?php } ?>
    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Trị bệnh<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="loai_benh" id="select" required class="form-select quan">
                                                    <option value="">--Chọn loại bệnh--</option>
                                                    <?php
                                                    foreach ($m_dises as $key) { ?>
                                                        <option value="<?php echo $key->id;?>"><?php echo $key->ten_benh;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Vacxin<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="ten_vacxin" id="select" required class="form-select phuong">
                                                    <option value="">--Chọn vacxin--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<!--                                  
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>1.Tiền sử phản vệ từ độ 2 trở lên <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group1" type="radio" id="radio_1" value="0" required>
                                                    <label for="radio_1">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group1" type="radio" id="radio_2" value="1" required>
                                                    <label for="radio_2">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>2. Tiền sử dị ứng nghiêm trọng với bất kỳ thành phần nào của vắc-xin <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group2" type="radio" id="radio_3" value="0" required>
                                                    <label for="radio_3">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group2" type="radio" id="radio_4" value="1" required>
                                                    <label for="radio_4">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>3. Tiền sử tiêm vaccin khác trong 14 ngày qua <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group3" type="radio" id="radio_5" value="0" required>
                                                    <label for="radio_5">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group3" type="radio" id="radio_6" value="1" required>
                                                    <label for="radio_6">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>4. Tiền sử giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan,... <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group4" type="radio" id="radio_7" value="0" required>
                                                    <label for="radio_7">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group4" type="radio" id="radio_8" value="1" required>
                                                    <label for="radio_8">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>5. Đang dùng thuốc ức chế miễn dịch, corticoid liều cao (tương đương hoặc hơn 2mg prednisolon/kg/ngày trong ít nhất 7 ngày) hoặc điều trị hóa trị, xạ trị <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group5" type="radio" id="radio_9" value="0" required>
                                                    <label for="radio_9">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group5" type="radio" id="radio_10" value="1" required>
                                                    <label for="radio_10">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>6. Bệnh cấp tính <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group6" type="radio" id="radio_11" value="0" required>
                                                    <label for="radio_11">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group6" type="radio" id="radio_12" value="1" required>
                                                    <label for="radio_12">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>7. Tiền sử bệnh mãn tính, đang tiến triển <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group7" type="radio" id="radio_13" value="0" required>
                                                    <label for="radio_13">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group7" type="radio" id="radio_14" value="1" required>
                                                    <label for="radio_14">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>8. Tiền sử bệnh mãn tính đã điều trị ổn <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group8" type="radio" id="radio_15" value="0" required>
                                                    <label for="radio_15">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group8" type="radio" id="radio_16" value="1" required>
                                                    <label for="radio_16">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>9. Tiền sử rối loạn đông máu/cầm máu hoặc đang dùng thuốc chống đông <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group9" type="radio" id="radio_17" value="0" required>
                                                    <label for="radio_17">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group9" type="radio" id="radio_18" value="1" required>
                                                    <label for="radio_18">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>10. Tiền sử dị ứng với các dị nguyên khác <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="group10" type="radio" id="radio_19" value="0" required>
                                                    <label for="radio_19">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="group10" type="radio" id="radio_20" value="1" required>
                                                    <label for="radio_20">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="text-xs-right" style="text-align: center; margin-top: 0.9%;">
                                    <button type="submit" name="btnsubmit" class="btn btn-info">Gửi đăng ký</button>
                                    <button type="button" onclick="window.location.href='index.php'" class="btn btn-warning me-1" style="margin-left: 0.9%;">Cancel</button>
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
<!-- /.content-wrapper -->